<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/23
 * Time: 16:43
 */

namespace app\admin\model;

use think\Model;
use think\Db;
class User extends Model
{
    protected $table='xzb_user';

    /**
     * 用户列表
     */
    public function getUserList($data = '', $field='*')
    {
        if(!empty($data)){
            // 查询类型为1的用户数据 并且每页显示10条数据
            $list = Db::name('user')
                ->where($data)
                ->where('user_type','=',1)
                ->field($field)
                ->paginate(2);
        }else{
            // 查询状态为1的用户数据 并且每页显示10条数据
            $list = Db::name('user')
                ->where('user_type','=',1)
                ->field($field)
                ->paginate(2);
        }

        return $list;
    }


    /**
     * 商家信息列表
     */
    public function getShopsList($data = '',$field = '*')
    {
        if(!empty($data)){
            // 查询类型为1的用户数据 并且每页显示10条数据
            $list = Db::name('user')
                ->where($data)
                ->where('user_type','=',2)
                ->field($field)
                ->paginate(2);
        }else{
            // 查询状态为1的用户数据 并且每页显示10条数据
            $list = Db::name('user')
                ->where('user_type','=',2)
                ->field($field)
                ->paginate(2);
        }

        return $list;
    }


    /**
     * ID查找-用户详细信息
     */
    public function getDetails($id, $field = '*')
    {
        return Db::name('user')
            ->where('id','=',$id)
            ->field($field)
            ->find();
    }


    /**
     * 用户状态修改
     */
    public function editUserStatus($id, $save)
    {
        return Db::name('user')
            ->where('id','=',$id)
            ->update($save);
    }


    /**
     * 用户增加金额
     */
    public function addUserMoneys($uid, $money){
        return Db::name('user')->where('id', '=',$uid)->setInc('money', $money);
    }


    /**
     * 用户减少冻结额
     */
    public function reduceUserMoneys($uid, $money){
        return Db::name('user')->where('id', '=',$uid)->setDec('frozen_money', $money);
    }


    /**
     *查找某个用户信息
     */
    public function getDetailWhereUserInfo($where, $field = '*')
    {
        return Db::name('user')
            ->where($where)
            ->field($field)
            ->find();
    }


    /**
     * 找出商家 + 开通VIP + 今天到期时间的用户
     */
    public function getUserDetailWhereLists($field)
    {
        $date = date('Y-m-d H:i:s');//当天时间
        return Db::name('user')
            ->where('user_type','=', 2)
            ->where('is_vip','in','1,2,3')
            ->where('vip_time','elt', $date)
            ->field($field)
            ->select();
    }
}