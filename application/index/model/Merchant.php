<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/22
 * Time: 19:19
 */

namespace app\index\model;

use think\Db;
use think\Model;
class Merchant extends Model
{
    protected $table = 'xzb_merchant';


    /**
     * 某个商家所有的店铺信息
     */
    public function getShopMerchantInfo($uid, $field ='*')
    {
        $list = Db('merchant')->where('userid','=',$uid)->field($field)->select();
        return $list;
    }

    /**
     * 审核+认证  商铺是否存在
     */
    public function getShopsIfExist($where, $value)
    {
        return Db('merchant')->where($where)
            ->where('shop_status','in','1,2')
            ->value($value);
    }

    /**
     * 查找-认证的店铺
     */
    public function getShopMerchantLists($uid, $field ='*')
    {
        $list = Db('merchant')
            ->where('userid','=',$uid)
            ->where('shop_status','=','2')
            ->field($field)->select();
        return $list;
    }


    /**
     * 查找用户，商铺ID的认证店铺是否存在
     */
    public function getShopsUserIdExits($where, $field ='*')
    {
        $list = Db('merchant')
            ->where($where)
            ->where('shop_status','=','2')
            ->field($field)->find();
        return $list;
    }

    /**
     * ID，查找店铺信息
     */
    public function idGetMerchantInfo($id, $field = '*')
    {
        return Db('merchant')
            ->where('id','=',$id)
            ->field($field)->find();
    }
}