<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * 替代scan_dir的方法
 * @param string $pattern 检索模式 搜索模式 *.txt,*.doc; (同glog方法)
 * @param int $flags
 * @param $pattern
 * @return array
 */
function up61_scan_dir($pattern, $flags = null)
{
    $files = glob($pattern, $flags);
    if (empty($files)) {
        $files = [];
    } else {
        $files = array_map('basename', $files);
    }

    return $files;
}

/**
 * 密码加密
 * @param $pw
 * @return string
 */
function up_pass($pw){
    $authCode = 'up';
    $result = md5(md5($authCode . $pw));
    return $result;
}

/**
 * 比较密码
 * @param $password
 * @param $passwordInDb
 * @return bool
 */
function compare_password($password, $passwordInDb){
    if (strpos($passwordInDb, "###") === 0) {
        return up61_pass($password) == $passwordInDb;
    }
    return false;
}

/**
 * 生成token值
 * @return string
 */
function generateToken(){
    return md5(uniqid()) . md5(uniqid());
}
/**
 * 获取惟一订单号
 * @return string
 */
function up61_get_order_sn()
{
    return date('Ymd') . substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
}
function saveBase64Img($logo,$path = 'img')
{
    $ret = '';
    preg_match('/^(data:\s*image\/(\w+);base64,)/', $logo, $result);
//    $type = $result [2];
    $type = 'png';

    $path_full = '../upload/'.$path.'/'. date('Ymd');
    $path = $path.'/'. date('Ymd');
    if (!is_dir($path_full)) {
        mkdir(iconv("UTF-8", "GBK", $path_full), 0777, true);
    }

    $imgname = md5(time().rand(1000,9999));

    $new_file = $path_full . '/' . $imgname . "." . $type;

    $a = file_put_contents($new_file, base64_decode(str_replace($result [1], '', $logo)));

    if ($a) {
        return $path. '/' . $imgname . "." . $type;
    }
    return $ret;
}
//图片资源的域名
function img_host($img_url){
    if(preg_match('/\x20*https?\:\/\/.*/i',$img_url)){
        return $img_url;
    }
//    return 'http://'.request()->host().'/upload/'.$img_url;
    return 'http://up61_whale.cn/upload/'.$img_url;
}


//获取客户端IP
function get_client_ip(){
    $headers = ['HTTP_X_REAL_FORWARDED_FOR', 'HTTP_X_FORWARDED_FOR', 'HTTP_CLIENT_IP', 'REMOTE_ADDR'];
    foreach ($headers as $h){
        if(empty($_SERVER[$h])){
            continue;
        }

        $ip = @$_SERVER[$h];
        // 有些ip可能隐匿，即为unknown
        if ( isset($ip) && strcasecmp($ip, 'unknown') ){
            break;
        }
    }
    if($ip){
        // 可能通过多个代理，其中第一个为真实ip地址
        list($ip) = explode(',', $ip, 2);

    }
    return $ip;
}


/**
 * randcode()随机数的生成
 *
 * @param mixed $len
 * @param integer $mode
 * @return
 */
function randcode($len, $mode = 2)
{
    $rcode = '';
    switch ($mode) {
        case 1: //去除0、o、O、l等易混淆字符
            $chars = '23456789abcdefghijkmnpqrstuvwxyz';
            break;
        case 2: //纯数字
            $chars = '0123456789';
            break;
        case 3: //全数字+大小写字母
            $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
            break;
        case 4: //全数字+大小写字母+一些特殊字符
            $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz~!@#$%^&*()';
            break;
    }

    $count = strlen($chars) - 1;
    mt_srand((double)microtime() * 1000000);
    for ($i = 0; $i < $len; $i++) {
        $rcode .= $chars[mt_rand(0, $count)];
    }
    return $rcode;
}


/**
 * @param $str 字符串
 * @param $start 替换字符的开始文字
 * @param $len  替换字符的长度
 * @param $symbol 替换的字符  例如*、#等
 * @return string
 */
function str_replaces($str, $start, $len, $symbol='*')
{
    $end = $start + $len;
    // 截取头保留的字符
    $str1 = mb_substr($str, 0, $start);
    // 截取尾保留的字符
    $str2 = mb_substr($str, $end);

    //  生产要替换的字符
    $symbol_num = '';
    for ($i = 0; $i < $len; $i++) {
        $symbol_num .= $symbol;
    }
    return $str1 . $symbol_num . $str2;
}

/**
 * @param $msg 储存的日志
 * @param string $filename  日志名
 */

