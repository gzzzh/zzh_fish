<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/22
 * Time: 0:12
 */

namespace app\index\model;

use think\Model;
use think\Db;
class Notice extends Model
{
    protected $table = 'xzb_notice';

    /**
     * 上线公告列表
     */
    public function getNoticeList($page = 1, $field = '*')
    {
        $num = 8;
        $keys = ($page - 1) * $num;
        return Db('notice')->where('status','=', 1)
            ->limit($keys, $num)->order('sort asc')->select();
    }


    /**
     * 公告总页数
     */
    public function getNoticeCountsPage()
    {
        $num = 8;
        $cNumber = Db('notice')->where('status','=', 1)
            ->count('*');
        $cPage = ceil(($cNumber / $num));

        return ['cNumber' => $cNumber, 'cPage' => $cPage];
    }


    /**
     * 公告详情
     */
    public function getNoticeDetails($id,$field = '*')
    {
        return Db('notice')
            ->where('id','=',$id)
            ->where('status','=', 1)
            ->field($field)->find();
    }
}