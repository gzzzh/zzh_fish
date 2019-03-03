<?php
/**
 * Created by PhpStorm.
 * User: [一秋]
 * Date: 2018/3/29
 * Time: 11:55
 * Desc: 成功源于点滴
 */

namespace app\index\model;


use think\Model;

class ApplyTask extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    public function applyTask($data){

        $data['status'] = 0;
        $this->allowField(true)->isUpdate(false)->save($data);
        return $this;
    }
}