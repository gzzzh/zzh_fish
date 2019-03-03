<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/20
 * Time: 15:57
 */

namespace app\index\controller;
use think\Db;
use think\Request;
use think\response\View;


class Activity extends HomeBaseController
{
    protected $confType;
    public function _initialize()
    {
        parent::_initialize();
        $this->confType = [
            0 => '关闭',
            1 => '已申请',
            2 => '获得资格',
            3 => '已下单',
            4 => '重新上传',
            5 => '等待返款',
            6 => '申诉',
            7 => '完成',
            8 => '等待审核报告',
        ];
    }

    /**
     * 用户-活动管理
     */
    public function userAct()
    {
        if($this->uInfo['user_type'] != 1){
            $this->error('只有用户才能进入此页面');
        }

        //1.接受活动类型
        /*$data = Request::instance()->param();
        $validate = new \app\index\validate\activity();
        if (!$validate->scene('getAct')->check($data))
        {
            $this->error($validate->getError());
        }*/

        //页码
        $page = 1;
        if (!empty($data['page'])) {
            $data['page'] = intval($data['page']);//页码
            $page = ($data['page'] <= 0) ? 1 : $data['page'];
        }
        $this->assign('page', $page);

        $where = [];
        $uid = $this->userId;
        $where['user_id'] = $uid;
        if(!empty($data['status'])){
            $data['status'] = intval($data['status']);//状态
            $where['status'] = $data['status'];//默认获得资格状态
            $this->assign('status', $where['status']);
        }

        //查找数据
        $oModel = new \app\index\model\Order;
        $str = 'id,goods_id,status,inputtime, winning_time';
        $list = $oModel->getUserActList($where, $page, $str);
        $toTime = time();

        //总活动数量
        $orderCount = $oModel->getUserOrderCounts($where);

        //循环，找出商品的详细信息
        $tModel = new \app\index\model\Task;
        $str = 'id, begin_time, product_name, product_logo, product_price';
        foreach($list as $key => $val){
            $taskInfo = $tModel->whereGetInfoAct(['id' => $val['goods_id']], $str);
            $list[$key]['task_id'] = $taskInfo['id'];
            $list[$key]['begin_time'] = $taskInfo['begin_time'];
            $list[$key]['product_name'] = $taskInfo['product_name'];
            $list[$key]['product_logo'] = $taskInfo['product_logo'];
            $list[$key]['product_price'] = $taskInfo['product_price'];
            $list[$key]['remaining'] = floor(($toTime-strtotime($val['winning_time']))%86400/3600);

        }

        //展示
        $this->assign('conftype', $this->confType);
        $this->assign('list', $list);
        $this->assign('orderCount', $orderCount);
        return view('useract');
    }


    /**
     * 商家-活动管理
     */
    public function getShopList()
    {
        //判断用户类型
        if($this->uInfo['user_type'] != 2){
            $this->error('只有商家才能进入此页面');
        }

        if($this->uInfo['taobao_status'] != 1){
            $this->error('请先绑定您的淘宝店铺');
        }

        $data = Request::instance()->param();

        //页码
        $page = 1;

        if (!empty($data['page'])) {
            $data['page'] = intval($data['page']);
            $page = $data['page'];
        }
        $this->assign('page', $page);

        //通过ID，找出所有
        $uid = $this->userId;
        $tModel = new \app\index\model\Task;
        $str = 'id, product_name, product_logo, product_price,status,begin_time, end_time,num,service';
        $list = $tModel->getShopsList($uid, $page, $str);

        //总活动量
        $taskCount = $tModel->getUserTaskCounts($uid);

        // 模板变量赋值
        $this->assign('list', $list);
        $this->assign('taskCount', $taskCount);

        return view('shop_index');
    }


    /**
     * 商家-发布活动页 or 编辑活动
     */
    public function shopsAddAct()
    {
        //判断用户状态
        $this->checkShopsUser();
        $uid = $this->userId;

        //是否 编辑活动
        $type = Request::instance()->param('type');
        if($type == 'edit')
        {
            $data = Request::instance()->param();
            $validate = new \app\index\validate\activity;
            if (!$validate->scene('editTasks')->check($data))
            {
                $this->error($validate->getError());
            }
            //查找活动
            $tModel = new \app\index\model\Task;
            $where = [
                'id' => $data['id'],
                'userid' => $uid,
            ];
            $info = $tModel->whereGetInfoAct($where);
            //活动存在， 活动状态
            empty($info) && $this->error('活动不存在');
            ($info['status'] != 1) && $this->error('活动进行或关闭，不能编辑活动');
            $this->assign('info', $info);
        }


        //找出用户认证的店铺
        $mModel = new \app\index\model\Merchant;
        $list = $mModel->getShopMerchantLists($uid, 'id, store_name');

        //找出分类
        $cModel = new \app\index\model\Category;
        $cList = $cModel->getCategoryLisets();

        $this->assign('list', $list);
        $this->assign('cateList', $cList);
        return view('shop_addact');
    }


