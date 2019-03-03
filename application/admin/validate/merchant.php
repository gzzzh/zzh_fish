<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/3/1
 * Time: 15:27
 */

namespace app\admin\validate;

use think\Validate;
class merchant extends Validate
{
    protected $rule =   [
        'id'      =>  'require|integer',
        'store_name'      =>  'require|chsDash',
        'wang_name'      =>  'require|chsDash',
        'store_url'      =>  'require',
        'store_qq'       => 'require|integer',
        'mobile'         => 'require|integer',
    ];

    protected $message  =   [
        'id.require'  => '请传递ID参数',
        'id.integer'  => '非法的参数类型',
        'store_name.require'  => '请填写店铺名称',
        'store_name.chsDash'  => '店铺名称类型错误',
        'wang_name.require'      => '请填写店铺旺旺号',
        'wang_name.chsDash'      => '店铺旺旺号类型错误',
        'store_url.require'      => '请填写店铺的链接',
        'store_qq.require'      => '请填写店铺的QQ',
        'store_qq.integer'      => '店铺QQ类型错误',
        'mobile.require'      => '请填写店铺的手机号',
        'mobile.integer'      => '店铺QQ类型错误',
    ];

    protected $scene = [
        'checkMerchant'   =>  ['id','store_name','wang_name','store_url','store_qq','mobile'],
    ];
}