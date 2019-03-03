<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/28
 * Time: 14:50
 */

namespace app\index\model;

use think\Model;
use think\Db;
class Cash extends Model
{
    public $table = 'xzb_cash';


    /**
     * 用户提现记录 - 10条
     */
    public function getUserCashList($uid, $page = 1, $field = '*')
    {
        $num = 10;
        $keys = ($page - 1) * $num;
        return Db('cash')->where('userid','=', $uid)
            ->field($field)->order('inputtime asc')->limit($keys, $num)->select();
    }

    /**
     * 财务明细总页数
     */
    public function countPageUserCash($id)
    {
        $cNumber = Db('cash')->where('userid','=', $id)
            ->count();

        //总页数
        $cPage = ceil($cNumber / 10);
        return ['cNumber' => $cNumber, 'cPage' => $cPage];
    }
}