    /**
     * 提交添加活动信息
     */
    public function checkAddAct()
    {
        //判断用户状态
        $this->checkShopsUser();

        //接收参数
        $uid = $this->userId;
        $data = Request::instance()->post();
        $data['product_logo'] = request()->file('product_logo');

        //商品副图
        $twoImg = request()->file('product_logo_two');
        !empty($twoImg) && $data['product_logo_two'] = $twoImg;

        $validate = new \app\index\validate\activity;
        if (!$validate->scene('checkAct')->check($data))
        {
            //$this->error($validate->getError());
            $this->retMsg(['code' => 1, 'msg' => $validate->getError()]);
        }

        //增值服务 <= 商品数量
        $zzCounts = intval($data['user_chat']) +  intval($data['user_ask']) + intval($data['user_photo']) + intval($data['add_photo']) + intval($data['add_cooent']);
        if($data['num'] < $zzCounts){
            //$this->error('增值服务总数 必须小于 活动商品数量');
            $this->retMsg(['code' => 1, 'msg' => '增值服务总数必须小于等于活动商品数量']);
        }

        //开始时间
        if($data['begin_time'] < date('Y-m-d')){
            //$this->error('活动的开始时间不能小于今天');
            $this->retMsg(['code' => 1, 'msg' => '活动的开始时间不能小于今天']);
        }

        $sign = strstr($data['task_label'], '，');
        if($sign !== false){
            //$this->error('搜索关键词用英文逗号","隔开');
            $this->retMsg(['code' => 1, 'msg' => '搜索关键词用英文逗号","隔开']);
        }

        $addData = [];
        $addData['task_type'] = $data['task_type'];
        $addData['merchant_id'] = $data['merchant_id'];
        $addData['product_name'] = $data['product_name'];
        $addData['product_link'] = $data['product_link'];
        $addData['category_id'] = $data['category_id'];
        $addData['task_label'] = shopsLabelNum($this->uInfo['is_vip'], $data['task_label']);
        $addData['sortord'] = $data['sortord'];
        $addData['product_price'] = $data['product_price'];
        $addData['num'] = $data['num'];
        $addData['begin_time'] = $data['begin_time'];
        $addData['end_time'] = $data['end_time'];
        $addData['if_huabei'] = $data['if_huabei'];
        $addData['if_visa'] = $data['if_visa'];
        $addData['is_serve'] = $data['is_serve'];
        $addData['remark'] = !empty($data['remark']) ? $data['remark'] : '任意规格';

        //开始上传主图
        $res = $data['product_logo']->move(ROOT_PATH . 'public' . DS . 'upload'. DS."activity");
        !empty($res) && $addData['product_logo'] = '/upload/activity/'.$res->getSaveName();

        //副图不存在，就用主图代替
        if(empty($data['product_logo_two'])){
            $addData['product_logo_two'] = $addData['product_logo'];
            //empty($res) && $this->error('上传商品主图失败,原因是：'.$res->getError());
            empty($res) && $this->retMsg(['code' => 1, 'msg' => '上传商品主图失败,原因是：'.$res->getError()]);

        }else{
            $resTwo = $data['product_logo_two']->move(ROOT_PATH . 'public' . DS . 'upload'. DS."activity");
            !empty($resTwo) && $addData['product_logo_two'] = '/upload/activity/'.$resTwo->getSaveName();;
            //empty($res) && $this->error('上传商品主图失败,原因是：'.$res->getError());
            //empty($resTwo) && $this->error('上传商品礼图失败,原因是：'.$resTwo->getError());
            empty($res) && $this->retMsg(['code' => 1, 'msg' => '上传商品主图失败,原因是：'.$res->getError()]);
            empty($resTwo) && $this->retMsg(['code' => 1, 'msg' => '上传商品主图失败,原因是：'.$resTwo->getError()]);

        }

        //店铺是否和用户一致
        $mModel = new \app\index\model\Merchant;
        $cindition = [
            'id' => $data['merchant_id'],
            'userid' => $uid,
        ];
        $info = $mModel->getShopsUserIdExits($cindition);
        if(empty($info)){
            //$this->error('请选择自己的认证店铺');
            $this->retMsg(['code' => 1, 'msg' => '店铺不存在或不是您的店铺']);
        }

        //计算保证金和服务费
        $addData['deposit'] = $data['num'] * $data['product_price'];

        //计算推广费用[包含短信]
        $addData['service'] = (2 * $data['product_price']) + ($addData['deposit'] * 0.02) + (0.07 * $data['num']);

        //增值服务
        $addData['adv_price'] = 0;
        if($data['is_serve'] == 1){
            $addData['user_chat'] = 0;
            $addData['user_ask'] = 0;
            $addData['user_photo'] = 0;
            $addData['add_photo'] = 0;
            $addData['add_cooent'] = 0;
        }else{
            $addData['adv_price'] = $data['user_chat'] +  $data['user_ask'] + ($data['user_photo'] * 2) + ($data['add_photo'] * 2) + ($data['add_cooent'] * 2);
            if($addData['adv_price'] == 0){
                $addData['is_serve'] = 1;
            }
        }

        //开始添加
        $addData['userid'] = $uid;
        $addData['last_num'] = $data['num'];//剩余次数=商品数量
        $addData['order_no'] = randcode(20,3);
        $tModel = new \app\index\model\Task;
        $res = $tModel->insertGetId($addData);
        if(empty($res)){
            //$this->error('活动发布失败，系统错误');
            $this->retMsg(['code' => 1, 'msg' => '发布活动失败，系统错误']);
        }
        //$this->redirect("/biz/actshops",'',1,'ok');
        $this->retMsg(['code' => 0, 'msg' => '发布活动成功']);

    }


