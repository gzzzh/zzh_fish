<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/13
 * Time: 23:36
 */

namespace app\index\model;

use think\Db;
use think\Model;
class Finance extends Model
{
    protected $table = 'xzb_finance';

    /**
     * 财务明细列表
     */
    public function getFinList($id,$page = 1, $field = '*')
    {
        $num = 10;
        $keys = ($page - 1) * $num;
        return Db('finance')->where('uid','=', $id)
            ->order('add_time desc')
            ->field($field)
            ->limit($keys, $num)
            ->select();
    }

    /**
     * 财务明细总页数
     */
    public function countPageUserFin($id)
    {
         $cNumber = Db('finance')->where('uid','=', $id)
            ->count();

         //总页数
        $cPage = ceil($cNumber / 10);
        return ['cNumber' => $cNumber, 'cPage' => $cPage];
    }
}