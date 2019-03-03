<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/23
 * Time: 15:01
 */

namespace app\admin\controller;


class Index extends Admin
{
    public function _initialize(){
        parent::_initialize();
    }

    /**
     * 首页
     */
    public function index()
    {
        return view('index');
    }


    /**
     * 上传图片
     */
    public function uploadImgs()
    {
        $data = [];
        $data['imgFile'] = request()->file('imgFile');

        //数据监测
        $validate = new \app\admin\validate\notice;
        if (!$validate->scene('checkUpload')->check($data))
        {
            return json_encode(['error' => 1,'url' => $validate->getError()]);
        }

        //图片存在，就上传
        if(!empty($data['imgFile'])){
            //开始上传图片
            $accInfo = $data['imgFile']->move(ROOT_PATH . 'public' . DS . 'upload'. DS.'notice');
            if($accInfo){
                // 成功上传后 获取上传信息
                $data['imgFile'] = '/upload/notice/'.$accInfo->getSaveName();
                return json_encode(['error' => 0,'url' =>$data['imgFile']]);
            }else{
                // 上传失败获取错误信息
                return json_encode(['error' => 1,'url' =>$data['imgFile']->getError()]);
            }
        }
    }
}