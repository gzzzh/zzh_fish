<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/2/18
 * Time: 14:30
 */

namespace app\admin\controller;

use think\Request;
use think\Session;
use think\Db;
use think\Log;
class Actscript extends Base
{
    /**
     * 12小时内未上传订单，就取消资格，重新抽取资格
     */
    public function userTimeUnfinishedAct()
    {
        WL('开始关闭12小时中奖超时订单','timing_act');
        $tModel = new \app\admin\model\Task;
        $oModel = new \app\admin\model\Order;
        $tindexModel = new \app\index\model\Task;
        $uindexModel = new \app\index\model\User;

        //1.找出过期活动订单|中奖时间 < 当前时间 超24小时的活动订单
        $str = 'id, user_id, goods_id, status, winning_time,is_serve';
        $olist = $oModel->userOrderUndone($str);

        if(!empty($olist)){
            //关闭活动订单，根据活动状态操作
            foreach($olist as $values)
            {
                //1.先关闭，再抽
                Db::startTrans();
                $where = [
                    'id' => $values['id'],
                    'user_id' => $values['user_id'],
                    'status' => $values['status'],
                ];
                $updata = ['status' => -1];

                //关闭订单
                $res = $oModel->closeUserOrders($where, $updata);
                if(empty($res)){
                    //关闭订单失败，系统错误
                    Db::rollback();
                    WL('error:活动订单'.$values['id'].'关闭订单失败','timing_act');
                    continue;
                }

                //找出活动信息，根据活动状态进行不同的操作
                $str = 'id, userid, product_price, status, is_serve';
                $tInfo = $tModel->getActDetails($values['goods_id'], $str);
                if(!empty($tInfo)){
                    //3、7活动进行中,加回次数
                    if (in_array($tInfo['status'], [3,7])){
                        //加回活动剩余次数、增值服务
                        $taskWhere = [
                            'id' => $tInfo['id'],
                            'userid' => $tInfo['userid'],
                        ];
                        $res = $tindexModel->updateAddTaskLastNumOne($taskWhere,'last_num');
                        if(empty($res)){
                            Db::rollback();
                            WL('error:'.'error:活动订单'.$values['id'].'增加活动次数失败','timing_act');
                            continue;
                        }

                        //存在增值服务，加回活动中
                        if($tInfo['is_serve'] == 2 && $values['is_serve'] > 0){
                            //判断类型
                            $serveStr = '';
                            switch ($values['is_serve']){
                                case 1:
                                    $serveStr = 'user_chat';
                                    break;

                                case 2:
                                    $serveStr = 'user_ask';
                                    break;

                                case 3:
                                    $serveStr = 'user_photo';
                                    break;

                                case 4:
                                    $serveStr = 'add_photo';
                                    break;

                                case 5:
                                    $serveStr = 'add_cooent';
                                    break;

                                default:
                                    WL('error:活动订单'.$values['id'].'增值类型错误!!!','timing_act');
                                    break;
                            }
                            //判断类型
                            if($serveStr == ''){
                                Db::rollback();
                                WL('error:活动订单'.$values['id'].'增值类型不存在','timing_act');
                                continue;
                            }

                            //加回增值次数
                            $res = $tindexModel->updateAddTaskLastNumOne($taskWhere, $serveStr);
                            if(empty($res)){
                                Db::rollback();
                                //$this->error('增加活动增值次数失败，请求错误');
                                WL('error:活动订单'.$values['id'].'增加活动增值次数失败，请求错误','timing_act');
                                continue;
                            }
                        }

                        //成功
                        Db::commit();
                        WL('success:活动订单'.$values['id'].'失效成功','timing_act');

                    }elseif($tInfo['status'] == 4){
                        //返回活动单价到商家余额
                        $res = $uindexModel->addUserOrderMoney($tInfo['userid'], $tInfo['product_price']);
                        if(empty($res)){
                            Db::rollback();
                            WL("error:订单id:{$values['id']}，活动已完成，商家返款失败",'timing_act');
                            continue;
                        }else{
                            //增加财务日志


                            //返款成功
                            Db::commit();
                            WL('success:活动订单'.$values['id'].'活动已完成，返款完成','timing_act');
                        }
                    } else{
                        Db::commit();
                        WL("error:订单id:{$values['id']} 关闭，活动状态异常，只关闭活动订单",'timing_act');
                    }
                }
            }
        }else{
            WL('success:'.'暂无超时的活动订单~','timing_act');
        }

    }



