<?php
/**
 * Created by PhpStorm.
 * User: [一秋]
 * Date: 2018/3/29
 * Time: 10:39
 * Desc: 成功源于点滴
 */

namespace app\index\model;
use think\Model;
use think\Db;
class Task extends Model
{
    protected $table ='xzb_task';

    protected $type = [
        'more' => 'array',
    ];
    protected $autoWriteTimestamp = 'datetime';
    protected $updateTime = false;

    public function addTask($data){
        $data['more'] = [
            'product_img'=>$data['product_img'],
            'first_img'=>$data['first_img'],
            'second_img'=>$data['second_img'],
        ];
        $data['order_no'] = up61_get_order_sn();
        $data['last_num'] = $data['num'];

        unset($data['product_img']);
        unset($data['first_img']);
        unset($data['second_img']);
        $this->allowField(true)->isUpdate(false)->data($data,true)->save($data);
        return $this;
    }


    /**
     * 商家-活动列表
     */
    public function getShopsList($uid, $page, $field='*')
    {
        $num = 8;
        $key = ($page - 1) * $num;

        $list = Db('task')
            ->where('userid','=',$uid)
            ->order('create_time desc')
            ->field($field)
            ->limit($key, $num)
            ->select();

        if($list && !is_array($list)){
            $list = $list->toArray();
        }
        return $list;
    }


    /**
 * 正在进行-最新活动
 */
    public function getTaskTimes($field = '*')
    {
        $list = Db('task')
            ->where('status','=',3)
            ->field($field)
            ->order('begin_time asc')
            ->limit(10)
            ->select();

        //找出每个活动人数
        foreach ($list as $key => $val){
            $list[$key]['user_counts'] = Db('order')->where('goods_id','=',$val['id'])->count('*');
        }
        return $list;
    }


    /**
     * 分类-最新活动
     */
    public function getCategoryTaskTimes($where = '',$page = 1, $field = '*')
    {
        $num = 8;
        $key = ($page - 1) * $num;
        if(!empty($where)){
            $list = Db('task')
                ->where('status','=',3)
                ->where($where)
                ->field($field)
                ->order('begin_time asc')
                ->limit($key, $num)
                ->select();
        }else{
            $list = Db('task')
                ->where('status','=',3)
                ->field($field)
                ->order('begin_time asc')
                ->limit($key, $num)
                ->select();
        }


        //找出每个活动人数
        foreach ($list as $key => $val){
            $list[$key]['user_counts'] = Db('order')->where('goods_id','=',$val['id'])->count('*');
        }
        return $list;
    }


    /**
     * 找最近的一个活动
     */
    public function getBegintimeAscInfo($field = '*')
    {
        $info = Db('task')
            ->where('status','=',3)
            ->field($field)
            ->order('begin_time asc')
            ->find();

        //找出活动人数
        $info['user_counts'] = Db('order')->where('goods_id','=',$info['id'])->count('*');
        return $info;
    }

    /**
     * 找出对应获得信息
     */
    public function idGetTaskInfo($id, $field = '*')
    {
        $info = Db('task')
            ->where('status','=',3)
            ->where('id','=', $id)
            ->field($field)
            ->order('begin_time asc')
            ->find();

        //找出活动人数
        if($info){
            $info['user_counts'] = Db('order')->where('goods_id','=',$info['id'])->count('*');
        }
        return $info;
    }



    /**
     * 根据条件-找出对应的活动信息
     */
    public function whereGetInfoAct($where, $field = '*')
    {
        $info = Db('task')
            ->where($where)
            ->field($field)
            ->find();
        return $info;
    }


    /**
     * 更新订单号以及状态
     */
    public function updateTradeNoAndStatus($where, $update)
    {
        return Db('task')->where($where)->update($update);
    }


    /**
     * 活动总量
     */
    public function getUserTaskCounts($uid)
    {
        $count = Db('task')->where('userid','=', $uid)->count('*');
        $pageCount = ceil($count / 8);

        return ['counts' => $count, 'pageCount' => $pageCount];
    }


    /**
     *活动-进行中 -1
     */
    public function updateTaskLastNumReduceOne($where, $field)
    {
        $res = Db('task')->where($where)
            ->where('status','in','3,7')->setDec($field);
        return $res;
    }


    /**
     *活动-进行中 +1
     */
    public function updateAddTaskLastNumOne($where, $field)
    {
        $res = Db('task')->where($where)
            ->where('status','in','3,7')->setInc($field);
        return $res;
    }


    /**
     * 商家活动-某个类型活动总数量
     */
    public function taskTypeCountNumbers($uid)
    {
        $data = [];
        //1=待付款 2=(付款)待审核 3=(付款)进行中 4=已完成 5=驳回 6=失效 7=结算活动
        $dfkNum = Db('task')->where('userid','=', $uid)
            ->where('status','=','1')->count('*');
        $data['dfkNum'] = $dfkNum ? $dfkNum : 0;

        $dshNum = Db('task')->where('userid','=', $uid)
            ->where('status','=','2')->count('*');
        $data['dshNum'] = $dshNum ? $dshNum : 0;

        $jxzNum = Db('task')->where('userid','=', $uid)
            ->where('status','=','3')->count('*');
        $data['jxzNum'] = $jxzNum ? $jxzNum : 0;

        $ywcNum = Db('task')->where('userid','=', $uid)
            ->where('status','=','4')->count('*');
        $data['ywcNum'] = $ywcNum ? $ywcNum : 0;

        $bhNum = Db('task')->where('userid','=', $uid)
            ->where('status','=','5')->count('*');
        $data['bhNum'] = $bhNum ? $bhNum : 0;

        $jsNum = Db('task')->where('userid','=', $uid)
            ->where('status','=','7')->count('*');
        $data['jsNum'] = $jsNum ? $jsNum : 0;

        return $data;
    }


}