    /**
     * 编辑-保存活动
     */
    public function saveTaskUser()
    {
        //判断用户状态
        $this->checkShopsUser();
        $uid = $this->userId;

        //是否 编辑活动
        $type = Request::instance()->param('types');
        if($type == 'edit')
        {
            $data = Request::instance()->param();
            $logo = request()->file('product_logo');
            $data['logo'] = $logo;

            $validate = new \app\index\validate\activity;
            if (!$validate->scene('saveTask')->check($data))
            {
                $this->error($validate->getError());
            }

            //增值服务 <= 商品数量
            $zzCounts = $data['user_chat'] +  $data['user_ask'] + $data['user_photo'] + $data['add_photo'] + $data['add_cooent'];
            if($data['num'] < $zzCounts){
                $this->error('增值服务总数 必须小于 活动商品数量');
            }

            //开始时间
            if(!empty($data['begin_time']) && ($data['begin_time'] < date('Y-m-d'))){
                $this->error('开始时间不能小于今天');
            }

            $sign = strstr($data['task_label'], '，');
            if($sign !== false){
                $this->error('搜索关键词用英文逗号","隔开');
            }

            $addData = [];
            $addData['task_type'] = $data['task_type'];
            $addData['merchant_id'] = $data['merchant_id'];
            $addData['product_name'] = $data['product_name'];
            $addData['product_link'] = $data['product_link'];
            $addData['category_id'] = $data['category_id'];
            $addData['task_label'] = shopsLabelNum($this->uInfo['is_vip'], $data['task_label']);;
            $addData['sortord'] = $data['sortord'];
            $addData['product_price'] = $data['product_price'];
            $addData['num'] = $data['num'];
            !empty($data['begin_time']) && $addData['begin_time'] = $data['begin_time'];
            !empty($data['end_time']) && $addData['end_time'] = $data['end_time'];
            $addData['if_huabei'] = $data['if_huabei'];
            $addData['if_visa'] = $data['if_visa'];
            $addData['is_serve'] = $data['is_serve'];
            $addData['remark'] = !empty($data['remark']) ? $data['remark'] : '任意规格';

            //主图上传了，就保存
            if(!empty($logo)){
                //上传保存
                $res = $logo->move(ROOT_PATH . 'public' . DS . 'upload'. DS."activity");
                if(!empty($res)){
                    $addData['product_logo'] = '/upload/activity/'.$res->getSaveName();
                }else{
                    $this->error('上传图片失败,原因是：'.$res->getError());
                }
            }

            //副图上传了，就保存
            $logoTwo = request()->file('product_logo_two');
            if(!empty($logoTwo)){
                $data['product_logo_two'] = $logoTwo;
                //上传保存
                $resTwo = $logoTwo->move(ROOT_PATH . 'public' . DS . 'upload'. DS."activity");
                if(!empty($resTwo)){
                    $addData['product_logo_two'] = '/upload/activity/'.$resTwo->getSaveName();
                }else{
                    $this->error('上传图片失败,原因是：'.$resTwo->getError());
                }
            }

            //查找活动
            $tModel = new \app\index\model\Task;
            $where = [
                'id' => $data['id'],
                'userid' => $uid,
            ];
            $info = $tModel->whereGetInfoAct($where);
            //活动存在， 活动状态
            empty($info) && $this->error('活动不存在');
            ($info['status'] != 1) && $this->error('活动进行中或已关闭，不能保存编辑信息');

            //计算保证金和服务费
            $addData['deposit'] = $data['num'] * $data['product_price'];

            //计算推广费用[包含短信]
            $addData['service'] = (2 * $data['product_price']) + ($addData['deposit'] * 0.02) + (0.07 * $data['num']);

            //增值服务
            $addData['adv_price'] = 0;
            if($data['is_serve'] == 1){
                $addData['user_chat'] = 0;
                $addData['user_ask'] = 0;
                $addData['user_photo'] = 0;
                $addData['add_photo'] = 0;
                $addData['add_cooent'] = 0;
            }else{
                $addData['adv_price'] = $data['user_chat'] +  $data['user_ask'] + ($data['user_photo'] * 2) + ($data['add_photo'] * 2) + ($data['add_cooent'] * 2);
                if($addData['adv_price'] == 0){
                    $addData['is_serve'] = 1;
                }
            }

            //保存编辑信息
            $where['status'] =1;
            $res = $tModel->updateTradeNoAndStatus($where, $addData);
            ($res === false) && $this->error('保存失败，系统错误');

            //跳转活动页
            $this->redirect("/biz/actshops",'',1,'ok');

        }else{
            $this->error('非法请求，操作类型参数为空');
        }
    }


