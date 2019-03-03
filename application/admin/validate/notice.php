<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/20
 * Time: 16:40
 */

namespace app\admin\validate;

use think\Validate;
class notice extends Validate
{
    protected $rule =   [
        'imgFile'      =>  'require|fileExt:jpg,jpeg,img,imgs,png,jpng',
        'title'     => 'require',
        'intro'     => 'require',
        'content'     => 'require',
        'sort'     => 'number',
        'status'     => 'require|in:1,2',

    ];

    protected $message  =   [
        'imgFile.require'      => '请上传图片',
        'imgFile.fileExt'  => '请上传正确的图片类型',
        'intro.require'     => '公告简介不能为空',
        'content.require'     => '公告内容不能为空',
        'sort.number'     => '排序只能填写数字',
        'status.require'     => '请选择公告状态',
        'status.in'     => '请选择正确的状态',
    ];

    protected $scene = [
        'checkUpload'   =>  ['imgFile'],
        'saveNotice'    =>  ['title','intro','content','sort','status'],
    ];
}