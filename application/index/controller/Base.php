<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/20
 * Time: 14:06
 */

namespace app\index\controller;
use think\Controller;
use think\Request;
use think\exception\HttpResponseException;
use think\Response;
use think\Session;


class Base extends Controller
{
    protected $redis;
    public function __construct(Request $request = null)
    {
        parent::__construct($request);

       $this->getUsersMobileAndType();
    }


    /**
     * 返回用户手机号和用户类型
     */
    public function getUsersMobileAndType()
    {
        $uid = Session::get('USER_KEY_ID');
        if($uid){
            $uModel = new \app\index\model\User;
            $uInfo = $uModel->getUserInfoNotType($uid,'id,user_type,mobile');
            $this->assign('mobile', $uInfo['mobile']);
            $this->assign('user_type', $uInfo['user_type']);
        }
    }

    /**
     * ajax返回
     */
    public function retMsg1($data)
    {
    }


    /**
     * jajx返回
     * @param string $msg
     * @param array $data
     * @param array $header
     */
    public function retMsg($data, array $header = [])
    {
        //数组转json
        if(is_array($data)){
            $data = json_encode($data);
        }

        $type                                   = $this->getResponseType();
        $header['Access-Control-Allow-Origin']  = '*';
        $header['Access-Control-Allow-Headers'] = 'X-Requested-With,Content-Type,token';
        $header['Access-Control-Allow-Headers'] = 'X-Requested-With,Content-Type';
        $header['Access-Control-Allow-Methods'] = 'GET,POST,PATCH,PUT,DELETE,OPTIONS';
        $response                               = Response::create($data, $type)->header($header);

        throw new HttpResponseException($response);
    }


    /**
     * 获取当前登录用户的id
     * @return int
     */
    public function getUserId()
    {
        if (empty($this->userId)) {
            $this->error(['code' => 10001, 'msg' => '用户未登录']);
        }
        return $this->userId;
    }


    /**
     * 生成自己的邀请码
     */
    public function proVcode()
    {
        $invitation = randcode(6, 1);

        //判断是否重复
        $uModel = new \app\index\model\User();
        $res = $uModel->getAgent($invitation);
        if ($res) {
            $invitation = $this->proVcode();
        }
        return $invitation;
    }

    /**
     * 发送手机验证码
     */
    public function sendPhoneSms($mobile, $type)
    {
        //1.短信内容
        $str = sendMsgCopy($type);
        if(empty($str)){
            return ['code' => 1, 'errorMsg'=> '短信类型有误'];
        }

        $code = rand(100000, 999999);
        //2.创建验证码
        $res = sandPhone($mobile,$code, $str);
        if($res['code'] == 0){
            WL('手机号'.$mobile.'登录'.$code,'login_sms');
           //成功,保存session
            Session::set('phone_'.$type, $mobile);
            Session::set('vcode_'.$type, $code);

            //$this->retMsg(['code' => 0, 'msg' => '发送成功']);
            return $res;
        }else{
           //失败,返回报错
            //$this->retMsg(['code' => 1, 'msg' => '发送失败:'.$res['errorMsg']]);
            return $res;
        }
    }

}