<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/21
 * Time: 15:23
 */

namespace app\index\validate;

use think\Validate;
class user extends Validate
{
    protected $rule =   [
        'name'              =>  'require',
        'account'           =>  'require',
        'alipay_imgs'       =>  'require|file|fileExt:jpg,jpeg,img,imgs,png,jpng',

        'account_imgs'      => 'require|file|fileExt:jpg,jpeg,img,imgs,png,jpng',
        'price_value'       => 'require|number',
        'price_imgs'        => 'require|file|fileExt:jpg,jpeg,img,imgs,png,jpng',
        'sex'               => 'require|in:1,2',
        'birth_year'        => 'require|between:1950,2018',
        '__token__'  =>  'require|token',


    ];

    protected $message  =   [
        'name.require'              => '请填写支付宝姓名',
        'account.require'           => '请输入账号',
        'alipay_imgs.require'       => '请上传支付宝截图',
        'alipay_imgs.file'          => '请上传正确的图片类型',
        'alipay_imgs.fileExt'       => '请上传正确的图片类型',

        'account_imgs.require'           => '请上传淘宝账号截图',
        'account_imgs.fileExt'           => '请上传正确的账号图片类型',
        'price_value.require'           => '请填写淘气值',
        'price_value.number'           => '请填写正确的淘气值',
        'price_imgs.require'           => '请填上传淘气值的截图',
        'price_imgs.fileExt'           => '请上传正确的淘气值图片类型',
        'sex.require'           => '请选择性别',
        'sex.int'           => '请输入正确的性别',
        'birth_year.require'           => '请输入出生年份',
        'birth_year.between'           => '请输入正确的年份',
        '__token__.require' => '非法提交',
        '__token__.token'   => '请不要重复提交表单',

    ];

    protected $scene = [
        'submitAlipay'   =>  ['name', 'account', 'alipay_imgs'],
        'bindTaobao'     =>  ['account', 'account_imgs', 'price_value', 'price_imgs', 'sex', 'birth_year'],
    ];
}