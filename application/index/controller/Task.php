<?php
/**
 * Created by PhpStorm.
 * User: [一秋]
 * Date: 2018/3/29
 * Time: 9:56
 * Desc: 成功源于点滴
 */

namespace app\index\controller;

use think\Request;
use think\Db;
class Task extends HomeBaseController
{
    /**
     * 用户-申请活动页面
     *
     */
    public function addUserTask()
    {
        //判断用户类型,状态
        $user_id = $this->userId;
        if ($this->uInfo['user_type'] == 2) {
            $this->error('只有用户才能申请活动');
        }

        if ($this->uInfo['status'] == 2) {
            $this->error('当前状态不能申请活动');
        }

        //用户支付宝-淘宝是否绑定
        /*if ($this->uInfo['alipay_status'] == 0) {
            $this->redirect('/uc/bind', '', '1', '请先绑定支付宝!');
        } elseif ($this->uInfo['alipay_status'] == 2) {
            $this->error('支付宝认证审核中，请稍等');
        }*/
        if ($this->uInfo['taobao_status'] == 0) {
            $this->success('请先绑定淘宝账号','/uc/bindtb');
        } elseif ($this->uInfo['taobao_status'] == 2) {
            $this->error('淘宝认证审核中，请稍等');
        }

        $data = Request::instance()->param();
        $validate = new \app\index\validate\task;
        if (!$validate->scene('checkTaskId')->check($data)) {
            $this->error($validate->getError());
        }

        //检查活动状态
        $tModle = new \app\index\model\Task;
        $where = ['id' => $data['tid']];
        $tInfo = $tModle->whereGetInfoAct($where);
        if (empty($tInfo)) {
            $this->error('非法请求,不存在的活动信息');
        }
        if (!in_array($tInfo['status'], [3,7])) {
            $this->error('活动未开始或已结束');
        }
        //活动关键词
        $task_label = explode(',', $tInfo['task_label']);

        //商家店铺详情
        $merModel = new \app\index\model\Merchant;
        $mInfo = $merModel->idGetMerchantInfo($tInfo['merchant_id'], 'id,store_name,wang_name,store_type');
        $mInfo['store_name'] = str_replaces($mInfo['store_name'],1,1);
        $mInfo['wang_name'] =str_replaces($mInfo['wang_name'],1,1);

        $this->assign('task_label', $task_label);
        $this->assign('tInfo', $tInfo);
        $this->assign('mInfo', $mInfo);

        //当天24点前
        $todays = date('Y-m-d 24:00');
        $this->assign('todays', $todays);

        return view('add_user_task');
    }


    /**
     * 用户申请活动-核对商品链接或店铺名称
     */
    public function checkTaskLink()
    {
        $data = Request::instance()->param();
        $validate = new \app\index\validate\task;
        if (!$validate->scene('checkUrl')->check($data))
        {
            //$this->retMsg(['code' => 1, 'msg' => $validate->getError()]);
            return json_encode(['code' => 1, 'msg' => $validate->getError()], JSON_UNESCAPED_UNICODE);
        }

        $tModle = new \app\index\model\Task;
        $where = ['id' => $data['tid']];
        $tInfo = $tModle->whereGetInfoAct($where,'id,merchant_id,product_link');
        if (empty($tInfo)) {
            //$this->retMsg(['code' => 1, 'msg' => '非法请求，请重试']);
            return json_encode(['code' => 1, 'msg' => '非法请求，请重试'], JSON_UNESCAPED_UNICODE);
        }

        //店铺名称
        $merModel = new \app\index\model\Merchant;
        $mInfo = $merModel->idGetMerchantInfo($tInfo['merchant_id'], 'id,store_name');

        //比对链接和商品名称
        if(($data['product_link'] != $tInfo['product_link']) && ($data['product_link'] != $mInfo['store_name']))
        {
            return json_encode(['code' => 1, 'msg' => '匹配失败，请重新输入'], JSON_UNESCAPED_UNICODE);
        }

        //$this->retMsg(['code' => 0, 'msg' => '匹配成功']);
        return json_encode(['code' => 0, 'msg' => '匹配成功'], JSON_UNESCAPED_UNICODE);

    }


