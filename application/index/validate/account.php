<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/10
 * Time: 17:35
 */

namespace app\index\validate;
use think\Validate;

class account extends Validate
{
    protected $rule =   [
        'mobile'    =>  'require|length:11|number',
        'code'      =>  'require|alphaNum',
        'psd'       =>  'require|length:6,20',
        'checkpsd'  =>  'require|length:6,20|confirm:psd',
        'vcode'     =>  'require|number',
        'agent'     => 'alphaNum',
        'type'      => 'in:1,2',
        'qq'        => 'number',
        '__token__'  =>  'require|token',

    ];

    protected $message  =   [
        'mobile.require'    => '手机号不能为空!',
        'mobile.length'     => '请输入正确的手机号',
        'mobile.number'     => '请输入正确的手机号码',
        'code.require'      => '请输入图形验证码',
        'code.alphaNum'     => '请输入字母和数字组成的验证码',
        'psd.require'       => '请输入密码',
        'psd.length'        => '请输入长度为6-20位的密码',
        'psd.confirm'       => '密码和确认密码保持一致',
        'checkpsd.require'  => '请输入确认密码',
        'checkpsd.length'   => '请输入长度为6-20位的确认密码',
        'checkpsd.confirm'  => '密码和确认密码保持一致',
        'vcode.require'     => '请输入手机验证码',
        'agent.alphaNum'    => '请输入正确的邀请码',
        'type.number'       => '请输入正确的用户类型',
        'qq'                => '请输入正确的QQ号',
        '__token__.require' => '非法提交',
        '__token__.token'   => '请不要重复提交表单',
    ];

    protected $scene = [
        'getCode'   =>  ['mobile'],
        'checkCode' => ['mobile','code'],
        'regCheck'  => ['mobile','vcode','psd','checkpsd','agent','type','qq'],
        'login'  => ['mobile','vcode','psd'],
    ];
}