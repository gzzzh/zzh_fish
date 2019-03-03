<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/17
 * Time: 22:12
 */

namespace app\index\validate;

use think\Validate;
class chgpwd extends Validate
{
    protected $rule =   [
        'oldpwd'    =>  'require|length:6,20',
        'pwd'      =>  'require|length:6,20',
        'ckpwd'       =>  'require|length:6,20|confirm:pwd',
        '__token__'  =>  'require|token',

    ];

    protected $message  =   [
        'oldpwd.require'    => '请输入原始密码',
        'oldpwd.length'     => '请输入6-20位的密码',
        'pwd.require'    => '新密码不能为空',
        'pwd.length'     => '请输入6-20位的新密码',
        'ckpwd.require'    => '确认密码不能为空',
        'ckpwd.length'     => '请输入6-20位的确认密码',
        'ckpwd.confirm'     => '确认密码和新密码不一致',

        '__token__.require' => '非法提交',
        '__token__.token'   => '请不要重复提交表单',
    ];

    protected $scene = [
        'getPwd'   =>  ['oldpwd', 'pwd', 'ckpwd'],
    ];
}