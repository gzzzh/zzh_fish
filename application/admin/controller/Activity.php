<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/3
 * Time: 14:29
 */

namespace app\admin\controller;

use think\Request;
use think\Db;
use think\Session;
class Activity extends Admin
{
    public function _initialize(){
        parent::_initialize();
    }


    /**
     *活动审核列表
     */
    public function index()
    {
        //搜索参数
        $data = Request::instance()->param();

        $where = [];
        //状态搜索
        if(!empty($data['status'])){
            $where['status'] = $data['status'];
            $this->assign('status', $data['status']);
        }

        //用户ID
        if(!empty($data['userid'])){
            $where['userid'] = $data['userid'];
        }

        //手机号
        if(!empty($data['mobile'])){
            $uModel = new \app\admin\model\User;
            $uinfo = $uModel->getDetailWhereUserInfo(['mobile' => $data['mobile']], 'id,user_type');
            $where['userid'] = $uinfo['id'];
            $this->assign('mobile', $data['mobile']);
        }
        $tModel = new \app\admin\model\Task;
        $list = $tModel->getTaskList($where);

        // 获取分页显示
        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);
        // 渲染模板输出
        return view('index');
    }

    /**
     * 活动详情页
     */
    public function details()
    {
        $data = Request::instance()->param();
        empty($data['id']) && $this->error('非法请求');

        //找出活动信息
        $tModel = new \app\admin\model\Task;
        $info = $tModel->getActDetails($data['id']);
        if (empty($info)){
            $this->error('不存在该数据活动');
        }

        //找出店铺信息
        $merModel = new \app\admin\model\Merchant;
        $cateModel = new \app\admin\model\Category;
        $info['store_name'] = $merModel->getUserMerchantName($info['merchant_id'],'store_name');
        $info['category_name'] = $cateModel->getCateName($info['category_id'],'catname');

        $this->assign('info', $info);
        return view('details');
    }



    /**
     * 通过或者驳回
     */
    public function actAudit()
    {
        //搜索参数
        $data = Request::instance()->param();
        empty($data['id']) && $this->error('请传递参数ID','/admin/activity/index');
        empty($data['userid']) && $this->error('请传递参数UID','/admin/activity/index');
        empty($data['type']) && $this->error('请传递类型参数','/admin/activity/index');
        if($data['type'] == 'pass' || $data['type'] = 'reject'){
            $data['type'] == 'pass' && $updata = ['status' => 3];
            $data['type'] == 'reject' && $updata = ['status' => 5];
        }else{
            $this->error('类型参数非法','/admin/activity/index');
        }

        //先查看活动是否存在
        $tModel = new \app\admin\model\Task;
        $fModel = new \app\admin\model\Finance;
        $tInfo = $tModel->getActDetails($data['id'],'id,userid,product_name,trade_no,deposit,service,adv_price');
        if(empty($tInfo)){
            $this->error('不存在的活动数据','/admin/activity/index');
        }

        if($data['type'] == 'pass'){
            //判断订单号是否被使用
            $res = $tModel->selTaskTreadeNoIf($data['id'], $tInfo['trade_no']);
            if($res > 0){
                $this->error('该活动的支付宝订单号已经使用过,无法通过','/admin/activity/index');
            }
        }

        //开始修改状态
        Db::startTrans();
        $result = $tModel->actAuditPass($data['id'], $updata);
        //判断修改结果
        if(empty($result)) {
            Db::rollback();
            $this->error('该数据已被别人操作或非法操作','/admin/activity/index');
        }else{
            $admin = [];
            $admin['check_admin'] = Session::get('admin_userid');//审核人
            $tModel->actAuditPass($data['id'], $admin);

            //通过审核，添加充值记录，财务日志
            if($data['type'] == 'pass'){
                $pcData = [
                    'userid' => $tInfo['userid'],
                    'money' => $tInfo['deposit'] + $tInfo['service'] + $tInfo['adv_price'],
                    'status' => 1,
                    'tran_number' => "订单号:".$tInfo['trade_no'].',发布活动：'.$tInfo['product_name'],
                    'check_admin' => $admin['check_admin']
                ];
                $pcModel = new \app\admin\model\PayCheck;
                $pcRes = $pcModel->insertGetId($pcData);
                if(empty($pcRes)){
                    Db::rollback();
                    $this->error('添加充值记录失败，系统错误','/admin/activity/index');
                    return;
                }


                $finAdd = [
                    'uid' => $tInfo['userid'],
                    'money' => $tInfo['deposit'] + $tInfo['service'] + $tInfo['adv_price'],
                    'name' => '发布活动',
                    'details' => "发布'".$tInfo['product_name']."'活动，通过审核",
                    'types' => '2'
                ];
                $res = $fModel->addFinances($finAdd);
                if(empty($res)){
                    Db::rollback();
                    $this->error('添加财务日志失败，系统错误','/admin/activity/index');
                    return;
                }
            }

            Db::commit();
            $this->redirect('Activity/index','',1,'OK');
        }
    }


    /**
     * 结算活动
     */
    public function closeAnAccountUser()
    {
        $data = Request::instance()->param();
        empty($data['id']) && $this->error('请传递参数ID','/admin/activity/index');
        empty($data['userid']) && $this->error('请传递参数UID','/admin/activity/index');
        empty($data['type']) && $this->error('请传递类型参数','/admin/activity/index');
        if($data['type'] == 'close' || $data['type'] = 'reject'){
            $data['type'] == 'close' && $updata = ['status' => 4];
            $data['type'] == 'reject' && $updata = ['status' => 3];
        }else{
            $this->error('类型参数非法','/admin/activity/index');
        }

        //先查看活动是否存在
        $uModel = new \app\admin\model\User;
        $tModel = new \app\admin\model\Task;
        $fModel = new \app\admin\model\Finance;
        $str = 'id,userid,product_name,product_price,num,last_num,status';
        $tInfo = $tModel->getActDetails($data['id'],$str);
        if(empty($tInfo)){
            $this->error('不存在的活动数据','/admin/activity/index');
        }

        //查看状态
        if($tInfo['status'] != 7){
            $this->error('活动不为待结算状态，无法操作','/admin/activity/index');
        }

        Db::startTrans();
        //1.改状态
        $where = [
            'id' => $data['id'],
            'userid' => $data['userid'],
            'status' => 7
        ];
        $res = $tModel->closeUserTasksInfo($where, $updata);
        if(empty($res)){
            Db::rollback();
            $this->error('该活动已被操作，请重试','/admin/activity/index');
        }

        $admin= [];
        $admin['close_admin'] = Session::get('admin_userid');//结算人
        unset($where['status']);
        $tModel->closeUserTasksInfo($where, $admin);


        //----------------------------------通过结算------------------------------------------
        if($data['type'] == 'close'){
            //2.返款-剩余活动款项|剩余次数>0 结算金额大于0
            $money = $tInfo['last_num'] * $tInfo['product_price']; //第一次结算
            if($tInfo['last_num'] > 0 && $money > 0){
                $res = $uModel->addUserMoneys($tInfo['userid'], $money);
                if(empty($res)){
                    Db::rollback();
                    $this->error('给用户账号返款失败，系统错误','/admin/activity/index');
                }
            }

            //3.添加财务日志
            $finAdd = [
                'uid' => $tInfo['userid'],
                'money' => $money,
                'name' => '结算活动',
                'details' => "第一次结算'".$tInfo['product_name']."'活动,通过审核",
                'types' => '1'
            ];
            $res = $fModel->addFinances($finAdd);
            if(empty($res)){
                Db::rollback();
                $this->error('添加财务日志失败，系统错误','/admin/activity/index');
                return;
            }
        }

        Db::commit();
        if($data['type'] == 'close'){
            $this->success('第一次结算成功','Activity/index', ['status' => 7]);
        }else{
            $this->success('驳回成功','Activity/index', ['status' => 7]);
        }


    }
}