<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/2/18
 * Time: 15:06
 */

namespace app\admin\model;

use think\Db;
use think\Model;
class Order extends Model
{
    protected $table = 'xzb_order';

    /**
     * 活动订单-超时未完成,中奖时间 超12小时未完成
     */
    public function userOrderUndone($field='*')
    {
        $time = time() - 43200;//当前时间戳 - 12小时
        $date = date("Y-m-d H:i:s", $time);
        $list = Db('order')
            ->where('status','=', 2)
            ->where('winning_time','elt', $date)
            ->field($field)
            ->select();

        return $list;
    }


    /**
     * 找出-随机值的用户ID
     */
    public function getOrdersRandUserInfos($where, $rand, $field = '*')
    {
        $info = Db('order')->where($where)
            ->limit($rand, 1)
            ->field($field)
            ->find();
        return $info;
    }



    /**
     * 关闭-超时用户的订单
     */
    public function closeUserOrders($where, $updata)
    {
        $res = Db('order')->where($where)->update($updata);
        return $res;
    }


    /**
     * 活动-活动总申请人数
     */
    public function getTaskOrderNumber($where)
    {
        $counts = Db('order')->where($where)->count('*');
        return $counts;
    }

    /**
     * 更新活动订单状态
     */
    public function selectTaskOrderAwardUser($where, $updata)
    {
        return Db('order')->where($where)->update($updata);

    }


    /**
     * 找出提交试用报告，超过两天未审核的用户
     */
    public function getUserOrderTwodaysList($field = '*')
    {
        $date = date("Y-m-d",strtotime("-2 day"));//两天前
        $list = Db('order')
            ->where('status','=', 8)
            ->where('up_comment_time','elt', $date)
            ->field($field)
            ->select();

        return $list;
    }
}