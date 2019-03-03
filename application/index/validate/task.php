<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/2/13
 * Time: 13:06
 */

namespace app\index\validate;

use think\Validate;
class task extends Validate
{
    protected $rule =   [
        'tid'              =>  'require|integer',//活动id
        'order_id' => 'require|integer',//订单id
        'seller_id' => 'require|integer',//商家ID
        'user_id' => 'require|integer',//用户ID

        'order_img' => 'require|fileExt:jpg,jpeg,img,imgs,png,jpng',//下单截图
        'collect_img' => 'require|fileExt:jpg,jpeg,img,imgs,png,jpng',//收藏截图
        'focus_img' => 'require|fileExt:jpg,jpeg,img,imgs,png,jpng',//关注店铺截图
        'comment_img' => 'require|fileExt:jpg,jpeg,img,imgs,png,jpng',//评测截图
        'type' => 'require|alpha',//商家审核：pass通过 或 not驳回
        'page' => 'integer',//页码
        'order_sn' => 'require|integer',//淘宝订单号

        'product_link'  => 'require',
        '__token__'  =>  'require|token',


    ];

    protected $message  =   [
        'tid.require'               => '非法请求，活动参数为空',
        'tid.integer'               => '非法请求,活动参数类型错误',
        'order_img.require'         => '请上传下单的截图',
        'collect_img.require'         => '请上传收藏商品的截图',
        'focus_img.require'         => '请上传关注店铺的截图',
        'order_img.fileExt'         => '非法的下单图片类型',
        'collect_img.fileExt'         => '非法的收藏商品类型',
        'focus_img.fileExt'         => '非法的关注店铺图片类型',
        'product_link.require'      => '请填写商品的淘宝链接',

        'order_id.require'               => '非法请求,活动订单参数为空',
        'order_id.integer'               => '非法请求,活动订单参数类型错误',
        'type.require'               => '审核类型为空,非法请求',
        'type.alpha'                => '审核类型错误，非法请求',
        'seller_id.require'               => '非法请求,商家参数为空',
        'seller_id.integer'               => '非法请求,商家参数类型错误',
        'user_id.require'               => '非法请求,用户参数为空',
        'user_id.integer'               => '非法请求,用户参数类型错误',
        'page.integer'               => '请输入正确的页码格式',
        'order_sn.require'          => '请提交淘宝订单号',
        'order_sn.integer'          => '请提交淘宝订单号',

        '__token__.require' => '非法提交',
        '__token__.token'   => '请不要重复提交表单',

    ];

    protected $scene = [
        'checkTaskId'   =>  ['tid','page'],
        'checkUrl'      => ['tid', 'product_link','page'],
        'uploadOrder'   => ['tid', 'order_img', 'collect_img','page','order_sn'],
        'submitZol'        => ['tid', 'comment_img', 'focus_img','page'],
        'auditOrderList'    => ['tid', 'order_id', 'user_id','seller_id','type','page'],
        'selTasksList'  => ['tid', 'order_id', 'user_id','seller_id','page'],
        'allotUsers'    => ['order_id', 'user_id','page'],
        ];
}