<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/23
 * Time: 15:40
 */

namespace app\admin\model;

use think\Model;
class Admin extends Model
{
    protected $table = 'xzb_admin';

    /**
     * name找管理员信息
     */
    public function getAdminInfo($name, $field = '*')
    {
        return Db('admin')->where('name','=',$name)->field($field)->find();
    }

    /**
     * 更新管理员信息
     */
    public function updateAdminInfo($id, $data){
        return Db('admin')->where('id','=',$id)->update($data);
    }
}