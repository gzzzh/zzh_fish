<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/2/18
 * Time: 19:16
 */

namespace app\common\facade;

use think\Facade;
class Log extends Facade
{

    protected static function getFacadeClass()
    {
        return 'app\common\library\Log';
    }

}