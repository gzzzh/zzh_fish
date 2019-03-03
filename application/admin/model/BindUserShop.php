<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/24
 * Time: 16:50
 */

namespace app\admin\model;

use think\Model;
use think\Db;
class BindUserShop extends Model
{
    protected $table = 'xzb_bind_user_shop';

    /**
     * 获取用户信息
     */
    public function getUserAudit($where = [], $field = '*')
    {
        return Db::name('bind_user_shop')
            ->field($field)
            ->order('status asc')
            ->paginate(8);
    }

    /**
     * 通过审核
     */
    public function userAuditPass($id, $data)
    {
        return Db::name('bind_user_shop')
            ->where('id','=',$id)
            ->where('status','=','1')
            ->update($data);
    }


    /**
     * 更新用户淘宝信息
     */
    public function updateUserShops($id, $data)
    {
        return Db::name('bind_user_shop')
            ->where('id','=',$id)
            ->update($data);
    }
}