    /**
     * 用户-申请活动请求
     */
    public function applyTask(){
        //判断用户类型,状态
        $user_id = $this->userId;
        if($this->uInfo['user_type'] == 2){
            $this->error('只有用户才能申请活动');
        }

        if($this->uInfo['status'] == 2){
            $this->error('当前状态不能申请活动');
        }

        //用户支付宝-淘宝是否绑定
        /*if($this->uInfo['alipay_status'] == 0)
        {
            $this->redirect('/uc/bind','','1','请先绑定支付宝!');
        }elseif($this->uInfo['alipay_status'] == 2)
        {
            $this->error('支付宝认证通过才能申请活动!');
        }*/

        if($this->uInfo['taobao_status'] == 0)
        {
            $this->redirect('/uc/bindtb','','1','请先绑定淘宝!');
        }elseif($this->uInfo['taobao_status'] == 2)
        {
            $this->error('淘宝认证审核中');
        }

        $data = Request::instance()->param();
        $validate = new \app\index\validate\task;
        if (!$validate->scene('checkTaskId')->check($data))
        {
            $this->error($validate->getError());
        }

        //检查活动状态
        $tModle = new \app\index\model\Task;
        $where = ['id' => $data['tid']];
        $tInfo = $tModle->whereGetInfoAct($where);
        if(empty($tInfo)){
            $this->error('活动不存在');
        }
        if(!in_array($tInfo['status'], [3,7]))
        {
            $this->error('活动未开始或已结束!');
        }

        $apply = [
            'user_id' => $user_id,
            'goods_id' => $data['tid'],
        ];

        //同一活动 每个用户只能申请一次
        $oModel = new \app\index\model\Order;
        $oInfo = $oModel->userIdGetOrderTaskIdInfo($apply,'id,goods_id');
        if(!empty($oInfo))
        {
            $this->error('你已申请该活动,请勿重复申请!');
        }

        //添加申请记录
        $addOrder = [
            'user_id' => $user_id,
            'seller_id' => $tInfo['userid'],
            'goods_id' => $tInfo['id'],
            'ip' => get_client_ip(),
        ];
        $addRes = $oModel->insertGetId($addOrder);
        if(empty($addRes))
        {
            $this->error('申请活动失败，请稍后重试!');
        }
        $this->success('申请成功','/act','','1');
    }


    /**
     * 用户-上传下单信息页面
     */
    public function putActReport()
    {
        $user_id = $this->userId;
        /*$tid = Request::instance()->param('tid');
        if(empty($tid))
        {
            $this->error('参数有误，非法的请求');
        }*/
        $data = Request::instance()->param();
        $validate = new \app\index\validate\task;
        if (!$validate->scene('checkTaskId')->check($data))
        {
            $this->error($validate->getError());
        }

        //1.找出活动数据，进行判断
        $oModel = new \app\index\model\Order;
        $where = [
            'user_id' => $user_id,
            'goods_id' => $data['tid'],
        ];
        //var_dump($where); return;
        $str = 'id,user_id,goods_id,status,is_serve';
        $info = $oModel->userIdGetOrderTaskIdInfo($where,$str);
        if(empty($info))
        {
            $this->error('您没有领取该活动');
        }

        //查看状态
        if($info['status'] != 2)
        {
            $this->error('你未中奖，不能进行上传操作');
        }

        //找出活动信息
        $tModle = new \app\index\model\Task;
        $where = ['id' => $info['goods_id']];

        $str = 'id,product_name,product_logo,product_price';
        $tInfo = $tModle->whereGetInfoAct($where, $str);

        $this->assign('info', $info);
        $this->assign('tInfo', $tInfo);
        return view('check_list');
    }


