<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/3
 * Time: 14:38
 */

namespace app\admin\model;

use think\Model;
use think\Db;
class Task extends Model
{
    protected $table = 'xzb_task';

    /**
     * 活动审核列表
     */
    public function getTaskList($data = '')
    {
        if(!empty($data)){
            return Db('task')->where($data)->order('create_time asc')->paginate(8);

        }else{
            return Db('task')->order('create_time asc')->paginate(8);
        }

    }


    /**
     * 活动详情
     */
    public function getActDetails($id,$field = '*'){
        return Db('task')->where('id','=',$id)
            ->field($field)->find();
    }


    /**
     * 审核更新状态
     */
    public function actAuditPass($id, $data)
    {
        return Db('task')->where('id','=', $id)
            ->where('status','=','2')
            ->update($data);
    }


    /**
     * 找出-执行中的活动数据
     */
    public function getUnderwayTaskList($field = '*')
    {
        $date = date('Y-m-d');

        //活动进行中，开始时间 >= 当前时间
        $list = Db('task')->where(['status' => 3])
            ->where('begin_time','egt', $date)
            ->field($field)
            ->select();
        return $list;
    }


    /**
     * 活动-查看通过的订单号是否用过
     */
    public function selTaskTreadeNoIf($id, $trade_no)
    {
        return Db('task')->where('id','neq', $id)
            ->where('trade_no','=',$trade_no)
            ->where('status','in','3,4,7')
            ->count('*');
    }


    /**
     * 结算活动-改状态
     */
    public function closeUserTasksInfo($where, $update)
    {
        return Db('task')->where($where)
            ->update($update);
    }
}