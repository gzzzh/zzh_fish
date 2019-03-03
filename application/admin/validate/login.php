<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/23
 * Time: 15:35
 */

namespace app\admin\validate;

use think\Validate;
class login extends Validate
{
    protected $rule =   [
        'name'    =>  'require',
        'pwd'      =>  'require',
    ];

    protected $message  =   [
        'name.require'      => '请输入账号',
        'pwd.require'  => '请输入密码',
    ];

    protected $scene = [
        'checkLogin'   =>  ['name','pwd'],
    ];
}