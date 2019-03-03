<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/16
 * Time: 21:53
 */

namespace app\admin\model;

use think\Db;
use think\Model;
class Focus extends Model
{
    protected $table = 'xzb_focus';

    /**
     * 获取轮播图列表
     */
    public function getFocusList($where = '', $field = '*'){
        return Db('focus')
            ->field($field)
            ->order('sort asc')->paginate(10);
    }


    /**
     *查找-轮播图
     */
    public function getFocusInfos($id, $field = '*')
    {
        return Db('focus')->where('id','=', $id)
            ->field($field)->find();
    }


    /**
     * 更新-轮播图
     */
    public function saveFocus($data)
    {
        return Db('focus')->update($data);
    }

    /**
     * 获取-最大排序
     */
    public function getFocusSortMax()
    {
        return Db('focus')->max('sort');
    }

    /**
     * 删除
     */
    public function delFocusRes($id)
    {
        return Db('focus')->where('id','=', $id)->delete();
    }
}