function WL($msg,$filename='wl') {
    $t = formatLog($msg);
    $logfile=realpath(LOG_RUNNMING) .DIRECTORY_SEPARATOR. "{$filename}_".date('Y-m-d').".log";
    file_put_contents($logfile, '['.date("Y-m-d H:i:s").'] -- ['.getmypid().']'.$t .PHP_EOL, FILE_APPEND);
}

/**
 * @param $arr
 * @return false|string数组转成json格式
 */
function formatLog($arr)
{
    if (is_array($arr)) {
        return json_encode($arr, JSON_UNESCAPED_UNICODE);
    } elseif (is_object($arr)) {
        return serialize($arr);
    } else {
        return $arr;
    }
}



/**
 * 商家等级 - 根据VIP等级，可输入关键词量
 */
function shopsLabelNum($vips, $str)
{
        $string = '';
        $arr = explode(',', $str);
        switch ($vips){
            case 1:
                    if (count($arr) <= 5){
                        $string = $str;
                    }else{
                        $string = array_slice($arr, 0, 4);
                        $string = implode(',', $string);
                    }
                    return $string;
                break;

            case 2:
                if (count($arr) <= 7){
                    $string = $str;
                }else{
                    $string = array_slice($arr, 0, 6);
                    $string = implode(',', $string);
                }

                return $string;
                break;

            case 3:
                if (count($arr) <= 10){
                    $string = $str;
                }else{
                    $string = array_slice($arr, 0, 9);
                    $string = implode(',', $string);
                }
                return $string;
                break;
        }
}


/**
 * 发短信
 */
function sandPhone($phone,$code, $str)
{
     Vendor('ChuanglanSmsApi');
    $sms = new \ChuanglanSmsApi();
    $result = $sms->sendSMS($phone,'【253云通讯】'.$str.$code);
    $output=json_decode($result,true);
    return $output;

}

/**
 * 短信内容
 */
function sendMsgCopy($type)
{
    switch ($type){
        case 'reg':
            return '您正在注册小鱼试用，验证码：';
            break;

        case 'login':
            return '您正在登录小鱼试用，验证码：';
            break;

        case 'forget':
            return '您正在小鱼试用找回密码，验证码：';
            break;

        case 'tx':
            return '您正在小鱼试用进行提现，验证码：';
            break;

        default:
            return false;
            break;
    }
}


/**
 * 通过CURL发送HTTP请求
 * @param string $url //请求URL
 * @param array $postFields //请求参数
 * @return mixed
 */
function curlPost($url, $postFields)
{
    $postFields = http_build_query($postFields);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}


/**
 * 处理返回值
 *
 */
function execResult($result)
{
    $result = preg_split("/[,\r\n]/", $result);
    return $result;
}


function chuanglan_status($num)
{
    switch ($num) {
        case 0;
            $name = "短消息发送成功";
            break;
        case 101;
            $name = "无此用户";
            break;
        case 102;
            $name = "密码错";
            break;
        case 103;
            $name = "提交过快(提交速度超过流速限制)";
            break;
        case 104;
            $name = "系统忙（因平台侧原因，暂时无法处理提交的短信）";
            break;
        case 105;
            $name = "敏感短信（短信内容包含敏感词）";
            break;
        case 106;
            $name = "消息长度错（>536或<=0）";
            break;
        case 107;
            $name = "包含错误的手机号码";
            break;
        case 108;
            $name = "手机号码个数错（群发>50000或<=0;单发>200或<=0）";
            break;
        case 109:
            $name = "无发送额度（该用户可用短信数已使用完）";
            break;
        case 110:
            $name = "不在发送时间内";
            break;
        case 111:
            $name = "超出该账户当月发送额度限制";
            break;
        case 112:
            $name = "无此产品，用户没有订购该产品";
            break;
        case 113:
            $name = "extno格式错（非数字或者长度不对)";
            break;
        case 115:
            $name = "自动审核驳回";
            break;
        case 116:
            $name = "签名不合法，未带签名（用户必须带签名的前提下）";
            break;
        case 117:
            $name = "IP地址认证错,请求调用的IP地址不是系统登记的IP地址";
            break;
        case 118:
            $name = "用户没有相应的发送权限";
            break;
        case 119:
            $name = "用户已过期";
            break;
        case 120:
            $name = "短信内容不在白名单中";
            break;
        case 121:
            $name = "您已经超出短信发送次数限制";
            break;
        default:
            $name = "系统错误，请及时联系管理员";
            break;
    }
    return $name;
}


/**
 * @param $mobile
 * @return bool手机号
 */
function checkMobile($mobile)
{
    return true;
    if (!is_numeric($mobile)) {
        return false;
    }
    //return preg_match('#^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$#', $mobile) ? true : false;
    return preg_match('#^1[3|4|5|8|7|9]\d{9}$#', trim($mobile)) ? true : false;
}






