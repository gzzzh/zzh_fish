<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/18
 * Time: 10:38
 */

namespace app\index\controller;

use think\Request;
class Alter extends HomeBaseController
{

    public function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 修改密码页面
     */
    public function alterPwd()
    {
        return view('pwd');
    }


    /**
     * 修改密码操作
     */
    public function savePwd()
    {
        $uid = $this->userId;
        $data = Request::instance()->param();
        $validate = new \app\index\validate\chgpwd;
        if (!$validate->scene('getPwd')->check($data))
        {
            $this->error($validate->getError());
        }

        //获取用户信息
        $uModel = new \app\index\model\User;
        $uinfo = $uModel->getUserInfoNotType($uid,'id,user_pass');

        //新旧密码对比
        if($data['oldpwd'] == $data['pwd']){
            $this->error('新登录密码不能和旧登录密码一样');
        }

        //核对旧密码
        if(up_pass($data['oldpwd']) != $uinfo['user_pass'])
        {
            $this->error('原始密码输入有误');
        }

        //开始修改
        $res = $uModel->saveLogin($uid, ['user_pass' => up_pass($data['pwd'])]);

        //修改，重新登录
        Session::delete('USER_KEY_ID');
        Session::delete('USER_KEY');

        $this->success('修改成功，请重新登录', '/login');
    }
}