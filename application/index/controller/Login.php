<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/11
 * Time: 15:38
 */

namespace app\index\controller;
use think\Request;
use think\Session;
use app\common\help\Format;

class Login extends Base
{

    /**
     * 登录页面
     */
    public function loginIndex()
    {
        $uid = Session::get('USER_KEY_ID');
        if(!empty($uid)){
            $this->redirect('/');
        }

        //表单令牌
        $token = $this->request->token('__token__');
        $this->assign('token', $token);

        return view('loginindex');
    }


    /**
     * 登录，发送短信
     */
    public function loginSendPhones()
    {
        $data = Request::instance()->param();
        $validate = new \app\index\validate\account;
        if (!$validate->scene('getCode')->check($data))
        {
            return json_encode(['code' => 1, 'msg' => $validate->getError()], JSON_UNESCAPED_UNICODE);
        }

        //手机号
        if(!checkMobile($data['mobile'])){
            return json_encode(['code' => 1, 'msg' => '请输入正确的手机号码'], JSON_UNESCAPED_UNICODE);
        }

        //是否注册
        $uModel = new \app\index\model\User;
        $info = $uModel->getInfo($data['mobile']);
        if(empty($info)){
            return json_encode(['code' => 1, 'msg' => '账号或密码有误'], JSON_UNESCAPED_UNICODE);
        }

        //发送
        $res = $this->sendPhoneSms($data['mobile'],'login');
        if($res['code'] != 0){
            return json_encode(['code' => 1, 'msg' => '发送失败:'.$res['errorMsg']], JSON_UNESCAPED_UNICODE);
        }else{
            return json_encode(['code' => 0, 'msg' => '发送成功'], JSON_UNESCAPED_UNICODE);
        }
    }


    /**
     * 用户登录操作
     * @return array
     */
    public function login(){
        //是否已经登录中
        $uid = Session::get('USER_KEY_ID');
        if(!empty($uid)){
            $this->redirect('/');
        }


        $data = Request::instance()->param();
        $validate = new \app\index\validate\account;
        if (!$validate->scene('login')->check($data))
        {
            //$this->error($validate->getError());
            return json_encode(['code' => 1, 'msg' => $validate->getError()], JSON_UNESCAPED_UNICODE);
        }

        $userModel = new \app\index\model\User();
        if (!checkMobile($data['mobile']))
        {
            //$this->error('请输入正确的手机号');
            return json_encode(['code' => 1, 'msg' => '请输入正确的手机号'], JSON_UNESCAPED_UNICODE);
        }

        //短信验证码 和 手机号
        $phone = Session::get('phone_login');
        $vcode = Session::get('vcode_login');
        if($data['vcode'] != $vcode)
        {
            //记录错误次数
            $errnum = Session::get('error_num_login'.$vcode);
            if(empty($errnum)){
                Session::set('error_num_login'.$vcode, 1);
            }else{
                Session::set('error_num_login'.$vcode, ($errnum+1));
            }

            //错误5次，销毁验证码
            if($errnum == 10){
                Session::delete('vcode_login');
                Session::delete('error_num_login'.$vcode);
            }

            //return json_encode(['code' => 1, 'msg' => '手机验证码错误!'], JSON_UNESCAPED_UNICODE);
        }

        //手机号
        if($data['mobile'] != $phone){
            //$this->retMsg(['code' => 1, 'msg' => '手机和接收手机号码不一致!']);
            //return json_encode(['code' => 1, 'msg' => '手机和接收手机号码不一致'], JSON_UNESCAPED_UNICODE);
        }

        //检测账号信息
        $uInfo = $userModel->getInfo($data['mobile'],'id,mobile,user_pass,status,user_type,is_vip,vip_time');
        if(empty($uInfo)){
            //$this->error('账号或密码有误');
            return json_encode(['code' => 1, 'msg' => '账号或密码有误'], JSON_UNESCAPED_UNICODE);
        }

        if($uInfo['status'] == 2){
            //$this->error('您的账号涉嫌违规，已被封停！');
            return json_encode(['code' => 1, 'msg' => '您的账号涉嫌违规，已被封停'], JSON_UNESCAPED_UNICODE);
        }
        //密码错误次数
        $logincheck = Session::get('login_check_forbid');
        if(!empty($logincheck)){
            return json_encode(['code' => 1, 'msg' => '今日登录次数已达上限'], JSON_UNESCAPED_UNICODE);
        }

        if(up_pass($data['psd']) !== $uInfo['user_pass']){
            $login_num = Session::get('login_check_psd_num');
            $logincheck = Session::get('login_check_forbid');
            if(empty($login_num)){
                Session::set('login_check_psd_num', 1);
            }else{
                if($login_num >= 20){
                    Session::set('login_check_forbid', 1);
                }else{
                    Session::set('login_check_psd_num', ($login_num+1));
                }
            }
            return json_encode(['code' => 1, 'msg' => '账号或密码有误'], JSON_UNESCAPED_UNICODE);
        }

        //正确，销毁验证码
        Session::delete('vcode_login');
        Session::delete('error_num_login'.$vcode);

        //修改登录时间
        $loginData = [];
        $loginData['lastdate'] = date('Y-m-d H:i:s');
        $loginData['lastip'] = get_client_ip();
        $userModel->saveLogin($uInfo['id'], $loginData);

        //存session
        Session::set('USER_KEY_ID', $uInfo['id']);
        Session::set('USER_KEY', $uInfo['mobile']);

        //用户or商家个人中心
        return json_encode(['code' => 0, 'msg' => '登录成功'], JSON_UNESCAPED_UNICODE);
    }



