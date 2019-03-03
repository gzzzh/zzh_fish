<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/27
 * Time: 13:38
 */

namespace app\index\model;

use think\Model;
use think\Db;
class Category extends Model
{
    protected $table = 'xzb_category';

    /**
     * 分类列表
     */
    public function getCategoryLisets()
    {
        return Db('category')->where('ismenu','=',1)
            ->order('sort asc')->select();
    }


    /**
     * 某个分类信息
     */
    public function getCateInfosName($id)
    {
        return Db('category')->where('ismenu','=',1)
            ->where('id', '=', $id)
            ->value('catname');
    }


    /**
     * 给用户随机设置标签
     */
    public function setUserCategoryList($cid)
    {
        $id = Db('category')->min('id');
        $counts = Db('category')->count('*');
        $num = chouquUserLabel($id, $counts, $cid);

        //随机生成1个标签
        $name1 = Db('category')->where('id','=', $num)
            ->value('catname');

        return $name1;
    }
}