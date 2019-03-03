<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/2/21
 * Time: 11:22
 */

namespace app\admin\model;

use think\Model;
class paiVip extends Model
{
    protected $table = 'xzb_pay_vip';

    /**
     *VIP-审核列表
     */
    public function getUserPayVipList($where = '', $field='*')
    {
        return Db('pay_vip')->where($where)->field($field)->order('add_time asc')->paginate(10);
    }

    /**
     * 查看数据
     */
    public function getPayVipUserInfo($where, $field='*')
    {
        return Db('pay_vip')->where($where)
            ->field($field)
            ->find();
    }


    /**
     * 更新状态
     */
    public function editUserPayVipStatus($id, $userid, $update)
    {
        return Db('pay_vip')->where('id','=', $id)
            ->where('userid','=', $userid)
            ->where('status','=','0')
            ->update($update);
    }


    /**
     *更新活动审核人
     */
    public function editUserPayVipInfo($id, $userid, $update)
    {
        return Db('pay_vip')->where('id','=', $id)
            ->where('userid','=', $userid)
            ->update($update);
    }


}