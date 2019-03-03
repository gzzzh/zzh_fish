<?php
/**
 * Created by PhpStorm.
 * User: [一秋]
 * Date: 2018/3/28
 * Time: 15:03
 * Desc: 成功源于点滴
 */

namespace app\index\controller;
use think\Config;
use think\Db;
use think\Log;
use think\Request;
use think\Session;
class HomeBaseController extends Base
{
    protected $userId;
    protected $uInfo;
    // 初始化
    protected function _initialize()
    {
        parent::_initialize();
        //判断登录
        $this->checkLogin();
    }

    /*protected function _initUser(){
        if($this->request->isPost()){
            Log::info($this->request->post());
        }

        $token      = $this->request->header('token');

        if (empty($token)) {
            return;
        }

        $this->token      = $token;

        $user = Db::name('user_token')
            ->alias('a')
            ->field('b.*')
            ->where(['token' => $token])
            ->join('__USER__ b', 'a.user_id = b.id')
            ->find();

        if (!empty($user)) {
            $this->user     = $user;
            $this->userId   = $user['id'];
            $this->status = $user['status'];
        }
    }*/


    /**
     * 检查用户-是否登录
     */
    public function checkLogin()
    {
        $this->userId = Session::get('USER_KEY_ID');
        if(empty($this->userId)){
            $this->redirect('/login');
        }else{
            //找出记录
            $uModel = new \app\index\model\User;
            $this->uInfo = $uModel->getUserInfoNotType($this->userId);
            $this->assign('user_type', $this->uInfo['user_type']);//用户类型
            $this->assign('mobile', $this->uInfo['mobile']);//手机号
            $this->assign('alipay_status', $this->uInfo['alipay_status']);//支付宝状态
            $this->assign('taobao_status', $this->uInfo['taobao_status']);//淘宝状态

            //如果被封号了，就直接退出
            if($this->uInfo['status'] == 2)
            {
                $this->redirect('/loginOut');
            }
        }
    }



    /**
     * 获取当前的response 输出类型
     * @access protected
     * @return string
     */
    protected function getResponseType()
    {
        return Config::get('default_return_type');
    }

    /**
     * 获取当前登录用户的id
     * @return int
     */
    public function getUserId()
    {
        if (empty($this->userId)) {
            $this->error( '用户未登录');
        }
        return $this->userId;
    }

}