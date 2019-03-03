<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/25
 * Time: 12:39
 */

namespace app\admin\model;

use think\Model;
use think\Db;
class BindAlipay extends Model
{
    protected $table = 'xzb_bind_alipay';

    /**
     * 支付宝审核列表
     */
    public function UserAlipayList($field = '*')
    {
        $list = Db::name('bind_alipay')
            ->field($field)
            ->order('status asc')
            ->paginate(8);
        return $list;
    }

    /**
     * 支付宝审核
     */
    public function alipayAuditPass($uid, $data)
    {
        return Db::name('bind_alipay')->where('id','=',$uid)->update($data);
    }

}