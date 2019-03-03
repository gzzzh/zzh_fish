<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/10
 * Time: 18:23
 */

namespace app\common\help;


class Format
{
    //1.手机号码检测
    public static function isMobile($mobile = '')
    {
        if (!is_numeric($mobile)) {
            return false;
        }
        return preg_match('/(^(13\d|15[^4\D]|17[13678]|18\d)\d{8}|170[^346\D]\d{7})$/', $mobile) ? true : false;
    }
}