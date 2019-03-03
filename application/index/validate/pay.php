<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/28
 * Time: 15:37
 */

namespace app\index\validate;

use think\Validate;
class pay extends Validate
{
    protected $rule =   [
        'mobile'    =>  'require|length:11|number',
        'vcode'     =>  'require|length:6|number',
        'money'       =>  'require|number|gt:5',
        'cash_alipay_username'  =>  'require',
        'cz_money'      => 'require|number|gt:10',
        'tran_number'   =>      'require|alphaNum',
        'vip_type'  => 'require|in:1,2,3',//vip

        '__token__'  =>  'require|token',

    ];

    protected $message  =   [
        'mobile.require'    => '手机号不能为空',
        'mobile.length'     => '请输入正确的手机号',
        'mobile.number'     => '请输入正确的手机号',
        'vcode.require'     => '请输入手机验证码',
        'vcode.length'     => '请输入6位数的手机验证码',
        'vcode.number'     => '请输入正确的验证码类型',
        'money.require'       => '请输入提现金额',
        'money.number'        => '请输入正确的金额',
        'money.gt'            => '最小提现额为100元',
        'cash_alipay_username.require'       => '请选择到款账号',
        'cz_money.require'       => '请输入充值金额',
        'cz_money.number'        => '请输入正确的充值金额',
        'cz_money.gt'            => '最小充值金额为10元',
        'tran_number.require'       => '请输入交易单号',
        'tran_number.alphaNum'       => '请输入正确的交易单号',
        'vip_type.require'       => '请选择申请的VIP类型',
        'vip_type.in'       => '非法的VIP类型',


        '__token__.require' => '非法提交',
        '__token__.token'   => '请不要重复提交表单',
    ];

    protected $scene = [
        'checkPay'    =>  ['vcode','money','cash_alipay_username'],
        'checkCz'    =>  ['cz_money','tran_number'],
        'checkVip'  => ['vip_type', 'tran_number'],
    ];
}