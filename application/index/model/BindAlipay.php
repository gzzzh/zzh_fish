<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/21
 * Time: 14:58
 */

namespace app\index\model;
use think\Db;
use think\Model;

class BindAlipay extends Model
{
        protected $table = 'xzb_bind_alipay';


        /**
         * 用户-支付宝最新审核状态
         */
        public function getUserBindAlipay($uid, $field = '*')
        {
            return Db('bind_alipay')->where('userid', '=', $uid)->field($field)->order('add_time desc')->value('status');
        }


        /**
         * 添加用户支付宝信息
         */
        public function addUserInfo($data)
        {
            return Db('bind_alipay')->insertGetId($data);
        }


    /**
     *认证通过的支付宝信息
     */
    public function getUserAlipayInfos($where, $field = '*')
    {
        return Db('bind_alipay')->where($where)
            ->field($field)->order('add_time desc')->find();
    }
}