    /**
     * 商家-关闭活动
     */
    public function delUserTaksStatus()
    {
        //判断用户状态
        $this->checkShopsUser();
        $uid = $this->userId;

        //是否关闭类型
        $type = Request::instance()->param('types');
        if($type == 'del')
        {
            $data = Request::instance()->param();
            $validate = new \app\index\validate\activity;
            if (!$validate->scene('editTasks')->check($data))
            {
                $this->error($validate->getError());
            }

            //查找活动
            $tModel = new \app\index\model\Task;
            $where = [
                'id' => $data['id'],
                'userid' => $uid,
            ];
            $info = $tModel->whereGetInfoAct($where,'id,userid,status');
            //活动存在， 活动状态
            empty($info) && $this->error('活动信息不存在');
            ($info['status'] != 1) && $this->error('活动已进行或关闭，无法操作');

            //关闭状态
            $where['status'] = 1;
            unset($data['types']);
            $res = $tModel->updateTradeNoAndStatus($where, ['status' => 6]);
            ($res === false) && $this->error('关闭活动失败，请确认活动状态');

            //跳转活动页
            $this->redirect("/biz/actshops",'',1,'ok');

        }else{
            $this->error('非法请求，操作类型参数为空');
        }
    }


    /**
     * 商家-结算进行中的活动
     */
    public function closingTasksUser()
    {
        //判断用户状态
        $this->checkShopsUser();
        $uid = $this->userId;

        //是否关闭类型
        $type = Request::instance()->param('types');
        if($type == 'closing')
        {
            $data = Request::instance()->param();
            $validate = new \app\index\validate\activity;
            if (!$validate->scene('editTasks')->check($data))
            {
                $this->error($validate->getError());
            }

            //查找活动
            $tModel = new \app\index\model\Task;
            $where = [
                'id' => $data['id'],
                'userid' => $uid,
            ];
            $info = $tModel->whereGetInfoAct($where,'id,userid,status');
            //活动存在， 活动状态
            empty($info) && $this->error('活动息不存在');
            ($info['status'] != 3) && $this->error('活动未开始或已完成，无法结算');

            //关闭状态
            $where['status'] = 3;
            unset($data['types']);
            $res = $tModel->updateTradeNoAndStatus($where, ['status' => 7]);
            ($res === false) && $this->error('申请结算活动失败，请确认活动状态');

            //跳转活动页
            $this->redirect("/biz/actshops",'',1,'ok');
        }else{
            $this->error('非法请求，操作类型参数为空');
        }
    }


    /**
     * 活动-输入交易订单号
     */
    public function addTradeNumber()
    {
        //判断用户状态
        $this->checkShopsUser();

        //接收参数
        $uid = $this->userId;
        $data = Request::instance()->param();
        $validate = new \app\index\validate\activity;
        if (!$validate->scene('addTradeNum')->check($data))
        {
            $this->error($validate->getError());
        }

        //查看是否存在活动
        $tModel = new \app\index\model\Task;
        $where = [
            'id' => $data['id'],
            'userid' => $uid,
        ];
        $info = $tModel->whereGetInfoAct($where);
        if(empty($info))
        {
            $this->error('不存在的活动信息');
        }

        //活动状态
        if($info['status'] != 1)
        {
            $this->error('活动未处于待付款状态,请确认活动状态');
        }

        $info['countsPrice'] = $info['deposit'] + $info['service'] + $info['adv_price'];
        $this->assign('info', $info);
        return View('add_trade_num');
    }


