<?php
/**
 * Created by PhpStorm.
 * User: [一秋]
 * Date: 2018/3/28
 * Time: 16:42
 * Desc: 成功源于点滴
 */

namespace app\index\model;

use think\Model;
use think\Db;

class User extends Model
{
    protected $table = 'xzb_user';


    /**
     * 手机查找用户信息
     */
    public function getInfo($mobile, $field = '*')
    {
        return Db('user')->where('mobile', '=', $mobile)->field($field)->find();
    }

    /**
     * 邀请码，查找用户
     */
    public function getAgent($agent, $field = '*')
    {
        return self::where('my_agent', '=', $agent)->field($field)->find();
    }


    /**
     * ID查找用户
     */
    public function getUserInfoNotType($id, $field = '*')
    {
        return Db('user')
            ->where('id', '=', $id)
            ->field($field)->find();
    }

    /**
     * ID查找用户
     */
    public function idGetInfo($id, $field = '*', $type = '1')
    {
        return Db('user')
            ->where('id', '=', $id)
            ->where('user_type', '=', $type)
            ->field($field)->find();
    }


    /**
     * 注册，添加用户
     */
    public function addUser($data)
    {
        return self::insertGetId($data);
    }


    /**
     * 根据用户ID，修改用户信息
     */
    public function saveLogin($uid, $data)
    {
        return self::where('id', '=', $uid)->update($data);
    }

    /**
     * 用户提现冻结
     */
    public function setUserTx($uid,$money)
    {
        //减少余额，增加冻结额
        $res1 = Db('user')->where('id', '=', $uid)->setDec('money', $money);
        $res2 = Db('user')->where('id', '=', $uid)->setInc('frozen_money', $money);

        if(empty($res1) || empty($res2)){
            return false;
        }else{
            return true;
        }
    }


    /**
     * 活动订单-通过审核，返钱到账
     */
    public function addUserOrderMoney($uid,$money)
    {
       return Db('user')->where('id', '=', $uid)->setInc('money', $money);
    }


}