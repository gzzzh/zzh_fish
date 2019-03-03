<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/21
 * Time: 13:39
 */

namespace app\index\model;

use think\Db;
use think\Model;
class ProductTrial extends Model
{
    protected $table = 'xzb_product_trial';


    /**
     *找出商家的活动信息-废弃了
     */
    public function getShopsList($uid, $field='*')
    {
        return Db('product_trial')->where('userid','=',$uid)->field($field)->paginate(10);
    }
}