    /**
     * 活动-提交订单号
     */
    public function checkActTradeNo()
    {
        //判断用户状态
        $this->checkShopsUser();

        //接收参数
        $uid = $this->userId;
        $data = Request::instance()->param();
        $validate = new \app\index\validate\activity;
        if (!$validate->scene('checkTradeNo')->check($data))
        {
            $this->error($validate->getError());
        }

        //查看是否存在活动
        $tModel = new \app\index\model\Task;
        $where = [
            'id' => $data['id'],
            'userid' => $uid,
        ];
        $info = $tModel->whereGetInfoAct($where);
        if(empty($info))
        {
            $this->error('不存在的活动信息');
        }

        //活动状态
        if($info['status'] != 1)
        {
            $this->error('活动未处于待付款状态...');
        }

        //保存订单号信息,改变状态
        $where = [
            'id' => $info['id'],
        ];

        $update = [
            'trade_no' => $data['trade_no'],
            'status' => 2,
        ];

        $res = $tModel->updateTradeNoAndStatus($where, $update);
        if(!$res){
            $this->error('提交订单失败，请稍后重试');
        }

        $this->redirect('/biz/actshops','',1,'ok');
    }


    /**
     * 商家-查看活动申请用户
     */
    public function getShopsTasksUserList()
    {
        //判断用户状态
        $this->checkShopsUser();

        //接收参数
        $user_id = $this->userId;
        $data = Request::instance()->param();
        $validate = new \app\index\validate\activity;
        if (!$validate->scene('editTasks')->check($data))
        {
            $this->error($validate->getError());
        }

        //查看活动是否存在
        $tModel = new \app\index\model\Task;
        $oModel = new \app\index\model\Order;
        $cateModel = new \app\index\model\Category;
        $busModel = new \app\index\model\BindUserShop;
        $where = [
            'id' => $data['id'],
            'userid' => $user_id,
        ];
        $info = $tModel->whereGetInfoAct($where,'id,userid,product_name,status,num,last_num,category_id');
        if(empty($info))
        {
            $this->error('非法请求，不存在的活动信息');
        }

        //活动未进行，未完成，未结算。则无法查看详情
        if($info['status'] != 3 && $info['status'] != 4 && $info['status'] != 7){
            $this->error('活动未开始，无法查看详情');
        }
        //当前活动分类名
        $catename = $cateModel->getCateInfosName($info['category_id']);

        //申请活动列表
        $where = [
            'goods_id' => $data['id']
        ];
        $page = 1;
        if(!empty($data['page'])){
            $page = $data['page'];
        }

        //查找申请列表
        $years = date('Y');
        $list = $oModel->getUserActList($where, $page);
        //循环，拿到用户淘宝号和淘气值,用户属性
        foreach ($list as $key => $val){
            $usInfo = $busModel->getUserTaobaoInfosOrder($val['user_id'],'id,userid,account,price_value,sex,birth_year');
            $list[$key]['account'] = !empty($usInfo['account']) ? str_replaces($usInfo['account'],1,1) : '用户隐藏';
            $list[$key]['wn_value'] = !empty($usInfo['price_value']) ? $usInfo['price_value'] : '用户隐藏';
            $list[$key]['sex'] = !empty($usInfo['sex']) ? $usInfo['sex'] : '隐藏性别';

            //随机标签、属性
            $catPro = $cateModel->setUserCategoryList($info['category_id']);
            $list[$key]['property'] = $catename;
            $list[$key]['property1'] = $catPro;

            $list[$key]['age'] = ($years - $usInfo['birth_year']);
        }
        $counts = $oModel->getUserOrderCounts($where);//总量
        $this->assign('page', $page);//页码
        $this->assign('info', $info);//活动信息

        $this->assign('list', $list);//订单数
        $this->assign('counts', $counts);//订单总数

        return View('check_list');
    }


