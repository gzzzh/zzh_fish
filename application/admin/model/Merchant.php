<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/3
 * Time: 15:25
 */

namespace app\admin\model;

use think\Db;
use think\Model;
class Merchant extends Model
{
        protected $table = 'xzb_merchant';

        /**
         * 商铺名称
         */
        public function getUserMerchantName($id,$value)
        {
            return Db('merchant')->where('id','=', $id)->value($value);
        }


        /**
         * 商家-店铺审核列表
         */
        public function getShopsAuditList($where = [], $field = '*')
        {

            return Db::name('merchant')
                ->field($field)
                ->order('add_time asc')
                ->paginate(8);
        }


    /**
     * @param $id
     * @param $value
     * @return mixed
     * 修改店铺活动状态
     */
    public function setShopsStatus($id,$data)
    {
        return Db('merchant')->where('id','=', $id)
            ->where('shop_status','=','1')
            ->update($data);
    }


    /**
     * 更新-店铺的信息
     */
    public function updateShopsMessagess($where, $data)
    {
        return Db('merchant')->where($where)
            ->update($data);
    }


    /**
     * 查找店铺信息
     */
    public function getMerchantInfos($id, $field = '*')
    {
        return Db('merchant')->where('id','=', $id)->field($field)->find();
    }

}