    /**
     * 用户-上传活动截图请求
     */
    public function uploadUserTasks()
    {
        $user_id = $this->userId;
        $data = Request::instance()->param();
        $data['order_img'] = request()->file('order_img');
        $data['collect_img'] = request()->file('collect_img');

        $validate = new \app\index\validate\task;
        if (!$validate->scene('uploadOrder')->check($data))
        {
            $this->error($validate->getError());
        }

        //直接修改活动状态
        $oModel = new \app\index\model\Order;
        $tModel = new \app\index\model\Task;

        //活动信息
        $taskInfo = $tModel->whereGetInfoAct(['id' => $data['tid']], 'id,status');
        if(empty($taskInfo)){
            $this->error('非法请求，不存在的活动');
        }

        $where = [
            'user_id' => $user_id,
            'goods_id' => $data['tid'],
            'status' => 2
        ];

        //开始事务
        Db::startTrans();
        $res = $oModel->userIdUpdateOrderStatusInfo($where,['status' => 3]);
        if(empty($res))
        {
            Db::rollback();
            $this->error('请确认订单和订单状态，再进行操作');
            return;
        }

        //上传文件
        $orderInfo = $data['order_img']->move(ROOT_PATH . 'public' . DS . 'upload'. DS.'task');
        $collectInfo = $data['collect_img']->move(ROOT_PATH . 'public' . DS . 'upload'. DS.'task');
        if($orderInfo && $collectInfo){
            // 成功上传后 获取上传信息
            $data['order_img'] = 'upload/activity/'.$orderInfo->getSaveName();
            $data['collect_img'] = 'upload/activity/'.$orderInfo->getSaveName();
        }elseif(empty($orderInfo)){
            // 上传失败获取错误信息
            $this->error($data['order_img']->getError());
            return;
        }else{
            // 上传失败获取错误信息
            $this->error($data['collect_img']->getError());
            return;
        }

        //修改状态，保存内容
        $upWhere = [
            'user_id' => $user_id,
            'goods_id' => $data['tid'],
        ];

        $updata = [
            'order_img' => $data['order_img'],
            'collect_img' => $data['collect_img'],
            'create_time' =>date('Y-m-d H:i:s'),
            'order_sn' => $data['order_sn'],
        ];
        $res = $oModel->userIdUpdateOrderStatusInfo($upWhere,$updata);
        if(empty($res)){
            Db::rollback();
            $this->error('保存上传信息失败，系统错误');
            return;
        }

        Db::commit();
        $this->success('上传成功','/act','','1');
    }



    /**
     * 用户-递交评测页面
     */
    public function userUploadTasksZolIndex()
    {
        $user_id = $this->userId;
        $data = Request::instance()->param();
        $validate = new \app\index\validate\task;
        if (!$validate->scene('checkTaskId')->check($data))
        {
            $this->error($validate->getError());
        }
        $tid = $data['tid'];

        //1.找出活动数据，进行判断
        $oModel = new \app\index\model\Order;
        $where = [
            'user_id' => $user_id,
            'goods_id' => $tid,
        ];

        $str = 'id,user_id,goods_id,status,is_serve,create_time';
        $info = $oModel->userIdGetOrderTaskIdInfo($where,$str);
        if(empty($info))
        {
            $this->error('您没有领取该活动');
        }

        //查看状态
        if(!in_array($info['status'], [3,4]))
        {
            $this->error('当前活动状态不能提交试用报告');
        }

        //下单超过三天才能上传试用报告
        $create_time = strtotime($info['create_time']);
        $today_time = time();
        if(($today_time - $create_time) < 259200)
        {
            //$this->error('下单3天后才能上传试用报告');
        }


        //找出活动信息
        $tModle = new \app\index\model\Task;
        $where = ['id' => $info['goods_id']];

        $str = 'id,product_name,product_logo,product_price';
        $tInfo = $tModle->whereGetInfoAct($where, $str);
        if(empty($tInfo)){
            $this->error('非法操作，活动不存在');
        }

        $this->assign('info', $info);
        $this->assign('tInfo', $tInfo);
        return view('zol_index');
    }


