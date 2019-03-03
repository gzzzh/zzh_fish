<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:93:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/index\view\shops\shop_index.html";i:1551164829;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\header.html";i:1551164819;s:86:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\top_nav_menu.html";i:1551164819;s:92:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\base_message_title.html";i:1551164818;s:82:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\nav_menu.html";i:1551164819;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\footer.html";i:1551164818;}*/ ?>
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
	  <script type="text/javascript" charset="utf-8" src="<?php echo INDEX_STYLE; ?>layer/layer.js"></script> </head>
<link rel="stylesheet" href="<?php echo INDEX_STYLE; ?>css/business_l.css" />
<body>
	<div class="web_nav">
	<div class="nav_center clearfix">
		<?php if(\think\Request::instance()->session('USER_KEY_ID') != null): ?>
		<p class="myfl">
			<span>
				<span class="personnews-user">
					<span class="personnews-user_name" style="cursor: pointer;"><?php echo (isset($mobile) && ($mobile !== '')?$mobile:''); ?></span>
					<span class="personnews-user_link">
						<span class="clearfix" style="margin-bottom: 24px;">
						<?php if(isset($user_type)): if($user_type == 1): ?>
								<a href="/uc" class="myfl">用户中心</a>
							<?php else: ?> 
								<a href="/biz/index" class="myfl">商家中心</a>
							<?php endif; endif; ?>
							<a href="/wealth/user/spokesman/topic" class="myfr">邀请奖10元</a>
						</span>
						<span class="clearfix">
							<a href="/loginout" class="myfl">退出</a>
						</span>
					</span>
				</span>
			</span>
			<i>|</i>
			<a href="/notice" id="web_notice_numbox">通知（
				<span class="web_notice_num">2</span>）</a>
		</p>
		<?php else: ?>
			<p class="myfl">
				<a href="/login" class="">登录</a>
				<i>|</i>
				<a href="/reg">注册</a>
			</p>
		<?php endif; ?>
		
		<p class="myfr">
			<a href="/index">咩趣网</a>
			<i>|</i>
			<a href="/notice">公告</a>
			<i>|</i>
			<a href="/wealth/user/spokesman/topic">邀请有奖</a>
		</p>
	</div>
