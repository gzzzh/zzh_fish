<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/11
 * Time: 16:30
 */

namespace app\index\controller;
use think\Request;
class User extends HomeBaseController
{
    public function _initialize()
    {
        parent::_initialize();

    }


    /**
     * [用户] - 基本信息
     */
    public function index()
    {
        //用户类型
        if($this->uInfo['user_type'] != 1)
        {
            $this->error('商家不能进入此页面');
        }

        $uid = $this->userId;

        $this->assign('info', $this->uInfo);
        return view('index');
    }



    /**
     * 商用-支付宝页面
     */
    public function myAlipay()
    {
        //1.判断用户是否绑定了支付宝
        /*$uid = $this->userId;
        if($this->uInfo['alipay_status'] == 0){
            $this->error('请先绑定支付宝账号');
        }

        //展示用户支付宝信息
        $aliModel = new \app\index\model\BindAlipay;
        $info = $aliModel->getUserInfoAlipays($uid);

        $this->assign('info', $info);
        return view('my_alipay');
        */
    }



    /**
     * [商用] -  绑定支付宝[展示页]
     */
    public function bindAlipay()
    {
        //先判断是否绑定过
        $uid = $this->userId;
        $info = $this->uInfo;
        if($info['alipay_status'] == 2){
            $this->error('认证中，支付宝绑定审核中');
        }elseif ($info['alipay_status'] == 1){
            $this->error('你已绑定支付宝账号,无需再次绑定');
        }

        //表单令牌
        $token = $this->request->token('__token__');
        $this->assign('token', $token);

        return view('bind_alipay');
    }


    /**
     * [商用] -  提交支付宝审核信息
     */
    public function submitAlipay()
    {
        //接收参数，判断
        $data = Request::instance()->param();
        $data['alipay_imgs'] = request()->file('alipay_imgs');
        $validate = new \app\index\validate\user;
        if (!$validate->scene('submitAlipay')->check($data))
        {
            $this->error($validate->getError());
        }

        //是否绑定过
        $uid = $this->userId;
        $uModel = new \app\index\model\User;
        $aliModel = new \app\index\model\BindAlipay;
        $info = $this->uInfo;
        if($info['alipay_status'] == 2){
            $this->redirect('/uc','',1,'支付宝认证审核中');
        }elseif ($info['alipay_status'] == 1){
            $this->error('/uc','',1,'你已绑定支付宝账号,无需再次绑定');
        }

        //开始上传
        $addData = [];
        $info = $data['alipay_imgs']->move(ROOT_PATH . 'public' . DS . 'upload'. DS.'alipay');
        if($info){
            // 成功上传后 获取上传信息
            $addData['alipay_imgs'] = 'upload/alipay/'.$info->getSaveName();
        }else{
            // 上传失败获取错误信息
            $this->error($data['alipay_imgs']->getError());
            return;
        }

        //此账号是否已使用

        //保存入库
        $addData['userid'] = $uid;
        $addData['name'] = $data['name'];
        $addData['account'] = $data['account'];
        $res = $aliModel->addUserInfo($addData);
        if(empty($res)){
            $this->error('添加支付宝失败，系统错误');
        }
        //修改user表状态
        $res = $uModel->saveLogin($uid, ['alipay_status' => 2]);
        if($res === false){
            $this->error('修改用户表资料失败，系统错误');
        }

        if($this->uInfo['user_type'] == 1){
            $this->redirect('/uc','', 1, '上传成功，等待审核');
        }else{
            $this->redirect('/biz/index','', 1, '上传成功，等待审核');
        }

    }



    /**
     * [用户] - 绑定淘宝账号
     */
    public function bindTaobao()
    {
        //先判断是否绑定过
        $uid = $this->userId;
        $uModel = new \app\index\model\User;
        $info = $this->uInfo;
        if($info['taobao_status'] == 2){
            $this->error('认证中，淘宝账号审核中');
        }elseif ($info['taobao_status'] == 1){
            $this->error('你已绑定淘宝账号,无需再次绑定');
        }elseif ($info['user_type'] == 2){
            $this->error('商家用户无需绑定此项');
        }

        //表单令牌
        $token = $this->request->token('__token__');
        $this->assign('token', $token);

        return view('bind_taobao');
    }



    /**
     * [用户] - 提交淘宝审核信息
     */
    public function submitTaobao()
    {
        //接收参数，判断
        $data = Request::instance()->param();

        $data['account_imgs'] = request()->file('account_imgs');
        $data['price_imgs'] = request()->file('price_imgs');

        $validate = new \app\index\validate\user;
        if (!$validate->scene('bindTaobao')->check($data))
        {
            $this->error($validate->getError());
        }

        //用户是否绑定过
        $uid = $this->userId;
        $buModel = new \app\index\model\BindUserShop;
        $uModel = new \app\index\model\User;
        //$info = $uModel->idGetInfo($uid,'id, taobao_status,user_type');
        $info = $this->uInfo;
        if($info['taobao_status'] == 2){
            $this->redirect('/uc','',1,'认证中，淘宝绑定审核中');
        }elseif ($info['taobao_status'] == 1){
            $this->error('/uc','',1,'你已绑定淘宝账号,无需再次绑定');
        }elseif ($info['user_type'] == 2){
            $this->error('/uc','',1,'商家用户无需绑定此项');
        }

        //开始上传
        $addData = [];
        $accInfo = $data['account_imgs']->move(ROOT_PATH . 'public' . DS . 'upload'. DS.'userTaobao');
        $priInfo = $data['price_imgs']->move(ROOT_PATH . 'public' . DS . 'upload'. DS.'userTaobao');

        if($accInfo && $priInfo){
            // 成功上传后 获取上传信息
            $addData['account_imgs'] = 'upload/userTaobao/'.$accInfo->getSaveName();
            $addData['price_imgs'] = 'upload/userTaobao/'.$priInfo->getSaveName();
        }else{
            // 上传失败获取错误信息
            if(empty($priInfo)){
                $this->error($data['price_imgs']->getError());
            }else{
                $this->error($data['account_imgs']->getError());
            }
            return;
        }
        //保存入库
        $addData['userid'] = $uid;
        $addData['account'] = $data['account'];
        $addData['sex'] = $data['sex'];
        $addData['type'] = 1;//淘宝
        $addData['price_value'] = $data['price_value'];
        $addData['birth_year'] = $data['birth_year'];
        $res = $buModel->addUserTaobao($addData);
        if(empty($res)){
            $this->error('上传失败，系统错误');
        }

        //修改user表状态
        $res = $uModel->saveLogin($uid, ['taobao_status' => 2]);
        if($res === false){
            $this->error('修改用户表资料失败，系统错误');
        }
        $this->redirect('/uc','', 1, '上传成功，等待审核');
    }



    /**
     * 用户-淘宝号信息
     */
    public function myShops()
    {
        $uid = $this->userId;
        $buModel = new \app\index\model\BindUserShop;

        //用户类型
        if($this->uInfo['user_type'] != 1)
        {
            $this->error('商家不能进入此页面');
        }

        //判断用户是否上传
        if($this->uInfo['taobao_status'] == 0){
            $this->error('请先上传淘宝信息');
        }

        //活动数据，展示
        $bInfo = $buModel->getBindTaoBaoInfos($uid);
        $this->assign('bInfo', $bInfo);
        return view('my_shops');
    }
}