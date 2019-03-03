<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/27
 * Time: 21:28
 */

namespace app\admin\validate;

use think\Validate;
class category extends Validate
{
    protected $rule =   [
        'catname'      =>  'require',
        'image'      =>  'fileExt:jpg,jpeg,img,imgs,png,jpng',
       // 'description'      =>  '',
        'sort'      =>  'number',
        'ismenu'      =>  'require|number',
    ];

    protected $message  =   [
        'catname.require'  => '请输入分类名称',
        'image.require'  => '请上传分类的图片',
        'image.fileExt'  => '请上传正确的分类图片(只允许jpg,jpeg,img,imgs,png,jpng)',
        'sort.number'      => '请输入正确的排序数',
        'ismenu.require'      => '请选择是否展示',
        'ismenu.number'      => '分类展示参数有误',
    ];

    protected $scene = [
        'checkCate'   =>  ['catname','image','sort','ismenu'],
    ];
}