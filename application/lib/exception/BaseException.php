<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2017/5/11
 * Time: 09:01
 */

namespace app\lib\exception;
use think\Exception;

class BaseException extends Exception
{
    //HTTP 状态码 400 200
    public $code = 400;
    public $msg = '参数错误';
    public function __construct($param = [])
    {
       if(!is_array($param)){
           return ;
       }else{

           if(array_key_exists('code',$param)){
               $this->code = $param['code'];
           }
           if(array_key_exists('msg',$param)){
               $this->msg = $param['msg'];
           }

       }
    }

}