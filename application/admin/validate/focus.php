<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/16
 * Time: 22:54
 */

namespace app\admin\validate;

use think\Validate;
class focus extends Validate
{
    protected $rule =   [
        'title'      =>  'require',
        'images'      =>  'fileExt:jpg,jpeg,img,imgs,png,jpng',
        'sort'      =>  'number',
        'type'      => 'require',
        'if_show'      =>  'require',
    ];

    protected $message  =   [
        'title.require'  => '请输入轮播图标题',
        'images.fileExt'  => '请上传正确的轮播图图片(只允许jpg,jpeg,img,imgs,png,jpng)',
        'sort.number'      => '请输入正确的排序数',
        'type.require'      => '请选择轮播类型',
        'if_show.require'      => '请选择轮播是否上线',
    ];

    protected $scene = [
        'saveFocus'   =>  ['title','images','sort','type','if_show'],
    ];
}