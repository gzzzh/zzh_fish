<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/20
 * Time: 16:32
 */

namespace app\index\validate;
use think\Validate;

class activity extends Validate
{
    protected $rule =   [
        'merchant_id'    =>  'require|number',
        'product_name'    =>  'require',
        'product_logo'    =>  'require|fileExt:jpg,jpeg,img,imgs,png,jpng',
        'category_id'    =>  'require|number',
        'product_price'    =>  'require|number|gt:1',
        'product_link'    =>  'require',
        'num'    =>  'require|integer|gt:0',
        'cost_price'    =>  'require|number',
        'begin_time'    =>  'require',
        'end_time'    =>  'require|egt:begin_time',
        'collect_url'    =>  'require',
        'remark' =>'chsAlphaNum',
        'more'    =>  'fileExt:jpg,jpeg,img,imgs,png,jpng',
        'task_label'    => 'require',
        'sortord'       => 'require|in:1,2,3,4,5',
        'id'    => 'require|integer',
        'trade_no' => 'require|number',

        'product_logo_two' => 'fileExt:jpg,jpeg,img,imgs,png,jpng',//商品副图
        'task_type' => 'require|in:1,2',//活动类型
        'if_huabei' => 'require|in:1,2',//是否支持花呗
        'if_visa' => 'require|in:1,2',//是否支持信用卡
        'is_serve' => 'require|in:1,2',//是否开启增值服务
        'user_chat' => 'integer',//旺旺聊天
        'user_ask' => 'integer',//手淘问大家
        'user_photo' => 'integer',//晒图/视频
        'add_photo' => 'integer',//追图
        'add_cooent' => 'integer',//追评
        'logo' => 'fileExt:jpg,jpeg,img,imgs,png,jpng',//编辑保存主图


    ];

    protected $message  =   [
        'merchant_id.require'    => '请选择活动店铺',
        'merchant_id.number'    => '非法的活动店铺',
        'product_name.require'    => '请输入商品名称',
        'product_logo.require'    => '请上传商品主图',
        'category_id.require'    => '请选择商品的分类',
        'category_id.number'    => '非法的商品分类',
        'product_logo.fileExt'    => '请上传正确的商品主图(目前只支持：jpg,jpeg,img,imgs,png,jpng)',
        'product_price.require'    => '请输入活动商品的单价',
        'product_price.number'    => '请输入正确的商品单价',
        'product_price.gt'       => '商品单价不能小于1元',
        'product_link.require'    => '请输入活动商品的链接地址',
        'num.require'    => '请输入商品的数量',
        'num.integer'    => '商品的数量必须为整数',
        'num.gt'    => '活动商品数量必须大于0件',
        'begin_time.require'    => '请选中活动开始时间',
        'end_time.require'    => '请选择活动结束时间',
        'end_time.egt'    => '结束时间不能小于开始时间',
        'remark.chsAlphaNum' => '请输入正确的规格/备注',
        'collect_url.require'    => '请输入收藏的链接',
        'more.fileExt'    => '请上传正确的图片类型',

        'task_label.require'    => '请输入搜索关键词',
        'sortord.require'       => '请选择搜索排序方式',
        'sortord.in'       => '排序方式不能为空',
        'id.require'    => '非法请求,参数为空',
        'id.integer'    => '非法请求',
        'trade_no.require'    => '请输入支付订单号',
        'trade_no.number'    => '请输入正确的交易订单号',

        //新增
        'product_logo_two.fileExt' => '请上传正确的礼品主图(目前只支持：jpg,jpeg,img,imgs,png,jpng',
        'logo.fileExt' => '请上传正确的商品主图(目前只支持：jpg,jpeg,img,imgs,png,jpng',
        'task_type.require'    => '请选择活动的类型',
        'task_type.in'    => '非法的活动类型',
        'if_huabei.require'    => '请选择是否支持花呗',
        'if_huabei.in'    => '非法的支持花呗类型',
        'if_visa.require'    => '请选择是否支持行用卡',
        'if_visa.in'    => '非法的支持行用卡类型',
        'is_serve.require'    => '请选择是否开启增值服务',
        'is_serve.in'    => '非法的增值服务类型',
        'user_chat.integer' => '请输入整数的"旺旺聊天"服务',//旺旺聊天
        'user_ask.integer' => '请输入整数的"手淘问大家"服务',//手淘问大家
        'user_photo.integer' => '请输入整数的"晒图/视频"服务',//晒图/视频
        'add_photo.integer' => '请输入整数的"追加图片"服务',//追图
        'add_cooent.integer' => '请输入整数的"追加评论"服务',//追评
    ];

    protected $scene = [
        'checkAct'   =>  [
            'task_type','merchant_id', 'product_name','product_link','category_id','product_logo', 'product_logo_two','task_label','sortord', 'product_price',
            'num','begin_time', 'end_time', 'if_huabei', 'if_visa', 'is_serve', 'user_chat','user_ask','user_photo','add_photo','add_cooent','remark'
        ],

        'addTradeNum' => ['id'],
        'checkTradeNo' => ['id', 'trade_no'],
        'editTasks' => ['id'],

        //编辑保存信息  //'begin_time', 'end_time',
        'saveTask' => [
            'task_type','merchant_id', 'product_name','product_link','category_id','logo','product_logo_two','task_label','sortord', 'product_price',
            'num', 'if_huabei', 'if_visa', 'is_serve', 'user_chat','user_ask','user_photo','add_photo','add_cooent','type','remark'
        ],

    ];
}