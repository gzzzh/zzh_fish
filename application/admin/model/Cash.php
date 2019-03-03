<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/7
 * Time: 16:03
 */

namespace app\admin\model;

use think\Db;
use think\Model;
class Cash extends Model
{
    protected $table = 'xzb_cash';


    /**
     * 提现列表
     */
    public function getTxUserList($where, $field='*'){
        return Db('cash')->where($where)->field($field)
            ->alias('c')
            ->join('xzb_user u','c.userid = u.id')
            ->order('inputtime asc')
            ->paginate(10);
    }


    /**
     * 找出某个数据
     */
    public function getTxInfoUser($where, $field='*')
    {
        return Db('cash')->where($where)->field($field)->find();
    }

    /**
     * 更新用户充值状态
     */
    public function editUserCzStatus($id, $uid, $data)
    {
        return Db('cash')->where('id','=',$id)
            ->where('userid','=', $uid)
            ->update($data);

    }
}