    /**
     * VIP-定时检测到期
     */
    public function userVipIfExpireList()
    {
        //找出商家 + 开通VIP + 今天到期时间
        $str = 'id, user_type, is_vip, vip_time';
        $uModel = new \app\admin\model\User;
        $list = $uModel->getUserDetailWhereLists($str);
        $list = $list ? $list : [];

        //循环，关闭VIP权限
        foreach ($list as $vals)
        {
            //关闭VIP
            $res = $uModel->editUserStatus($vals['id'], ['is_vip' => 0]);
            if(empty($res)){
                WL(['error','关闭商家VIP失败', $vals['id']],'close_vip');
            }else{
                WL(['success','关闭商家VIP成功', $vals['id']],'close_vip');
            }
        }

        WL(['success','完成关闭VIP操作'],'close_vip');
    }



    /**
     * 用户提交试用报告，超过两天自动通过审核
     */
    public function twoDaysUserAutoBypass()
    {
        WL('商家未审核，自动通过审核启动','two_days');
        $tModel = new \app\admin\model\Task;
        $oModel = new \app\admin\model\Order;
        $uModel = new \app\index\model\User;
        $fModel = new \app\admin\model\Finance;

        //1.找出所有超过两天未审核的试用报告
        $str = 'id, user_id, goods_id, status, up_comment_time';
        $list = $oModel->getUserOrderTwodaysList($str);

        if(!empty($list)){
            //循环-进行通过，返款
            foreach ($list as $vals){
                Db::startTrans();
                //1.修改状态
                $where = [
                    'id' => $vals['id'],
                    'status' => 8,
                ];

                $res = $oModel->selectTaskOrderAwardUser($where, ['status' => 7, 'comment_time' => date('Y-m-d H:i:s')]);
                if(empty($res)){
                    Db::rollback();
                    WL('Warning:活动订单：'.$vals['id'].'，试用报告通过失败','two_days');
                    continue;
                }else{
                    //2.查看活动状态
                    $tInfo = $tModel->getActDetails($vals['goods_id'],'id,product_name,status,product_price,last_num');
                    if(empty($tInfo)){
                        Db::rollback();
                        WL('Warning:活动订单：'.$vals['id'].'，活动不存在','two_days');
                        continue;
                    }else{
                        //判断活动状态
                        if(!in_array($tInfo['status'], [3,4,7])){
                            Db::rollback();
                            WL('Warning: 活动：'.$tInfo['id'].'，活动未开始或者已失效，无法通过审核','two_days');
                            continue;
                        }else{
                            //3.剩余次数
                            if($tInfo['last_num'] <= 0){
                                Db::rollback();
                                WL('Warning: 活动：'.$tInfo['id'].'，活动剩余次数为0!!!','two_days');
                                continue;
                            }

                            //4.是否第一次完成活动,返款
                            $res = $uModel->saveLogin($vals['user_id'], ['if_task' => 1]);

                            //给用户账号加钱
                            $res = $uModel->addUserOrderMoney($vals['user_id'], $tInfo['product_price']);
                            if(empty($res)){
                                Db::rollback();
                                WL('Warning: 活动订单：'.$vals['id'].'，用户返款失败','two_days');
                                continue;
                            }else{
                                //增加财务日志
                                $finAdd = [
                                    'uid' => $vals['user_id'],
                                    'money' => $tInfo['product_price'],
                                    'name' => '活动返款',
                                    'details' => '活动：‘'.$tInfo['product_name'].'’完成，返款成功',
                                    'types' => '1'
                                ];
                                $res = $fModel->addFinances($finAdd);
                                if(empty($res)){
                                    Db::rollback();
                                    //$this->error('添加财务日志失败，系统错误');
                                    WL('Warning: 活动订单：'.$vals['id'].'，添加财务日志失败','two_days');
                                    continue;
                                }else{
                                    Db::commit();
                                    //$this->error('添加财务日志失败，系统错误');
                                    WL('success: 活动订单：'.$vals['id'].'，自动审核通过，ok','two_days');
                                }


                            }
                        }
                    }
                }
            }
        }else{
            WL('试用报告超过两天自动通过，暂无数据','two_days');
        }

    }
}