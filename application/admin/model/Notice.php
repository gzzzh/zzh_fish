<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/19
 * Time: 14:24
 */

namespace app\admin\model;

use think\Model;
use think\Db;
class Notice extends Model
{
    protected $table = 'xzb_notice';


    /**
     * 公告列表
     */
    public function getNoticeList($where = '')
    {
        if(empty($where)){
            return Db('notice')->order('sort asc')->paginate(10);
        }else{
            return Db('notice')->order('sort asc')->where($where)->paginate(10);
        }
    }


    /**
     * 查找数据
     */
    public function getNoticeInfo($id, $field='*')
    {
        return Db('notice')->where('id','=',$id)
            ->field($field)->find();
    }


    /**
     * 获得当前公告最大的排序
     */
    public function getNoticeMaxs()
    {
        return Db('notice')->max('sort');
    }


    /**
     * 更新数据
     */
    public function updateNoticeInfo($data)
    {
        return Db('notice')->update($data);
    }


    /**
     * 添加数据
     */
    public function addNoticeRes($data)
    {
        return Db('notice')->insertGetId($data);
    }


    /**
     * 删除数据
     */
    public function delNoticeRes($id)
    {
        return Db('notice')->where('id','=', $id)->delete();
    }
}