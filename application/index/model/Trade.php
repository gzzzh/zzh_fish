<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/21
 * Time: 14:13
 */

namespace app\index\model;

use think\Model;
class Trade extends Model
{
    protected $table = 'xzb_trade';


    /**
     * 用户金额交易记录
     */
    public function getUserTradeList($userid, $field = '*')
    {
        $list = Db('trade')->where('userid', '=', $userid)->field($field)->select();
        if($list && !is_array($list)){
            $list = $list->toArray();
        }
        return $list;
    }
}