    /**
     * 用户-递交评测请求
     */
    public function uploadTaskUserZols()
    {
        $user_id = $this->userId;
        $data = Request::instance()->param();
        $data['comment_img'] = request()->file('comment_img');
        $data['focus_img'] = request()->file('focus_img');
        $validate = new \app\index\validate\task;
        if (!$validate->scene('submitZol')->check($data))
        {
            $this->error($validate->getError());
        }

        //直接修改活动状态
        $oModel = new \app\index\model\Order;
        $tModel = new \app\index\model\Task;

        //找出订单数据，进行判断
        $where = [
            'user_id' => $user_id,
            'goods_id' => $data['tid'],
        ];

        $str = 'id,user_id,goods_id,status,is_serve,create_time';
        $info = $oModel->userIdGetOrderTaskIdInfo($where, $str);
        if(empty($info))
        {
            $this->error('您没有领取该活动');
        }

        //查看状态
        if(!in_array($info['status'], [3,4]))
        {
            $this->error('当前活动状态不能提交试用报告');
        }

        //下单超过三天才能上传试用报告
        $create_time = strtotime($info['create_time']);
        $today_time = time();
        if(($today_time - $create_time) < 259200)
        {
            //$this->error('下单3天后才能上传试用报告');
        }

        //活动信息
        $taskInfo = $tModel->whereGetInfoAct(['id' => $data['tid']], 'id,status,is_serve');
        if(empty($taskInfo)){
            $this->error('非法操作，活动不存在');
        }

        $where = [
            'user_id' => $user_id,
            'goods_id' => $data['tid'],
        ];

        //开始事务
        Db::startTrans();
        $res = $oModel->userIdUpdateOrderPassAndReject($where,['status' => 8]);
        if(empty($res))
        {
            Db::rollback();
            $this->error('请确认活动状态，再进行操作');
            return;
        }


        //增值任务 增值图片
        if(empty($data['focus_img'])){
            if($taskInfo['is_serve'] > 0){
                Db::rollback();
                $this->error('请上传增值服务的截图');
                return;
            }
        }else{
            $focusInfo = $data['focus_img']->move(ROOT_PATH . 'public' . DS . 'upload'. DS.'task');
            if($focusInfo){
                // 成功上传后 获取上传信息
                $data['focus_img'] = 'upload/activity/'.$focusInfo->getSaveName();
            }else{
                // 上传失败获取错误信息
                $this->error($data['focus_img']->getError());
                return;
            }
        }

        //上传报告
        $commentInfo = $data['comment_img']->move(ROOT_PATH . 'public' . DS . 'upload'. DS.'task');
        if($commentInfo){
            // 成功上传后 获取上传信息
            $data['comment_img'] = 'upload/activity/'.$commentInfo->getSaveName();
        }else{
            // 上传失败获取错误信息
            $this->error($data['comment_img']->getError());
            return;
        }

        //修改状态，保存内容
        $upWhere = [
            'user_id' => $user_id,
            'goods_id' => $data['tid'],
        ];

        $updata = [
            'comment_img' => $data['comment_img'],
            'up_comment_time' => date('Y-m-d H:i:s'),
        ];
        $res = $oModel->userIdUpdateOrderStatusInfo($upWhere,$updata);
        if(empty($res)){
            Db::rollback();
            $this->error('递交评测信息失败，系统错误');
            return;
        }

        Db::commit();
        $this->success('递交成功','/act','','1');
    }














    //-----------------------------------------------废弃中--------------------------------------------

    /**
     * 商-审核用户订单列表 [废弃代码]
     */
    public function actCheckList()
    {
        /*
        $user_id = $this->userId;
        $data = Request::instance()->param();
        $validate = new \app\index\validate\task;
        if (!$validate->scene('checkTaskId')->check($data))
        {
            $this->error($validate->getError());
        }

        //1.判断用户类型
        if($this->uInfo['user_type'] == 1)
        {
            $this->error('非法请求');
        }

        //检查活动信息
        $tModle = new \app\index\model\Task;
        $oModel = new \app\index\model\Order;

        $where = [
            'id' => $data['tid'],
            'userid' => $user_id,
        ];
        $info = $tModle->whereGetInfoAct($where, 'id,product_name,status');
        if(empty($info))
        {
            $this->error('您没有进行该项活动，请重试');
        }

        //活动状态
        if(!in_array($info['status'],[3,4,7]))
        {
            $this->error('活动未开始或已结束，无法审核');
        }

        //找出活动的中奖用户
        //页码
        $page = 1;
        if (!empty($data['page'])) {
            $page = $data['page'];
        }
        $this->assign('page', $page);

        $oWhere = [
            'seller_id' => $user_id,
            'goods_id' => $data['tid'],
        ];
        $str = 'id,user_id,seller_id,goods_id,status,order_img, collect_img,comment_img';
        $list = $oModel->getUserOrderInfo($oWhere, $page,$str);

        //找出总活动数
        $orderCounts = $oModel->getUserTaskWinningCount($oWhere);

        $this->assign('info', $info);//活动信息
        $this->assign('list', $list);//中奖用户列表
        $this->assign('orderCounts', $orderCounts);
        return view('check_list');
        */
    }

