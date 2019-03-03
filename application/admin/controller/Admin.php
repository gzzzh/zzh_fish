<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/23
 * Time: 15:02
 */

namespace app\admin\controller;

use think\Session;
class Admin extends Base
{
    public function _initialize()
    {
        parent::_initialize();

        //验证登录
        $uid = Session::get('admin_userid');
        if (empty($uid)){
            $this->redirect('Login/index');
        }
    }


}