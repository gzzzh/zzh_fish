<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/21
 * Time: 14:05
 */

namespace app\index\controller;
use think\Request;

class Trade extends HomeBaseController
{

    public function _initialize()
    {
        parent::_initialize();
    }


    /**
     * 用户交易记录
     */
    public function userFinanceList()
    {

        $uid = $this->userId;

        //接收页码
        $nPage = Request::instance()->param('page');
        $page = 1;
        if(!empty($nPage)){
            $page = (intval($nPage) > 0) ? intval($nPage) : 1;
        }

        //列表
        $fModel = new \app\index\model\Finance;
        $list = $fModel->getFinList($uid, $page);

        //总数据
        $cFinance = $fModel->countPageUserFin($uid);

        $this->assign('list', $list);
        $this->assign('cNumber', $cFinance['cNumber']);
        $this->assign('cPage', $cFinance['cPage']);
        $this->assign('page', $page);
        return view('user_trade');

    }
}
