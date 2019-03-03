<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/27
 * Time: 20:14
 */

namespace app\admin\model;

use think\Model;
use think\Db;
class Category extends Model
{
    protected $table = 'xzb_category';


    /**
     * 获取分类列表
     */
    public function getLists()
    {
        return Db('category')->order('sort asc')->select();
    }

    /**
     * 查找某个分类信息
     */
    public function getCateInfo($id, $field = '*')
    {
        return Db('category')
            ->where('id','=',$id)
            ->field($field)
            ->find();
    }


    /**
     * 更新某个分类
     */
    public function saveCategory($data)
    {
        return Db('category')->update($data);
    }

    /**
     * 分类最大的排序
     */
    public function getCateMax()
    {
        return Db('category')->max('sort');
    }


    /**
     * 添加新的分类
     */
    public function addCate($data)
    {
        return Db('category')->insertGetId($data);
    }


    /**
     * 删除
     */
    public function delCateRes($id)
    {
        return Db('category')->where('id','=',$id)->delete();
    }


    /**
     * 分类名称
     */
    public function getCateName($id,$value)
    {
        return Db('category')->where('id','=', $id)->value($value);
    }
}