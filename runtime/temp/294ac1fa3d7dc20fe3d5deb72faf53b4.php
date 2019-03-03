<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:89:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/index\view\pay\cz_money.html";i:1551008083;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\header.html";i:1548216744;s:92:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\base_message_title.html";i:1548216741;s:82:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\nav_menu.html";i:1548216745;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\footer.html";i:1548216744;}*/ ?>
<html lang="en">
	<head lang="en">
		<meta charset="UTF-8">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="baidu-site-verification" content="35XSiAGfTZ">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
		<title></title>
		<link rel="shortcut icon" href="<?php echo INDEX_STYLE; ?>img/merchants/logo_icn.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="<?php echo INDEX_STYLE; ?>css/reset.css">
		<link rel="stylesheet" type="text/css" href="<?php echo INDEX_STYLE; ?>css/animate.css">
		<link rel="stylesheet" type="text/css" href="<?php echo INDEX_STYLE; ?>css/add-page.css">
		<link rel="stylesheet" type="text/css" href="<?php echo INDEX_STYLE; ?>/css/public_module/web_pop.css">
		<link rel="stylesheet" type="text/css" href="<?php echo INDEX_STYLE; ?>css/web_index.css">
		<link rel="stylesheet" type="text/css" href="<?php echo INDEX_STYLE; ?>css/button.css">
		<link rel="stylesheet" type="text/css" href="<?php echo INDEX_STYLE; ?>css/web_index.css">
		<link rel="stylesheet" type="text/css" href="<?php echo INDEX_STYLE; ?>css/button.css">
		<link rel="stylesheet" href="<?php echo INDEX_STYLE; ?>layer/skin/default/layer.css"> 
		<link rel="stylesheet" href="<?php echo INDEX_STYLE; ?>css/public_module/web_top.css">
		<link rel="stylesheet" type="text/css" href="<?php echo INDEX_STYLE; ?>css/business.css">
		<!--<link rel="stylesheet" type="text/css" href="<?php echo INDEX_STYLE; ?>css/main.css">-->
		<script type="text/javascript" charset="utf-8" src="<?php echo INDEX_STYLE; ?>js/jquery.min.js"></script>
	  <script type="text/javascript" charset="UTF-8" src="<?php echo INDEX_STYLE; ?>js/jquery.form.js"></script>
	  <script type="text/javascript" charset="utf-8" src="<?php echo INDEX_STYLE; ?>layer/layer.js"></script>
<link rel="stylesheet" href="<?php echo INDEX_STYLE; ?>css/userJ.css" /> </head>
<body> <header style="background: #ffffff;">
		<div class="main clearfix">
			<h1 class="laqu_logo">
				<a href="/index">
					<img src="<?php echo INDEX_STYLE; ?>/img/home/laqu_logo.png" alt="图片加载失败" style="margin-top: -40px;"> </a>
			</h1>
			<span class="background_name">
				<a href="/user-index" style="color:#666666;">用户管理中心</a>
			</span>
		</div>
	</header>
	<div class="clearfix main" style="margin-top: 20px">
		<!--左侧下拉列表--><div class="sideMenu myfl" id="laqu_userleft_nav">
	<h3 id="ActBind" class="on">
		<img src="<?php echo INDEX_STYLE; ?>/img/business/business_icon_nav7.png">
		<span>基本信息</span>
	</h3>
	<?php if($user_type == 1): ?>
		<ul style="display: block;">
			<li id='uc'>
				<a href="/uc">基本信息</a>
			</li>
			<li id='act'>
				<a href="/act">活动管理</a>
			</li>
			<li id='bindtb'>
				<a href="/uc/bindtb" class="">我的淘宝</a>
			</li>
			<li id='myshops'>
				<a href="/uc/myshops" class="">淘宝列表</a>
			</li>
			<li id="bind">
				<a href="/uc/bind">绑定支付宝</a>
			</li>
			<li id="myali">
				<a href="/uc/myali">支付宝列表</a>
			</li>
		</ul>
	<?php else: ?>
		<ul>
			<li id='index'>
				<a href="/biz/index" class="">基本信息</a>
			</li>
			<li>
				<a href="/act" class="">活动管理</a>
			</li>
			<li>
				<a href="/uc/trade">交易记录</a>
			</li>
			<li>
				<a href="/uc/bind" class="">绑定支付宝</a>
			</li>
			<li>
				<a href="/biz/actshops" class="">活动列表</a>
			</li>
			<li>
				<a href="/ty/czlist">账户充值</a>
			</li>
			<li>
				<a href="/ty/tixian">账户提现</a>
			</li>
		</ul>
		<h3 id="ActBind" class="on">
			<img src="<?php echo INDEX_STYLE; ?>/img/business/business_icon_nav7.png">
			<span>店铺管理</span>
		</h3>
		<ul style="display: block;">
			<li id='addshop'>
				<a href="/biz/myshops" class="">我的店铺</a>
			</li>
			<li>
				<a href="/biz/addshop" class="">绑定店铺</a>
			</li>
			</li>
		</ul>
	<?php endif; ?>
	

