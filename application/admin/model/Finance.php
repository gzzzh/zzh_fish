<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/13
 * Time: 23:36
 */

namespace app\admin\model;

use think\Db;
use think\Model;
class Finance extends Model
{
    protected $table = 'xzb_finance';


    /**
     * 添加财务日志
     */
    public function addFinances($data)
    {
        return Db('finance')->insertGetId($data);
    }
}