    /**
     * 退出登录
     */
    public function loginOut()
    {
        Session::delete('USER_KEY_ID');
        Session::delete('USER_KEY');
        $this->redirect('/login');
    }


    /**
     * 忘记密码页面
     */
    public function forgetPwdIndex()
    {
        //表单令牌
        $token = $this->request->token('__token__');
        $this->assign('token', $token);

        return view('forget');
    }


    /**
     * 忘记密码-发送短信
     */
    public function forgetSendSms()
    {
        $data = Request::instance()->param();
        $validate = new \app\index\validate\account;
        if (!$validate->scene('getCode')->check($data))
        {
            return json_encode(['code' => 1, 'msg' => $validate->getError()], JSON_UNESCAPED_UNICODE);
        }

        //手机号
        if(!checkMobile($data['mobile'])){
            return json_encode(['code' => 1, 'msg' => '请输入正确的手机号码'], JSON_UNESCAPED_UNICODE);
        }

        //是否注册
        $uModel = new \app\index\model\User;
        $info = $uModel->getInfo($data['mobile']);
        if(empty($info)){
            return json_encode(['code' => 1, 'msg' => '账号或密码有误'], JSON_UNESCAPED_UNICODE);
        }

        //发送
        $res = $this->sendPhoneSms($data['mobile'],'forget');
        if($res['code'] != 0){
            return json_encode(['code' => 1, 'msg' => '发送失败:'.$res['errorMsg']], JSON_UNESCAPED_UNICODE);
        }else{
            return json_encode(['code' => 0, 'msg' => '发送成功'], JSON_UNESCAPED_UNICODE);
        }
    }


    /**
     * 忘记密码，第一步检验
     */
    public function check1Forget()
    {
        $data = Request::instance()->param();
        $validate = new \app\index\validate\login;
        if (!$validate->scene('mobile')->check($data))
        {
            //$this->retMsg(['code' => '1', 'msg' => $validate->getError()]);
            return json_encode(['code' => 1, 'msg' => $validate->getError()], JSON_UNESCAPED_UNICODE);
        }

        //手机号格式
        if (!Format::isMobile($data['mobile']))
        {
            //$this->retMsg(['code' => 1, 'msg' => '请输入正确的手机号!']);
            return json_encode(['code' => 1, 'msg' => '请输入正确的手机号'], JSON_UNESCAPED_UNICODE);
        }

        //短信验证码 和 手机号
        $phone = Session::get('phone_forget');
        $vcode = Session::get('vcode_forget');
        if($data['vcode'] != $vcode)
        {
            //记录错误次数
            $errnum = Session::get('error_num_forget');
            if(empty($errnum)){
                Session::set('error_num_forget', 1);
            }else{
                Session::set('error_num_forget', ($errnum+1));
            }

            //错误10次，销毁验证码
            if($errnum == 10){
                Session::delete('vcode_forget');
                Session::delete('error_num_forget');
            }

            //$this->retMsg(['code' => 1, 'msg' => '手机验证码错误!']);
            //return json_encode(['code' => 1, 'msg' => '手机验证码错误!'], JSON_UNESCAPED_UNICODE);
        }

        //手机号
        if($data['mobile'] != $phone){
            //$this->retMsg(['code' => 1, 'msg' => '手机和接收手机号码不一致!']);
            //return json_encode(['code' => 1, 'msg' => '手机和接收手机号码不一致'], JSON_UNESCAPED_UNICODE);
        }

        //账号是否存在
        $userModel = new \app\index\model\User();
        $info = $userModel->getInfo($data['mobile']);
        if(empty($info))
        {
            //$this->retMsg(['code' => '1', 'msg' => '用户不存在或未注册']);
            return json_encode(['code' => 1, 'msg' => '用户不存在或未注册'], JSON_UNESCAPED_UNICODE);
        }

        //$this->retMsg(['code' => '0', 'msg' => '验证成功']);
        return json_encode(['code' => 0, 'msg' => '验证成功'], JSON_UNESCAPED_UNICODE);
    }


