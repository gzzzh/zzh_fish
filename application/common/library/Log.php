<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/2/18
 * Time: 19:14
 */

namespace app\common\library;


/**
 * Log 类
 * @author 刘健 <coder.liu@qq.com>
 */
class Log
{

    // 日志目录
    protected $dir = '';

    // 是否为 WIN 操作系统
    protected $isWin;

    // 构造方法
    public function __construct()
    {
        /*$this->isWin = substr(PHP_OS, 0, 3) === 'WIN' ? true : false;
        if ($this->isWin) {
            $this->dir = 'C:/Windows/Temp/';
        } else {
            $this->dir = '/data_log/' . gethostname() . '/';
        }*/
        $this->dir = APP_PATH.'logs/';
    }

    // 写入日志
    public function write($file, $message)
    {
        $file = "{$this->dir}{$file}_" . date('Ymd') . '.log';
        $format = "[ %s ] %s";
        if (is_array($message) || is_object($message)) {
            $message = json_encode($message);
        }
        $message = sprintf($format, date('Y-m-d H:s:i'), $message);
        file_put_contents($file, $message . PHP_EOL, FILE_APPEND);
    }

}