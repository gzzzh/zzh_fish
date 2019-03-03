<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/21
 * Time: 16:45
 */

namespace app\index\model;
use think\Model;

class BindUserShop extends Model
{
    public $table = 'xzb_bind_user_shop';

    /**
     * 用户是否绑定淘宝号
     */
    public function getUserTaobaoInfo($uid, $field = '*')
    {
        return Db('bind_user_shop')
            ->where('userid','=', $uid)
            ->where('type','=', 1)//淘宝类型
            ->order('add_time desc')->field($field)->value('status');
    }

    /**
     * 添加用户淘宝审核信息
     */
    public function addUserTaobao($data)
    {
        return Db('bind_user_shop')->insertGetId($data);
    }


    /**
     * 用户-绑定淘宝信息
     */
    public function getBindTaoBaoInfos($uid, $field = '*')
    {
        return Db('bind_user_shop')
            ->where('userid','=', $uid)
            ->where('type','=', 1)//淘宝类型
            ->order('add_time desc')->field($field)->find();
    }


    /**
     * 查看用户淘宝信息
     */
    public function getUserTaobaoInfosOrder($uid, $field = '*')
    {
        return Db('bind_user_shop')
            ->where('userid','=', $uid)
            ->where('status','=', 2)
            ->field($field)->find();
    }
}