    /**
     * 通过or驳回用户下单信息[废弃代码]
     */
    public function checkUserOrderImgs()
    {
        /*
        $user_id = $this->userId;
        $data = Request::instance()->param();
        $validate = new \app\index\validate\task;
        if (!$validate->scene('auditOrderList')->check($data))
        {
            $this->error($validate->getError());
        }

        //1.商家ID和登录ID比对
        if($data['seller_id'] != $user_id)
        {
            $this->error('非法请求，终止操作');
        }

        //查找订单信息
        $where = [
            'id' => $data['order_id'],//orderID
            'user_id' => $data['user_id'],//用户ID
            'seller_id' => $data['seller_id'],//商家ID
            'goods_id' => $data['tid'],//活动ID
        ];

        $updata = [];
        if($data['type'] == 'pass')
        {
            $updata['status'] = 5;//通过
        }elseif($data['type'] == 'not')
        {
            $updata['status'] = 4;//驳回
        }else{
            $this->error('非法请求，操作类型错误');
        }

        //先找出活动
        $oModel = new \app\index\model\Order;
        $info = $oModel->userIdGetOrderTaskIdInfo($where);
        if(empty($info))
        {
            $this->error('活动订单不存在，无法审核');
        }

        Db::startTrans();
        $where['status'] = 3;//等待审核状态
        $res = $oModel->userIdUpdateOrderStatusInfo($where,$updata);
        if(empty($res))
        {
            Db::rollback();
            $this->error('审核失败,请确认活动状态');
            return;
        }

        //继续修改订单
        unset($where['status']);
        $twoUpdata = [
            'check_time' =>  date('Y-m-d H:i:s'),
        ];
        $res = $oModel->userIdUpdateOrderStatusInfo($where, $twoUpdata);
        if(empty($res))
        {
            Db::rollback();
            $this->error('审核状态修改失败,系统错误');
            return;
        }

        //成功
        Db::commit();
        $this->redirect('/biz/actlist', ['tid' => $data['tid']]);
        */
    }


    /**
     * 通过or驳回用户评测信息[废弃代码]
     */
    public function checkUserComment()
    {
        /*
        $user_id = $this->userId;
        $data = Request::instance()->param();
        $validate = new \app\index\validate\task;
        if (!$validate->scene('auditOrderList')->check($data))
        {
            $this->error($validate->getError());
        }

        //1.商家ID和登录ID比对
        if($data['seller_id'] != $user_id)
        {
            $this->error('非法请求，终止操作');
        }

        //查找订单信息
        $where = [
            'id' => $data['order_id'],//orderID
            'user_id' => $data['user_id'],//用户ID
            'seller_id' => $data['seller_id'],//商家ID
            'goods_id' => $data['tid'],//活动ID
        ];

        $updata = [];
        if($data['type'] == 'pass')
        {
            $updata['status'] = 9;//通过
        }elseif($data['type'] == 'not')
        {
            $updata['status'] = 10;//驳回
        }else{
            $this->error('非法请求，操作类型错误');
        }

        //先找出活动
        $oModel = new \app\index\model\Order;
        $info = $oModel->userIdGetOrderTaskIdInfo($where);
        if(empty($info))
        {
            $this->error('活动订单不存在，无法审核');
        }

        Db::startTrans();
        $where['status'] = 8;//等待评测状态
        $res = $oModel->userIdUpdateOrderStatusInfo($where,$updata);
        if(empty($res))
        {
            Db::rollback();
            $this->error('评测失败,请确认活动状态');
            return;
        }

        //继续修改订单
        unset($where['status']);
        $twoUpdata = [
            'comment_time' =>  date('Y-m-d H:i:s'),
            ''
        ];
        $res = $oModel->userIdUpdateOrderStatusInfo($where, $twoUpdata);
        if(empty($res))
        {
            Db::rollback();
            $this->error('评测状态修改失败,系统错误');
            return;
        }

        if($data['type'] == 'pass')
        {
            //开始修改活动剩余次数，返款给用户
            $tModel = new \app\index\model\Task;
            $sWhere = [
                'id' => $data['tid'],
                'userid' => $data['seller_id'],
            ];
            $taskInfo = $tModel->whereGetInfoAct($sWhere,'id,userid,status,last_num');
            if(empty($taskInfo))
            {
                Db::rollback();
                $this->error('活动数据有误，请重新操作');
                return;
            }
            //活动剩余次数 是否大于0
            if($taskInfo['last_num'] <= 0){
                Db::rollback();
                $this->error('活动数量为0，不能通过评测');
                return;
            }

            //剩余次数-1
            $res = $tModel->updateTaskLastNumReduceOne($sWhere,'last_num');
            if(empty($res)){
                Db::rollback();
                $this->error('减少活动数量失败,系统错误');
                return;
            }
        }

        //成功
        Db::commit();
        $this->redirect('/biz/actlist', ['tid' => $data['tid']]);
        */
    }











}