</div>

	<header style="background: #ffffff;">
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
	<div class="userControl_bg clearfix" style="padding:20px 0 40px 0">
		<div class="main userControl">
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
			<li id='addact'>
				<a href="/biz/addact" class="">活动发布</a>
			</li>
			<li id='actshops'>
				<a href="/biz/actshops" class="">活动列表</a>
			</li>
			<li id='czlist'>
				<a href="/ty/czlist">账户充值</a>
			</li>
			<li id='tixian'>
				<a href="/ty/tixian">账户提现</a>
			</li>
			<li id='mydeal'>
				<a href="/mydeal">财务日志</a>
			</li>
			<li id='bind'>
				<a href="/uc/bind">绑定支付宝</a>
			</li>
		</ul>
		<h3 id="ActBind" class="on">
			<img src="<?php echo INDEX_STYLE; ?>/img/business/business_icon_nav7.png">
			<span>店铺管理</span>
		</h3>
		<ul>
			<li id='myshops'>
				<a href="/biz/myshops">我的店铺</a>
			</li>
			<li id='addshop'>
				<a href="/biz/addshop">绑定店铺</a>
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
			<div class="userControl_rightmain myfl">
				<div class="business_rightmain myfl">
					<!-- 信息、数据展示 -->
					<div class="business_index_base myfl">
						<div class="new_seller_info clearfix">
							<!--头像-->
							<div class="myfl head_portrait">
								<span>
									<a href="/user/person/info">
										<img class="userControl_index_userPic" src="/img/business/business_index_user.png">
									</a>
								</span>
							</div>
							<div class="myfl seller_detailed_info">
								<div class="top_info">
									<p class="seller_name" title="18594236885"><?php echo $mobile; ?></p>
									<p>
										<?php if($info['is_vip'] == 0): ?>
											<a href="/biz/forvip" style="margin-left: 4px;" class="routine_link_btns">
											<i>开通</i> 您还不是会员哦~ </a>
										<?php elseif($info['is_vip'] == 1): ?>
											<span class="routine_vip" style="background: url(https://laquimage.b0.upaiyun.com/bdsa1527930543922.png) no-repeat center;color: #fff;">普
												<em>VIP</em>
											</span>
										<?php elseif($info['is_vip'] == 2): ?>
										<span class="routine_vip" style="background: url(https://laquimage.b0.upaiyun.com/bdsa1527930543922.png) no-repeat center;color: #fff;">高级
											<em>VIP</em>
										</span>
										<?php elseif($info['is_vip'] == 3): ?>
										<span class="routine_vip" style="background: url(https://laquimage.b0.upaiyun.com/bdsa1527930543922.png) no-repeat center;color: #fff;">超级
											<em>VIP</em>
										</span>
										<?php elseif($info['is_vip'] == 4): ?>
										<span class="routine_vip" style="background: url(https://laquimage.b0.upaiyun.com/bdsa1527930543922.png) no-repeat center;color: #fff;">审核中
										</span>
										<?php endif; ?>
									</p>
								</div>
							</div>
						</div>
						<div class="sellerinfo_capital_statistics">
							<ul class="clearfix">
								<li class="frozen_money">
									<span>冻结金额</span>
									<p><?php echo $info['frozen_money']; ?>
										<span>元</span>
									</p>
								</li>
								<li class="available_money">
									<span>可用余额</span>
									<p><?php echo $info['money']; ?>
										<span>元</span>
									</p>
								</li>
								<li class="moneypage_link" style="border-right: 1px dashed #e8e8e8;">
									<a href="/ty/czlist" class="recharge_link">充值</a>
								</li>
								<li class="moneypage_link">
									<a href="/wealth/merchant/spokesman" target="_blank" class="spokes_link">邀请赚钱（<?php echo $info['my_agent']; ?>）</a>
								</li>
							</ul>
						</div>
					
						<h1 class="business_index_title1">当前活动情况</h1>
						<div class="clearfix">
							<div class="business_index_activity">
								<a href="/shop/activity?activityStatus=0&amp;shopType=0" target="_blank">
									<h2 style="line-height: 58px;padding-top: 0;">等待付款 （
										<em>0</em>）</h2>
								</a>
							</div>
							<div class="business_index_actArrowRight"></div>
							<div class="business_index_activity">
								<a href="/shop/activity?activityStatus=1&amp;shopType=0" target="_blank">
									<h2 style="line-height: 58px;padding-top: 0;">待审核  （
										<em>0</em>）</h2>
								</a>
							</div>
							<div class="business_index_actArrowRight"></div>
							<div class="business_index_activity">
								<a href="/shop/activity?activityStatus=2&amp;shopType=0" target="_blank">
									<h2 style="line-height: 58px;padding-top: 0;">进行中（
										<em>0</em>）</h2>
								</a>
							</div>
						</div>
						<div class="clearfix">
							<div class="business_index_actArrowDown"></div>
						</div>
						<div class="clearfix">
							<div class="business_index_activity">
								<a href="/shop/activity?activityStatus=0&amp;shopType=0" target="_blank">
									<h2 style="line-height: 58px;padding-top: 0;">等待结算   （
										<em>0</em>）</h2>
								</a>
							</div>
							<div class="business_index_actArrowLeft"></div>
							<div class="business_index_activity">
								<a href="/shop/activity?activityStatus=3&amp;shopType=0" target="_blank">
									<h2 style="line-height: 58px;padding-top: 0;">已完成（
										<em>0</em>）</h2>
								</a>
							</div>
							<div class="business_index_actArrowLeft"></div>
							<div class="business_index_activity">
								<a href="/shop/activity?activityStatus=6&amp;shopType=0" target="_blank">
									<h2 style="line-height: 58px;padding-top: 0;">驳回活动（
										<em>0</em>）</h2>
								</a>
							</div>
						</div>
						<h1 class="business_index_title1">帮助</h1>
						<div class="business_index_link">
							<a href="/shop/list" target="_blank">
								<img src="/img/business/business_icon_shop.png">绑定店铺</a>
							<a href="/help/business_issue" target="_blank">
								<img src="/img/business/business_icon_newComer.png">新手入门</a>
						</div>
						<div class="business_index_FAQ clearfix">
							<div class="myfl">
								<h1 class="business_index_title2">商家须知</h1>
								<p>
									<a target="_blank" class="business_notice" style="background: none;margin-bottom: 0;" href="/help/business_howissue">可以发布哪些活动，区别是什么？</a>
									<span>03-31</span>
								</p>
								<p>
									<a target="_blank" class="business_notice" style="background: none;margin-bottom: 0;" href="/help/business_evaluate">如何发布追加评价任务</a>
									<span>03-31</span>
								</p>
								<p>
									<a target="_blank" class="business_notice" style="background: none;margin-bottom: 0;" href="/help/user_punish">用户处罚规则</a>
									<span>03-31</span>
								</p>
							</div>
							<div class="myfr">
								<h1 class="business_index_title2">常见问题</h1>
								<p>
									<a target="_blank" class="business_issue" href="/help/business_commonquestionD">如何开通VIP会员？</a>
									<span>03-31</span>
								</p>
								<p>
									<a target="_blank" class="business_issue" href="/help/business_relevance">如何查看我的活动详情？</a>
									<span>03-31</span>
								</p>
								<p>
									<a target="_blank" class="business_issue" href="/help/business_details">什么是增值服务？增值服务有哪些？</a>
									<span>03-31</span>
								</p>
							</div>
						</div>
					</div>
					<!-- 广告位展示 -->
					<div class="business_index_ad myfr" style="display: none;">
						<h1 class="business_index_title3">官方报名入口</h1>
						<div style="position: relative">
							<input type="hidden" value="https://www.laqu.com/merchant-index" class="targetUrllink">
							<img src="https://laquimage.b0.upaiyun.com/system/2018/12/28/file1545980929481_273.jpg" width="220px" height="140px"
							 style="cursor: pointer" onclick="popwarn(this)">
							<span style="font-size: 12px;color: #fff;height: 16px;width: 28px;background: #848488;line-height: 16px;text-align: center;display: inline-block;position: absolute;top: 0;;right: 0;">广告</span>
						</div>
						<div style="position: relative">
							<input type="hidden" value="http://cy1788.com/?iaqEFb" class="targetUrllink">
							<img src="https://laquimage.b0.upaiyun.com/laqu/images/img1528942060165_504.jpeg" width="220px" height="140px" style="cursor: pointer"
							 onclick="popwarn(this)">
							<span style="font-size: 12px;color: #fff;height: 16px;width: 28px;background: #848488;line-height: 16px;text-align: center;display: inline-block;position: absolute;top: 0;;right: 0;">广告</span>
						</div>
						<div style="position: relative">
							<input type="hidden" value="http://www.liuliangbook.com/" class="targetUrllink">
							<img src="https://laquimage.b0.upaiyun.com/laqu/images/img1514268198622_230.jpg" width="220px" height="140px" style="cursor: pointer"
							 onclick="popwarn(this)">
							<span style="font-size: 12px;color: #fff;height: 16px;width: 28px;background: #848488;line-height: 16px;text-align: center;display: inline-block;position: absolute;top: 0;;right: 0;">广告</span>
						</div>
						<div style="position: relative">
							<input type="hidden" value="http://wpa.qq.com/msgrd?v=3&amp;uin=3003760271&amp;site=qq&amp;menu=yes" class="targetUrllink">
							<img src="https://laquimage.b0.upaiyun.com/laqu/images/img1528942069036_105.jpeg" width="220px" height="140px" style="cursor: pointer"
							 onclick="popwarn(this)">
							<span style="font-size: 12px;color: #fff;height: 16px;width: 28px;background: #848488;line-height: 16px;text-align: center;display: inline-block;position: absolute;top: 0;;right: 0;">广告</span>
						</div>
						<h1 class="business_index_title3">合作伙伴推荐
							<a href="" style="display: none;">更多&gt;</a>
						</h1>
					</div>
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