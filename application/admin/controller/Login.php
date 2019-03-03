<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/23
 * Time: 15:09
 */

namespace app\admin\controller;

use think\Request;
use think\Session;
class Login extends Base
{
    /**
     * 登录页面
     */
    public function index()
    {
        return view('index');
    }


    /**
     * 登录检测
     */
    public function checkLogin()
    {
        $data = Request::instance()->param();
        $validate = new \app\admin\validate\login;
        if (!$validate->scene('checkLogin')->check($data))
        {
            $this->error($validate->getError());
        }

        //查找用户
        $aModel = new \app\admin\model\Admin;
        $info = $aModel->getAdminInfo($data['name'],'id, name, password, status');
        if(empty($info)){
            $this->error('账号或密码有误');
        }

        //比对密码
        if(up_pass($data['pwd']) != $info['password']){
            $this->error('账号或密码有误');
        }

        if($info['status'] == 2){
            $this->error('您的账号已被封禁');
        }

        //登录成功，缓存
        Session::set('admin_userid', $info['id']);
        //修改登录记录
        $saveData = [
            'lastlogin' => date('Y-m-d H:i:s'),
            'lastloginip' => get_client_ip()
        ];
        $aModel->updateAdminInfo($info['id'], $saveData);

        $this->redirect('admin/Index/index', '',1, '登录成功');

    }


    /**
     * 登出
     */
    public function loginOut()
    {
        Session::delete('admin_userid');
        $this->redirect('Login/index');
    }
}