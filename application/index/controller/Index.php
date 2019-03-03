<?php
namespace app\index\controller;

use think\Session;
use think\Request;
use think\cache\driver\Redis;
class Index extends Base
{
    /**
     * @return 首页
     */
    public function index()
    {
        $uid = Session::get('USER_KEY_ID');

        //1.分类信息
        $taskModel = new \app\index\model\Task;
        $cateModel = new \app\index\model\Category;
        $focusModel = new \app\index\model\Focus;

        $catKeys = 'getCategoryLisets';
        //$redis = new Redis();
        //$cateList = $redis->get($catKeys);
        //if(empty($cateList))
        //{
        $cateList   =  $cateModel->getCategoryLisets();
            //$redis->set($catKeys, $cateList, 6);
        //}else{
            //echo 'redis ok';return;
        //}

        //2.最新-10个活动
        $str = 'id,product_name, product_logo, product_price';
        $atlist = $taskModel->getTaskTimes($str);
        $this->assign('atList', $atlist);
        //2.最多人-10个活动

        $focusList = $focusModel->getFocusList();

        $this->assign('cateList', $cateList);//分类列表
        $this->assign('focusList', $focusList);//轮播图
        $this->assign('uid', $uid);
        return view('index');
    }


    /**
     * 正在进行活动-列表
     */
    public function taskIndex()
    {
        $data = Request::instance()->param();//接收参数
        $where = [];

        $uid = Session::get('USER_KEY_ID');
        $uModel = new \app\index\model\User;
        if($uid){
            $uInfo = $uModel->getUserInfoNotType($uid,'id,user_type,mobile');
            $this->assign('mobile', $uInfo['mobile']);
            $this->assign('user_type', $uInfo['user_type']);
        }

        //页码
        $page = 1;
        if (!empty($data['page'])) {
            $page = $data['page'];
        }

        if (!empty($data['category_id'])) {
            $where['category_id'] = $data['category_id'];
        }

        $cateModel = new \app\index\model\Category;
        $tModel = new \app\index\model\Task;
        //1.找出所有分类
        $cateList = $cateModel->getCategoryLisets();
        $this->assign('cateList', $cateList);

        //2.找出对应的活动-10条
        $str = 'id,product_name, product_logo, product_price';
        $tList = $tModel->getCategoryTaskTimes($where, $page, $str);
        $this->assign('tList', $tList);
        $this->assign('page', $page);
        return view('list');
    }


    /**
     * 活动详情页面
     */
    public function taskDetails()
    {
        $id = Request::instance()->param('id');//接收参数

        //如果不存在，展示最新的一个活动信息
        $tModel = new \app\index\model\Task;
        if (empty($id)) {
            $info = $tModel->getBegintimeAscInfo();
        } else {
            $info = $tModel->idGetTaskInfo($id);
            if (empty($info)) {
                $this->error('非法请求');
            }
        }

        $this->assign('info', $info);
        return view('task_details');
    }
}
