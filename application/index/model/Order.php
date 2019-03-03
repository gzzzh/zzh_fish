<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/20
 * Time: 16:27
 */

namespace app\index\model;
use think\Db;
use think\Model;

class Order extends Model
{
    protected $table = 'xzb_order';

    /**
     *用户活动订单信息
     */
    public function getUserActList($where, $page, $field = '*')
    {
        $num = 8;
        $key = ($page - 1) * $num;

        $list = Db('order')->where($where)
            ->field($field)->order('inputtime desc')->limit($key, $num)->select();
        if($list && !is_array($list)){
            $list = $list->toArray();
        }
        return $list;
    }

    /**
     * 商品ID -获取订单信息
     */
    public function getProductList($id, $field = '*')
    {
        $list = Db('order')->where('goods_id','=', $id)->field($field)->find();
        return $list;
    }


    /**
     *用户活动-数据是否存在
     */
    public function userIdGetOrderTaskIdInfo($where, $field = '*')
    {
        return Db('order')->where($where)->field($field)->find();
    }


    /**
     * 用户活动-更新订单信息
     */
    public function userIdUpdateOrderStatusInfo($where, $data)
    {
        return Db('order')->where($where)->update($data);
    }


    /**
     * 用户-所有订单数量
     */
    public function getUserOrderCounts($where)
    {
        $count = Db('order')->where($where)->count('*');
        $pageCount = ceil($count / 8);

        return ['counts' => $count, 'pageCount' => $pageCount];

    }


    /**
     * 审核-获得资格用户列表
     */
    public function getUserOrderInfo($where, $page, $field = '*')
    {
        $num = 8;
        $key = ($page - 1) * $num;

        $list = Db('order')->where($where)
            ->where('status','in','2,3,4,5,6,7,8,9,10')
            ->field($field)->order('inputtime desc')->limit($key, $num)->select();
        if($list && !is_array($list)){
            $list = $list->toArray();
        }

        //找出订单用户淘宝账号
        foreach ($list as $key => $val)
        {
            $info = Db('bind_user_shop')->where('userid' ,'=',$val['user_id'])
                ->where('status','=',2)
                ->field('id,userid,account')->find();

            if(!empty($info)){
                $list['user_tb_account'] = $info['account'];
            }
        }
        return $list;
    }


    /**
     * 用户中奖订单总数
     */
    public function getUserTaskWinningCount($where)
    {
        $count = Db('order')->where($where)
            ->where('status','in','2,3,4,5,6,7,8,9,10')
            ->count('*');
        $pageCount = ceil($count / 8);

        return ['counts' => $count, 'pageCount' => $pageCount];
    }


    /**
     * 用户活动-驳回用户订单
     */
    public function cancelUpdateOrderStatusInfo($where, $data)
    {
        return Db('order')->where($where)
            ->where('status','in','2,3,8')
            ->update($data);
    }


    /**
     * 用户活动-通过订单
     */
    public function passUpdateOrderStatusInfo($where, $data)
    {
        return Db('order')->where($where)
            ->where('status','=','8')
            ->update($data);
    }


    /**
     * 用户活动-更新申请评测状态[已下单和驳回状态]
     */
    public function userIdUpdateOrderPassAndReject($where, $data)
    {
        return Db('order')->where($where)
            ->where('status','in','3,4')
            ->update($data);
    }


    /**
     * 关闭用户活动订单
     * @param $where
     * @param $data
     * @return mixed
     */
    public function delUpdateOrderStatusInfo($where, $data)
    {
        return Db('order')->where($where)
            ->where('status','in','2,3,4,8')
            ->update($data);
    }
}