</div>
<script>
	var param = window.location.pathname.split('/');
	param = param[param.length - 1];
	$('#' + param).addClass('sign_dom');
</script>
		<!---左侧内容结束----->
		<!-- 右侧内容 -->
		<div class="fundNews_right myfr" style="height: auto;">
			<span class="fundNews_right_title">账户充值</span>
			<!--<ul class="userRecharge clearfix">-->
			<!--<li class="myfl cur user_recharge_VIP">充值VIP会员</li>-->
			<!--&lt;!&ndash;<li class="myfl userRecharge_style"></li>&ndash;&gt;-->
			<!--&lt;!&ndash;<li class="myfl cur user_recharge_gold">金币充值</li>&ndash;&gt;-->
			<!--&lt;!&ndash;<span></span>&ndash;&gt;-->
			<!--</ul>-->
			<!--webskoct所需要的数据。-->
			<input type="hidden" id="orderNo" value="2071902237251286627">
			<div class="userRecharge_content clearfix">
				<div class="userAlipay">
					<ul class="userAlipay_notice" style="height: 194px;">
						<span style="margin-top: 20px;">须知：</span>
						<li style="color: #ff0000">因企业支付宝业务维护，导致拉趣对公支付宝账号暂无法使用，请大家选择以下支付宝私人账号或银行转账方式充值！给您带来不便，尽情谅解！</li>
						<li>请勿在支付宝备注中填写任何关于刷单、刷销量、领商品之类的备注，否则视为违规，将不提供任何网站服务。</li>
						<li>会员或金币充值成功之后概不支持退款！</li>
					</ul>
					<div class="pay_bao">
						<p style="color: #333;font-size: 18px;text-align: center;line-height: 95px">请仔细核对支付宝收款账号：
							<span style="color: #ff0000;margin-right: 40px;">1329012669@qq.com</span> 收款账号姓名：
							<span style="color: #ff0000">潘佳森</span>
						</p>
						<img src="/img/images/pay_jason.png" alt="" style="display: block;margin: 0 auto;margin-top: 23px;width: 200px;"> 
					</div>
					<h3 class="userAlipay_account pay_card_tip">打款后，请您把交易流水号和打款金额填入下方并提交：</h3>
					<div class="transaction_number pay_bao">
						<div class="clearfix">
							<form action="/ty/recharge" method="post">
								<div style="display: inline-block;">
									<span style="width: 168px;text-align: right;color: #666666">转账后输入交易号 &nbsp;</span>
									<input type="text" name="tran_number" id="transaction_num" 
										style="width: 420px;" required>
									<br>
									<span style="width: 168px;text-align: right;color: #666666;">充值金额 &nbsp;</span>
									<input type="text" id="transaction_sum" 
										style="margin: 10px 26px 0 0;" name="cz_money" required>
								</div>
							<input type="submit" value="确认提交" class="submit_sure" id="submit_TJ" style="background: #f3f3f3!important;float: right;margin-top: 25px;width: 88px;height: 32px;margin-right:40px;">
							</form>
						</div>
					</div>
					
					<p class="pay_bao_tip" style="height: 62px;width: 752px;margin-top: 34px; padding-left: 168px;line-height: 62px;background: #ffedf1;color:#ff0000;font-size: 18px;">支付宝自助打款审核，工作时间充值1-2小时内审核。若急需审核，可联系
						<a href="javascript:void(0)" target="_blank" style="height: 22px;display:inline-block; margin-left: 13px; color: #333333;width: 60px;line-height: 22px; background: #f3f3f3;background: url(/img/user/QQ_sever.png) no-repeat 7px center; border: 1px solid #CCCCCC; font-size: 14px;padding-left: 27px;"
						 id="KF_linkt">QQ客服</a>
					</p>
					<h3 class="userAlipay_case">转账示例：</h3>
					<ul class="userAlipay_example clearfix" style="margin-bottom: 50px;">
						<li class="myfl pay_bao_tip" style="margin-left: 190px">
							<img src="/img/images/pay9.png" style="max-width: 260px;max-height: 380px;">
						</li>
						<li class="myfr pay_bao_tip" style="margin-right: 190px">
							<img src="/img/images/pay10.png" style="max-width: 260px;max-height: 380px;">
						</li>
						<li class="myfl pay_card_tip" style="margin-top: 30px;margin-left: 190px">
							<img src="/img/images/7.png" style="max-width: 260px;max-height: 380px;" alt="图片加载失败">
						</li>
						<li class="myfr pay_card_tip" style="margin-top: 30px;margin-right: 190px">
							<img src="/img/images/8.png" style="max-width: 260px;max-height: 380px;" alt="图片加载失败">
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div> <footer>
	<div class="laqufooter">
		<div class="laqufooter-fourmodle">
			<ul class="clearfix">
				<li>
					<img src="/img/home/home_icon_lightning.png">
					<span>
						<b>闪电到账</b>
						<br>
						<em>收货评价直接现金到账</em>
					</span>
					<div class="footer_top_line"></div>
				</li>
				<li>
					<img src="/img/home/home_icon_safeguard.png">
					<span>
						<b>好货保障</b>
						<br>
						<em>商品平均客单价200元</em>
					</span>
					<div class="footer_top_line"></div>
				</li>
				<li>
					<img src="/img/home/home_icon_award.png">
					<span>
						<b>高中奖率</b>
						<br>
						<em>高达平均30%中奖率</em>
					</span>
					<div class="footer_top_line"></div>
				</li>
				<li>
					<img src="/img/home/home_icon_spokesman.png">
					<span>
						<b>代言人奖</b>
						<br>
						<em>邀请送10元现金+必中</em>
					</span>
				</li>
			</ul>
		</div>
		<div class="laqufooter-news">
			<div class="clearfix laqufooter-news_top">
				<ul class="myfl clearfix">
					<li>
						<a href="/contact-us" target="view_window">关于我们</a>
					</li>
					<li>
						<a href="/contact-us" target="view_window">联系我们</a>
					</li>
					<li>
						<a href="/html/home/user_protocolC.html" target="_blank">法律声明</a>
					</li>
					<li>
						<a href="javascript:;">站点地图</a>
					</li>
					<li>
						<a href="/help/help_index">帮助中心</a>
					</li>
				</ul>
				<span class="myfr">关注我们</span>
			</div>
			<div class="laqufooter-news_bottom clearfix">
				<div class="myfl">
					<div class="mb_10" style="line-height: 1;">
						<img src="https://laquimage.b0.upaiyun.com/ICON/2018/11/2/iconfont-dianhua1543923578923.png">
						<span class="phone">0571-28120772</span>
						<img src="https://laquimage.b0.upaiyun.com/ICON/2018/11/2/iconfont-email-line1543923705935.png">
						<span class="email">kefu@laqu.com</span>
					</div>
					<p class="workingTime">客服工作时间：周一到周五 9:00-12:00；13:00-18:00（法定节假日除外）</p>
				</div>
				<div class="myfr">
					<img class="thePublicPic" src="/img/base/QRcode_user.jpg"> </div>
			</div>
		</div>
		<div class="laqufooter-remark">
			<!--https://static.anquan.org/static/outer/image/hy_124x47.png-->
			<p class="laquCopy">Copyright&nbsp;&nbsp;© 2017志豪咩趣科技有限公司 &nbsp;&nbsp;浙ICP17003883号-1 &nbsp;&nbsp;版权所有
				<a target="_blank" href="https://v.pinpaibao.com.cn/cert/site/?site=www.laqu.com&amp;at=business">
					<img style="margin: 15px 11px 0 31px;" src="https://laquimage.b0.upaiyun.com/ICON/2018/11/2/label_lg_900301544519713771.png">
				</a>
				<a key="59014f90efbfb03b502bcaf6" logo_size="83x30" logo_type="common" href="http://www.cn-ecusc.org.cn/cert/aqkx/site/?site=www.laqu.com"
				 target="_blank">
					<script src="//static.anquan.org/static/outer/js/aq_auth.js"></script>
					<b id="aqLogoOSVIS" style="display: none;"></b>
					<img src="//static.anquan.org/static/outer/image/aqkx_83x30.png?id=www.laqu.com?t=102" alt="安全联盟认证" width="83" height="30"
					 style="border: none;">
				</a>
			</p>
		</div>
	</div>
</footer>
</body>
<script type="text/javascript" charset="utf-8" src="<?php echo INDEX_STYLE; ?>/js/jquery.min.js"></script>
<script type="text/javascript" charset="UTF-8" src="<?php echo INDEX_STYLE; ?>/js/jquery.form.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo INDEX_STYLE; ?>/layer/layer.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo INDEX_STYLE; ?>/js/web_method/method.js?v=201893656"></script>
<script type="text/javascript" charset="UTF-8" </body>
	< /html>