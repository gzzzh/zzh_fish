<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/18
 * Time: 19:00
 */

namespace app\index\model;

use think\Db;
use think\Model;
class Focus extends Model
{
    protected $table = 'xzb_focus';


    /**
     * 轮播图
     */
    public function getFocusList()
    {
        return Db('focus')->where('if_show', '=', 1)
            ->where('type', '=', 1)
            ->order('sort asc')->select();
    }
}