    /**
     *商家-分配资格操作
     */
    public function ShopsUserAllotUsers()
    {
        //判断用户状态
        $this->checkShopsUser();

        //接收参数
        $user_id = $this->userId;
        $data = Request::instance()->param();
        $validate = new \app\index\validate\task;
        if (!$validate->scene('allotUsers')->check($data))
        {
            $this->error($validate->getError());
        }

        //查看活动订单是否存在
        $oModel = new \app\index\model\Order;
        $tModel = new \app\index\model\Task;
        $where = [
            'id' => $data['order_id'],
            'user_id' => $data['user_id'],
        ];
        $info = $oModel->userIdGetOrderTaskIdInfo($where,'id,user_id,seller_id,goods_id,status');
        empty($info) && $this->error('不存在的活动订单信息');

        //是否为当事商家
        ($info['seller_id'] != $user_id) && $this->error('非法操作');

        //活动状态
        ($info['status'] != 1) && $this->error('用户订单未处于申请状态');

        //查看活动状态
        $taskWhere = [
            'id' => $info['goods_id'],
            'userid' => $user_id,
        ];

        //查看活动状态
        $taskInfo = $tModel->whereGetInfoAct($taskWhere,'id,status,last_num,is_serve,user_chat,user_ask,user_photo,add_photo,add_cooent');
        empty($taskInfo) && $this->error('不存在的活动');
        //状态 1=待付款 2=(付款)待审核 3=(付款)进行中 4=已完成 5=驳回 6=失效 7=申请结算
        if(!in_array($taskInfo['status'], [3, 7])){
            $this->error('该活动未开始或已完成，无法分配');
        }
        //剩余次数
        if($taskInfo['last_num'] <= 0){
            $this->error('活动暂无剩余次数可分配');
        }

        //开启事务,减少剩余次数
        Db::startTrans();
        $res = $tModel->updateTaskLastNumReduceOne($taskWhere,'last_num');
        if(empty($res)){
            Db::rollback();
            $this->error('减少活动次数失败，请求错误');
        }

        //判断次数小于0
        $upInfo = $tModel->whereGetInfoAct($taskWhere,'id,last_num');
        if($upInfo['last_num'] < 0 ){
            Db::rollback();
            $this->error('剩余次数小于0，终止操作');
        }

        //存在增值服务，分配
        $is_serve = 0;
        $serveStr = '';
        if($taskInfo['is_serve'] == 2){
            if($taskInfo['user_chat'] > 0){
                $serveStr = 'user_chat';
                $is_serve = 1;
            }elseif ($taskInfo['user_ask'] > 0){
                $serveStr = 'user_ask';
                $is_serve = 2;
            }elseif ($taskInfo['user_photo'] > 0){
                $serveStr = 'user_photo';
                $is_serve = 3;
            }elseif ($taskInfo['add_photo'] > 0){
                $serveStr = 'add_photo';
                $is_serve = 4;
            }elseif ($taskInfo['add_cooent'] > 0){
                $serveStr = 'add_cooent';
                $is_serve = 5;
            }

            //有次数，减少增值次数
            if($serveStr !== '')
            {
                $res = $tModel->updateTaskLastNumReduceOne($taskWhere, $serveStr);
                if(empty($res)){
                    Db::rollback();
                    $this->error('减少活动增值次数失败，请求错误');
                }
            }

        }

        //修改订单状态,分配增值服务
        $upOrder = [
            'status' => 2,
            'winning_time' => date('Y-m-d H:i:s'),
        ];//中奖,日期
        if($is_serve > 0){$upOrder['is_serve'] = $is_serve;}//存在即分配

        $where['status'] = 1;
        $res = $oModel->userIdUpdateOrderStatusInfo($where, $upOrder);
        if(empty($res)){
            Db::rollback();
            $this->error('修改订单状态失败，请求错误');
        }

        //分配完成,返回
        Db::commit();
        $page = !empty($data['page']) ? $data['page'] : 1;
        $this->redirect("/task/details/{$info['goods_id']}", ['page' => $page]);
    }


