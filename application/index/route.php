<?php
use think\Route;

//首页
Route::rule('/','index/index');


//------------------------------------注册-------------------------------------------------
//获取图形验证码
Route::rule('get_code','Account/getCode');

//验证码检测
Route::rule('check_code','Account/checkVerificationCode');

//注册页面
Route::rule('reg','Account/regIndex');

//注册提交信息
Route::rule('regcheck','Account/register');



//-------------------------------------登录-------------------------------------------------
//登录页面
Route::rule('login','login/loginIndex');

//登录发短信
Route::rule('login/sendSms','login/loginSendPhones');

//登录提交信息
Route::rule('logincheck','login/login');

//退出登录
Route::rule('loginout','login/loginOut');



//---------------------------------------忘记密码-------------------------------------------------
//忘记密码展示页
Route::rule('forget','login/forgetPwdIndex');

//忘记密码-发短信
Route::rule('/forget/sendSms','login/forgetSendSms');

//忘记密码-验证码
Route::rule('/forget/check','login/check1Forget');

//忘记密码/设置新密码
Route::rule('newpwd','login/setPwd');




//-----------------------------信息列表-------------------------------------------------------------
//用户-基本信息页
Route::rule('uc','user/index');

//商家-基本信息页
Route::rule('biz/index','shops/shopIndex');

//用户-活动任务页
Route::rule('act','activity/userAct');

//绑定支付宝页面
Route::rule('uc/bind','user/bindAlipay');

//提交支付宝绑定
Route::rule('uc/alipay','user/submitAlipay');


//用户-绑定淘宝账号页面
Route::rule('uc/bindtb','user/bindTaobao');

//用户-提交淘宝信息
Route::rule('uc/committb','user/submitTaobao');

//用户-我的淘宝信息
Route::rule('uc/myshops','user/myshops');

//商用-支付宝信息
//Route::rule('uc/myali','user/myAlipay');

//商家-我的店铺详情
Route::rule('biz/myshops','shops/myshops');

//商家-添加淘宝店铺页面
Route::rule('biz/addshop','shops/bindTaobao');

//商家-提交添加店铺信息
Route::rule('biz/subshops','shops/addShopsIndex');

//活动展示-列表
Route::rule('/tasks','index/taskIndex');

//活动展示-详情页
Route::rule('/tdetails/:id','index/taskDetails');

//修改密码-页面
Route::rule('/chgpwd','alter/alterPwd');

//修改密码-提交
Route::rule('/savepwd','alter/savePwd');

//公告列表
Route::rule('/notice','notice/index');

//公告-详情页
Route::rule('/notices/:id','notice/noticeDetails');



//-------------------------------充值操作-----------------------------------------
//提现页
Route::rule('ty/tixian$','pay/txIndex');

//提现-发送短信
Route::rule('ty/sendTxSms','pay/sendTxSms');

//商用-提现操作
Route::rule('ty/txcheck$','pay/checkTx');

//商用-充值金额页
Route::rule('ty/czlist$','pay/czMoneyList');

//商用-充值提交信息
Route::rule('ty/recharge$','pay/checkCz');





//---------------------------金额变动记录-----------------------------------------
//财务日志-页面
Route::rule('mydeal$','trade/userFinanceList');



//--------------------------------申请成为VIP---------------------------------------
//商家-申请VIP页面
Route::rule('/biz/forvip','pay/userGetVip');

//商家-提交VIP申请
Route::rule('/biz/checkvip','pay/checkUserVip');



//--------------------------------------商家发布活动-------------------------------------
//商家-活动列表页
Route::rule('biz/actshops','activity/getShopList');

//商家-添加活动页
Route::rule('biz/addact','activity/shopsAddAct');

//商家-提交活动信息
Route::rule('biz/checkact','activity/checkAddAct');

//活动-编辑活动[待付款]
Route::rule('/editact/:type/:id','activity/shopsAddAct');

//活动-保存 编辑活动
Route::rule('save/tasks','activity/saveTaskUser');

//活动-关闭活动
Route::rule('delact/:types/:id','activity/delUserTaksStatus');

//活动-申请结算活动
Route::rule('closact/:types/:id','activity/closingTasksUser');

//活动-输入交易订单号
Route::rule('/tradeno/:id','activity/addTradeNumber');

//活动-提交交易订单号
Route::rule('uc/tjtrade','activity/checkActTradeNo');





//--------------------------商家管理用户活动订单---------------------------------------------
//活动-查看活动详情页面
Route::rule('/task/details/:id','activity/getShopsTasksUserList');

//活动-商家分配资格
Route::rule('/task/allot/:order_id/:user_id/:page','activity/ShopsUserAllotUsers');

//活动-取消资格
Route::rule('/task/unallot/:order_id/:user_id/:page','activity/candelUserOrderStatusInfo');

//活动-驳回资格
Route::rule('/task/reject/:order_id/:user_id/:page','activity/shopsRejectUserStatus');

//活动-通过
Route::rule('/task/pass/:order_id/:user_id/:page','activity/shopsPassUserOrdersInfo');





//--------------------------------------用户申请操作活动----------------------------------------
//用户-申请活动页面
Route::rule('apply/:tid','Task/addUserTask');

//用户-核对活动商品链接
Route::rule('ck/taskurl','Task/checkTaskLink');

//用户-核对活动店铺名称
Route::rule('ck/tasksname','Task/checkTaskLink');

//用户-申请活动请求
Route::rule('applyfor','task/applyTask');

//用户-上传活动截图页面
Route::rule('addreport/:tid','task/putActReport');

//用户-上传活动截图请求
Route::rule('upload/report','task/uploadUserTasks');

//用户-提交试用报告页面
Route::rule('submit/report/:tid','task/userUploadTasksZolIndex');

//用户-提交试用报告请求
Route::rule('upload/zol','task/uploadTaskUserZols');