    /**
     * 重置密码页
     */
    public function setPwdIndex()
    {
        $data = Request::instance()->param();
        if($data['pwd_type'] != 'czmm')
        {
            $this->error('非法请求页面');
        }

        //表单令牌
        $token = $this->request->token('__token__');
        $this->assign('token', $token);

        return view('newpwd_index');
    }


    /**
     * 重新设置密码
     */
    public function setPwd()
    {
        $data = Request::instance()->param();
        $validate = new \app\index\validate\login;
        if (!$validate->scene('sendpwd')->check($data))
        {
            //$this->retMsg(['code' => '1', 'msg' => $validate->getError()]);
            return json_encode(['code' => 1, 'msg' => $validate->getError()], JSON_UNESCAPED_UNICODE);
        }

        //手机号格式
        if (!checkMobile($data['mobile']))
        {
            //$this->retMsg(['code' => 1, 'msg' => '请输入正确的手机号!']);
            return json_encode(['code' => 1, 'msg' => '请输入正确的手机号'], JSON_UNESCAPED_UNICODE);
        }

        //短信验证码 和 手机号
        $phone = Session::get('phone_forget');
        $vcode = Session::get('vcode_forget');
        if($data['vcode'] != $vcode)
        {
            //记录错误次数
            $errnum = Session::get('error_num_forget');
            if(empty($errnum)){
                Session::set('error_num_forget', 1);
            }else{
                Session::set('error_num_forget', ($errnum+1));
            }

            //错误5次，销毁验证码
            if($errnum == 10){
                Session::delete('vcode_forget');
                Session::delete('error_num_forget');
            }

            //$this->retMsg(['code' => 1, 'msg' => '手机验证码错误!']);
            //return json_encode(['code' => 1, 'msg' => '手机验证码错误!'], JSON_UNESCAPED_UNICODE);
        }

        //手机号
        if($data['mobile'] != $phone){
            //$this->retMsg(['code' => 1, 'msg' => '手机和接收手机号码不一致!']);
            //return json_encode(['code' => 1, 'msg' => '手机和接收手机号码不一致'], JSON_UNESCAPED_UNICODE);
        }

        //账号是否存在
        $userModel = new \app\index\model\User;
        $info = $userModel->getInfo($data['mobile']);
        if(empty($info))
        {
            //$this->retMsg(['code' => '1', 'msg' => '用户不存在或未注册']);
            return json_encode(['code' => 1, 'msg' => '用户不存在或未注册'], JSON_UNESCAPED_UNICODE);
        }

        //更改
        $addData = [];
        $addData['user_pass'] = up_pass($data['psd']);
        $res = $userModel->saveLogin($info['id'], $addData);
        if($res === false){
            //$this->retMsg(['code' => 1, 'msg' => '修改失败，系统错误']);
            return json_encode(['code' => 1, 'msg' => '修改失败，系统错误'], JSON_UNESCAPED_UNICODE);
        }

        Session::delete('vcode_forget');
        Session::delete('error_num_forget');
        //$this->retMsg(['code' => '0', 'msg' => '重置密码成功']);
        return json_encode(['code' => 0, 'msg' => '重置密码成功'], JSON_UNESCAPED_UNICODE);
    }
}