    /**
     * 商家-关闭用户活动资格
     */
    public function candelUserOrderStatusInfo()
    {
        //判断用户状态
        $this->checkShopsUser();

        //接收参数
        $user_id = $this->userId;
        $data = Request::instance()->param();
        $validate = new \app\index\validate\task;
        if (!$validate->scene('allotUsers')->check($data))
        {
            $this->error($validate->getError());
        }

        //查看活动订单是否存在
        $oModel = new \app\index\model\Order;
        $tModel = new \app\index\model\Task;
        $uindexModel = new \app\index\model\User;
        $fModel = new \app\admin\model\Finance;
        $where = [
            'id' => $data['order_id'],
            'user_id' => $data['user_id'],
        ];
        $info = $oModel->userIdGetOrderTaskIdInfo($where,'id,user_id,seller_id,goods_id,status,is_serve');
        empty($info) && $this->error('不存在的活动订单信息');

        //是否为当事商家
        ($info['seller_id'] != $user_id) && $this->error('非法操作');

        //活动状态
        (!in_array($info['status'], [2,3,4,8])) && $this->error('用户未获得资格，取消失败');

        //查看活动状态
        $taskWhere = [
            'id' => $info['goods_id'],
            'userid' => $user_id,
        ];

        //查看活动状态
        $taskInfo = $tModel->whereGetInfoAct($taskWhere,'id,status,product_name, last_num,is_serve,user_chat,user_ask,user_photo,add_photo,add_cooent');
        empty($taskInfo) && $this->error('不存在的活动');
        //状态 1=待付款 2=(付款)待审核 3=(付款)进行中 4=已完成 5=驳回 6=失效 7=申请结算
        if(!in_array($taskInfo['status'], [3,4,7])){
            $this->error('该活动未开始或失效，无法取消资格');
        }

        //开启事务
        Db::startTrans();

        //关闭订单状态
        $upOrder = [
            'status' => 0, //关闭订单
            'check_time' => date('Y-m-d H:i:s')
        ];//中奖,日期
        $res = $oModel->delUpdateOrderStatusInfo($where, $upOrder);
        if(empty($res)){
            Db::rollback();
            $this->error('关闭订单状态失败，请求错误');
        }

        //根据活动状态，判断是返款|增加剩余次数
        //3、7 = 进行中，增加剩余次数
        if(in_array($taskInfo['status'], [3,7]))
        {
            //增加活动剩余次数
            $res = $tModel->updateAddTaskLastNumOne($taskWhere,'last_num');
            if(empty($res)){
                Db::rollback();
                $this->error('增加活动次数失败，请求错误');
            }

            //存在增值服务，加回活动中
            if($taskInfo['is_serve'] == 2 && $info['is_serve'] > 0){
                //判断类型
                $serveStr = '';
                switch ($info['is_serve']){
                    case 1:
                        $serveStr = 'user_chat';
                        break;

                    case 2:
                        $serveStr = 'user_ask';
                        break;

                    case 3:
                        $serveStr = 'user_photo';
                        break;

                    case 4:
                        $serveStr = 'add_photo';
                        break;

                    case 5:
                        $serveStr = 'add_cooent';
                        break;

                    default:
                        Db::rollback();
                        $this->error('用户增值类型有误，请求错误');
                        break;
                }
                $res = $tModel->updateAddTaskLastNumOne($taskWhere, $serveStr);
                if(empty($res)){
                    Db::rollback();
                    $this->error('增加活动增值次数失败，请求错误');
                }
            }

        }elseif($taskInfo['status'] == 4){
            //活动已完成，则返款到商家账户上
            $res = $uindexModel->addUserOrderMoney($taskInfo['userid'], $taskInfo['product_price']);
            if(empty($res)){
                Db::rollback();
                $this->error('商家返款失败，系统错误');
            }

            //增加财务日志
            $finAdd = [
                'uid' => $info['user_id'],
                'money' => $taskInfo['product_price'],
                'name' => '二次结算',
                'details' => '活动：‘'.$taskInfo['product_name'].'’进行二次结算，商家关闭活动订单。',
                'types' => '2'
            ];
            $res = $fModel->addFinances($finAdd);
            if(empty($res)){
                Db::rollback();
                $this->error('添加财务日志失败，系统错误');
            }
        }else{
            Db::rollback();
            $this->error('活动状态异常，关闭订单失败');
        }

        //关闭成功
        Db::commit();
        $page = !empty($data['page']) ? $data['page'] : 1;
        $this->redirect("/task/details/{$info['goods_id']}", ['page' => $page]);
    }


    /**
     * 商家-驳回用户上传信息[用户重新上传]
     */
    public function shopsRejectUserStatus()
    {
        //判断用户状态
        $this->checkShopsUser();

        //接收参数
        $user_id = $this->userId;
        $data = Request::instance()->param();
        $validate = new \app\index\validate\task;
        if (!$validate->scene('allotUsers')->check($data))
        {
            $this->error($validate->getError());
        }

        //查看活动订单是否存在
        $oModel = new \app\index\model\Order;
        $tModel = new \app\index\model\Task;
        $where = [
            'id' => $data['order_id'],
            'user_id' => $data['user_id'],
        ];
        $info = $oModel->userIdGetOrderTaskIdInfo($where,'id,user_id,seller_id,goods_id,status,is_serve');
        empty($info) && $this->error('不存在的活动订单信息');

        //是否为当事商家
        ($info['seller_id'] != $user_id) && $this->error('非法操作');

        //活动状态
        ($info['status'] != 8) && $this->error('用户上传试用报告，才能驳回操作');

        //查看活动状态
        $taskWhere = [
            'id' => $info['goods_id'],
            'userid' => $user_id,
        ];

        //查看活动状态
        $taskInfo = $tModel->whereGetInfoAct($taskWhere,'id,status,last_num,is_serve,user_chat,user_ask,user_photo,add_photo,add_cooent');
        empty($taskInfo) && $this->error('不存在的活动');
        //状态 1=待付款 2=(付款)待审核 3=(付款)进行中 4=已完成 5=驳回 6=失效 7=申请结算
        if(!in_array($taskInfo['status'], [3,4,7])){
            $this->error('活动未开始或者已失效，无法驳回');
        }

        //修改订单状态
        $upOrder = [
            'status' => 4, //驳回，重传
            'comment_time' => date('Y-m-d H:i:s')
        ];//状态,日期
        $res = $oModel->cancelUpdateOrderStatusInfo($where, $upOrder);
        if(empty($res)){
            Db::rollback();
            $this->error('修改订单状态失败，请求错误');
        }

        //操作完成,返回
        Db::commit();
        $page = !empty($data['page']) ? $data['page'] : 1;
        $this->redirect("/task/details/{$info['goods_id']}", ['page' => $page]);
    }


