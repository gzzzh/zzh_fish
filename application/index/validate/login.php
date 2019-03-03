<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/11
 * Time: 16:01
 */

namespace app\index\validate;
use think\Validate;

class login extends Validate
{
    protected $rule =   [
        'mobile'    =>  'require|length:11',
        'vcode'     =>  'require|number',
        'psd'       =>  'require|length:6,20',
        'checkpsd'  =>  'require|length:6,20|confirm:psd',
        '__token__'  =>  'require|token',

    ];

    protected $message  =   [
        'mobile.require'    => '手机号不能为空!',
        'mobile.length'     => '请输入正确的手机号!',
        'vcode.require'     => '请输入手机验证码',
        'psd.require'       => '请输入密码',
        'psd.length'        => '请输入长度为6-20位的密码',
        'psd.confirm'       => '密码和确认密码保持一致',
        'checkpsd.require'  => '请输入确认密码',
        'checkpsd.length'   => '请输入长度为6-20位的确认密码',
        'checkpsd.confirm'  => '密码和确认密码保持一致',
        '__token__.require' => '非法提交',
        '__token__.token'   => '请不要重复提交表单',
    ];

    protected $scene = [
        'mobile'    =>  ['mobile', 'vcode'],
        'check'     => ['mobile','vcode'],
        'sendpwd'   => ['mobile', 'vcode', 'psd', 'checkpsd'],

    ];
}