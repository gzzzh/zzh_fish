<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/22
 * Time: 13:39
 */

namespace app\index\controller;

use think\Request;
use think\Db;
class Shops extends HomeBaseController
{
    public function _initialize()
    {
        parent::_initialize();

        //判断是否商家
        if($this->uInfo['user_type'] != 2)
        {
            $this->error('只有商家才能进入此页面');
        }
    }

    /**
     * [商家] - 个人中心
     */
    public function shopIndex()
    {
        $uid = $this->userId;
        $info = $this->uInfo;

        //找出该商家所有活动信息
        $taskModel = new \app\index\model\Task;
        $taskCounts = $taskModel->taskTypeCountNumbers($uid);

        $this->assign('info', $info);
        $this->assign('taskCounts', $taskCounts);
        return view('shop_index');
    }


    /**
     * [商家] - 我的店铺信息
     */
    public function myShops()
    {
        $uid = $this->userId;
        $mModel = new \app\index\model\Merchant;
        $list = $mModel->getShopMerchantInfo($uid,'store_name, wang_name, mobile, add_time, store_type, shop_status');
        $this->assign('list', $list);
        return view('my_shops');
    }


    /**
     * [商家] - 添加淘宝店页面
     */
    public function bindTaobao()
    {
        //先判断是否绑定过
        $uid = $this->userId;
        $uModel = new \app\index\model\User;

        $info = $this->uInfo;
        if($info['taobao_status'] == 2){
            $this->error('认证中，淘宝店铺审核中');
        }elseif ($info['taobao_status'] == 1){
            $this->error('你已绑定淘宝店铺,无需再次绑定');
        }elseif ($info['user_type'] == 1){
            $this->error('普通用户无需绑定此项');
        }
        //表单令牌
        $token = $this->request->token('__token__');
        $this->assign('token', $token);

        return view('bind_taobao');
    }


    /**
     * [商家] - 添加淘宝店铺
     */
    public function addShopsIndex()
    {
        //先判断是否绑定过
        $uid = $this->userId;
        $uModel = new \app\index\model\User;
        $mModel = new \app\index\model\Merchant;

        $info = $this->uInfo;
        if($info['taobao_status'] == 2){
            $this->error('认证中，淘宝店铺审核中');
        }elseif ($info['taobao_status'] == 1){
            $this->error('你已绑定淘宝店铺,无需再次绑定');
        }elseif ($info['user_type'] == 1){
            $this->error('普通用户无需绑定此项');
        }

        //接收参数，判断
        $data = Request::instance()->param();
        $data['userid'] = $uid;
        $validate = new \app\index\validate\shops;
        if (!$validate->scene('checkStore')->check($data))
        {
            $this->error($validate->getError());
        }

        //店铺名&类型是否存在
        $where = [
            'store_name' => $data['store_name'],
            'store_type' => 1, //淘宝=1 京东=2
        ];
        //是否绑定
        $id = $mModel->getShopsIfExist($where,'id');
        if(!empty($id)){
            $this->error('该店铺名称已被使用');
        }

        $addShop = [
            'userid' => $uid,
            'store_name' => $data['store_name'],
            'wang_name' => $data['wang_name'],
            'store_url' => $data['store_url'],
            'store_qq' => $data['store_qq'],
            'mobile' => $data['mobile'],
        ];


        //启动事务
        Db::startTrans();

        //开始增加
        $addRes = $mModel->insertGetId($addShop);
        if(empty($addRes))
        {
            // 回滚事务
            Db::rollback();
            $this->error('绑定店铺失败，系统错误');
            return;
        }
        //改变user表
        $saveRes = $uModel->saveLogin($uid,['taobao_status' => 2]);
        if(empty($saveRes))
        {
            // 回滚事务
            Db::rollback();
            $this->error('修改用户状态失败，系统错误');
            return;
        }

        // 提交事务
        Db::commit();
        $this->redirect('/biz/index','','1','提交成功');
    }
}