    /**
     * 商家-通过
     */
    public function shopsPassUserOrdersInfo()
    {
        //判断用户状态
        $this->checkShopsUser();

        //接收参数
        $user_id = $this->userId;
        $data = Request::instance()->param();
        $validate = new \app\index\validate\task;
        if (!$validate->scene('allotUsers')->check($data))
        {
            $this->error($validate->getError());
        }

        //查看活动订单是否存在
        $oModel = new \app\index\model\Order;
        $tModel = new \app\index\model\Task;
        $fModel = new \app\admin\model\Finance;
        $where = [
            'id' => $data['order_id'],
            'user_id' => $data['user_id'],
        ];
        $info = $oModel->userIdGetOrderTaskIdInfo($where,'id,user_id,seller_id,goods_id,status,is_serve');
        empty($info) && $this->error('不存在的活动订单信息');

        //是否为当事商家
        ($info['seller_id'] != $user_id) && $this->error('非法操作');

        //活动状态
        ($info['status'] != 8) && $this->error('用户上传试用报告，才能进行审核操作');

        //查看活动状态
        $taskWhere = [
            'id' => $info['goods_id'],
            'userid' => $user_id,
        ];

        //查看活动状态
        $taskInfo = $tModel->whereGetInfoAct($taskWhere,'id,product_name,status,product_price,last_num,is_serve,user_chat,user_ask,user_photo,add_photo,add_cooent');
        empty($taskInfo) && $this->error('不存在的活动');
        //状态 1=待付款 2=(付款)待审核 3=(付款)进行中 4=已完成 5=驳回 6=失效 7=申请结算
        if(!in_array($taskInfo['status'], [3,4,7])){
            $this->error('活动未开始或者已失效，无法通过审核');
        }

        //剩余次数
        if($taskInfo['last_num'] <= 0){
            $this->error('活动剩余次数为0，请联系客服处理。');
        }

        //修改订单状态
        $upOrder = [
            'status' => 7, //通过，返钱
            'comment_time' => date('Y-m-d H:i:s')
        ];//状态,日期
        $res = $oModel->passUpdateOrderStatusInfo($where, $upOrder);
        if(empty($res)){
            Db::rollback();
            $this->error('修改订单状态失败，请求错误');
        }

        //是否第一次完成活动
        $uModel = new \app\index\model\User;
        $res = $uModel->saveLogin($data['user_id'], ['if_task' => 1]);

        //给用户账号加钱
        $res = $uModel->addUserOrderMoney($data['user_id'], $taskInfo['product_price']);
        if(empty($res)){
            Db::rollback();
            $this->error('用户返款失败，请求错误');
        }else{
            //增加财务日志
            $finAdd = [
                'uid' => $data['user_id'],
                'money' => $taskInfo['product_price'],
                'name' => '活动返款',
                'details' => '活动：‘'.$taskInfo['product_name'].'’完成，返款成功',
                'types' => '1'
            ];
            $res = $fModel->addFinances($finAdd);
            if(empty($res)){
                Db::rollback();
                $this->error('添加财务日志失败，系统错误');
            }
        }

        //操作完成,返回
        Db::commit();
        $page = !empty($data['page']) ? $data['page'] : 1;
        $this->redirect("/task/details/{$info['goods_id']}", ['page' => $page]);
    }


    /**
     * 商家-判断是否为可发布活动状态
     */
    public function checkShopsUser()
    {
        //判断用户类型
        if($this->uInfo['user_type'] != 2){
            $this->error('只有商家才能进入此页面');
        }

        //是否绑定店铺
        if($this->uInfo['taobao_status'] != 1){
            $this->success('请先绑定淘宝店铺','/biz/addshop','','3');
            return;
        }

        //VIP登录
        if($this->uInfo['is_vip']  == 0){
            $this->success('成为VIP用户，才能发布活动','/biz/forvip','','3');
            return;
        }

        //VIP登录
        if($this->uInfo['status']  == 2){
            $this->error('您已处于封号状态，无法进行该步骤。');
        }
    }

}