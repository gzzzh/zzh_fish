<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/22
 * Time: 19:36
 */

namespace app\index\validate;

use think\Validate;
class shops extends Validate
{
    protected $rule =   [
        'store_name'              =>  'require',
        'wang_name'           =>  'require',
        'store_url'       =>  'require',
        'store_qq'      => 'require|number|length:4,12',
        'mobile'       => 'require|number|length:11',
        '__token__'  =>  'require|token',
    ];

    protected $message  =   [
        'store_name.require'              => '请填写店铺名称',
        'wang_name.require'           => '请填写旺旺号',
        'store_url.require'       => '请填写店铺的链接',
        'store_qq.require'          => '请填写店铺QQ号',
        'store_qq.number'       => '请填写正确的QQ号',
        'store_qq.length'       => 'QQ号长度为4-12位',
        'mobile.require'          => '请填写店铺手机号',
        'mobile.number'       => '请填写正确的手机号',
        'mobile.length'       => '请输入正确的手机号位数',
        '__token__.require' => '非法提交',
        '__token__.token'   => '请不要重复提交表单',
    ];

    protected $scene = [
        'checkStore' => ['store_name', 'wang_name', 'store_url', 'store_qq', 'mobile'],
    ];
}