<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/4
 * Time: 18:23
 */

namespace app\index\model;

use think\Db;
use think\Model;
class PayCheck extends Model
{
    protected $table  = 'xzb_pay_check';


    /**
     * 添加充值记录
     */
    public function addUserCz($data)
    {
        return Db('pay_check')->insertGetId($data);
    }
}