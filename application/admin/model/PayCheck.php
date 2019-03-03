<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/4
 * Time: 20:18
 */

namespace app\admin\model;

use think\Db;
use think\Model;
class PayCheck extends Model
{
    protected $table = 'xzb_pay_check';

    /**
     * 充值列表
     */
    public function getUserPayList($where = '', $field='*')
    {
        return Db('pay_check')->where($where)->field($field)->order('add_time desc')->paginate(10);
    }


    /**
     * 查看某一条数据
     */
    public function lookUserCzInfo($where, $field = '*')
    {
        return Db('pay_check')->where($where)->field($field)->find();

    }

    /**
     * 更新用户充值状态
     */
    public function editUserCzStatus($id, $uid, $data)
    {
        return Db('pay_check')->where('id','=',$id)
            ->where('userid','=', $uid)
            ->update($data);

    }
}