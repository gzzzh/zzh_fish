<?php
/**
 * Created by PhpStorm.
 * User: [一秋]
 * Date: 2018/3/29
 * Time: 9:57
 * Desc: 成功源于点滴
 */

namespace app\index\controller;

class UserBaseController extends HomeBaseController
{

    public function _initialize()
    {
        if (empty($this->user)) {
            $this->error(['code' => 10001, 'msg' => '登录已失效!']);
        }
    }
}
