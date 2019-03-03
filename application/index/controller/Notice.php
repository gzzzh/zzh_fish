<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/22
 * Time: 0:10
 */

namespace app\index\controller;

use think\Request;
use think\Session;
use app\common\help\Format;
class Notice extends Base
{
    /**
     * 公告列表
     */
    public function index()
    {
        $nModel = new \app\index\model\Notice;
        //接收参数
        $page = Request::instance()->param('page');
        if(empty($page)){
            $page = 1;
        }

        $list = $nModel->getNoticeList($page, 'id,title,publish_time');
        //公告总数，总页数
        $counts = $nModel->getNoticeCountsPage();

        $this->assign('page', $page);
        $this->assign('list', $list);
        $this->assign('cNumber', $counts['cNumber']);
        $this->assign('cPage', $counts['cPage']);
        return View('index');
    }


    /**
     * 公告-详情页
     */
    public function noticeDetails()
    {
        $id = Request::instance()->param('id');
        if(empty($id)){
            $this->error('请传递参数');
        }

        //查找数据
        $nModel = new \app\index\model\Notice;
        $info = $nModel->getNoticeDetails($id);
        if(empty($info))
        {
            $this->error('非法操作');
        }

        $this->assign('info', $info);
        return view('details');
    }
}