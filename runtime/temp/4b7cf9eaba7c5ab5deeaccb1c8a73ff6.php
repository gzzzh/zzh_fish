<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:94:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/index\view\task\task_details.html";i:1547729959;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\header.html";i:1548216744;s:86:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\top_nav_menu.html";i:1548216748;s:85:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\search_menu.html";i:1548216745;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\footer.html";i:1548216744;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="<?php echo INDEX_STYLE; ?>css/main.css">
<body> 
	<div class="web_nav">
	<div class="nav_center clearfix">
		<?php if(\think\Request::instance()->session('USER_KEY_ID') != null): ?>
		<p class="myfl">
			<span>
				<span class="personnews-user">
					<span class="personnews-user_name" style="cursor: pointer;">18770008352</span>
					<span class="personnews-user_link">
						<span class="clearfix" style="margin-bottom: 24px;">
							<a href="/uc" class="myfl">用户中心</a>
							<a href="/wealth/user/spokesman/topic" class="myfr">邀请奖10元</a>
						</span>
						<span class="clearfix">
							<a href="/loginout" class="myfl">退出</a>
						</span>
					</span>
				</span>
			</span>
			<i>|</i>
			<a href="/user-message" id="web_notice_numbox">通知（
				<span class="web_notice_num">2</span>）</a>
		</p>
		<?php else: ?>
			<p class="myfl">
				<a href="/login" class="">登录</a>
				<i>|</i>
				<a href="/reg">用户注册</a>
				<i>|</i>
				<a href="/reg">商家注册</a>
			</p>
		<?php endif; ?>
		
		<p class="myfr">
			<a href="/index">咩趣网</a>
			<i>|</i>
			<a href="/wealth/user/spokesman/topic">邀请有奖</a>
			<i>|</i>
			<a href="/help/help_index">帮助中心</a>
			<i>|</i>
			<span class="much_entry">
				<span class="much_entry_box">网站导航</span>
				<span class="box">
					<span class="clearfix">
						<a href="/item" class="myfl">好货精选</a>
						<a href="/coin?coin" class="myfr">金币必中</a>
					</span>
					<span class="clearfix">
						<a href="/wealth/user/spokesman/topic" class="myfl">代言人</a>
						<a href="/help/user_guideapply" class="myfr">新手入门</a>
					</span>
					<span class="clearfix" style="margin-bottom: 0;">
						<a href="/go-login" class="myfl">联系客服</a>
						<a href="/user/feedBack" class="myfr">意见反馈</a>
					</span>
				</span>
			</span>
		</p>
	</div>
</div> 
	<div class="home_headerbag">
	<div class="home_header clearfix">
		<h1 class="myfl">
			<a href="/index">
				<img src="<?php echo INDEX_STYLE; ?>img/home/laqu_logo.png" style="width: 130px;height: 48px;">
			</a>
		</h1>
		<div class="myfl search">
			<form action="/item" method="get">
				<input type="text" name="itemName" value="" placeholder="搜一个商品，开始立即申请吧！" class="content_input">
				<input type="submit" value="" class="click_input"> </form>
		</div>
	</div>
</div>
<div class="nav_meun">
	<div class="center clearfix">
		<span class="classifymenuhover" style="cursor: pointer">全部分类
			<div class="classifymenu" style="position: relative; z-index: 10; height: 306px;">
				<div class="navigation_ganged">
					<a class="fristCategoryName" href="/tasks"
					 target="_blank">服装配饰</a>
				</div>
				<div class="navigation_ganged">
					<a class="fristCategoryName" href="/tasks"
					 target="_blank">鞋子箱包</a>
					<!---->
				</div>
				<div class="navigation_ganged">
					<a class="fristCategoryName" href="/tasks"
					 target="_blank">文娱运动</a>
					<!---->
				</div>
				<div class="navigation_ganged">
					<a class="fristCategoryName" href="/tasks"
					 target="_blank">珠宝首饰</a>
					<!---->
				</div>
				<div class="navigation_ganged">
					<a class="fristCategoryName" href="/tasks"
					 target="_blank">数码家电</a>
					<!---->
				</div>
				<div class="navigation_ganged">
					<a class="fristCategoryName" href="/tasks"
					 target="_blank">护肤彩妆</a>
					<!---->
				</div>
				<div class="navigation_ganged">
					<a class="fristCategoryName" href="/tasks"
					 target="_blank">母婴用品</a>
					<!---->
				</div>
				<div class="navigation_ganged">
					<a class="fristCategoryName" href="/tasks"
					 target="_blank">家纺日用</a>
				</div>
				<div class="navigation_ganged">
					<a class="fristCategoryName" href="/tasks"
					 target="_blank">车用周边</a>
					<!---->
				</div>
			</div>
		</span>
		<a href="/index" class="">首页</a>
		<a href="/item" class="activity">好货精选
			<em style="color: #C62F2F">(新增 26156 件)</em>
		</a>
		<a href="/newer-activity" class="special">新人专享
			<div style="display: inline-block;left: 16px;">
				<!--<em style="float: none;font-size: 12px;">100% 中奖</em>-->
				<img src="/img/base/zhongjiangtipgai.png"> </div>
		</a>
		<a href="/coin?coin" class="coin select">金币必中</a>
		<a href="/item?pintuan=1&amp;jump=1&amp;shopType=&amp;itemCategoryId=&amp;sortType=ACTIVITY_RELEASE_DATE&amp;sortEnum=DESC&amp;itemType=REAL_TIME_LOTTERY"
		 class="group">拼团开奖</a>
		<a href="/item?jump=1&amp;shopType=&amp;itemCategoryId=&amp;sortType=&amp;sortEnum=DESC&amp;itemType=PIN_DUO_DUO&amp;pdd=1"
		 class="group">拼多多</a>
		<a href="/wealth/user/spokesman/topic">
			<img src="/img/base/jiangicon.png" style="margin-right: 10px;margin-top: 6px;">邀请有奖</a>
	</div>
</div>
<script type="text/javascript" charset="utf-8">
			var nav_meunheight = $(".navigation_ganged")
				.length * 34
			$(".classifymenu")
				.css('height', nav_meunheight + 'px')
			var NavLinkSgin = $(".nav_meun .center")
				.children("a"),
				WebNavSginselected = $(".web_nav_sginselected");
			if (location.href.indexOf("/index") >= 0) {
				console.log("首页")
			} else if (location.href.indexOf("/newer-activity") >= 0) { //新人专享
				NavSginMethods();
				WebNavSginselected.eq(0)
					.removeClass("bagD42B5B");
				WebNavSginselected.eq(2)
					.addClass("bagD42B5B");
				NavLinkSgin.eq(2)
					.addClass("select");
			} else if (location.href.indexOf("/item") >= 0 && location.href.indexOf("pintuan") < 0 && location.href.indexOf(
					"pdd") < 0) { //好货精选
				NavSginMethods();
				WebNavSginselected.eq(0)
					.removeClass("bagD42B5B");
				WebNavSginselected.eq(1)
					.addClass("bagD42B5B");
				NavLinkSgin.eq(1)
					.addClass("select");
			} else if (location.href.indexOf("/coin") >= 0) { //金币必中
				NavSginMethods();
				WebNavSginselected.eq(0)
					.removeClass("bagD42B5B");
				WebNavSginselected.eq(3)
					.addClass("bagD42B5B");
				NavLinkSgin.eq(3)
					.addClass("select");
			} else if (location.href.indexOf("/coming") >= 0) { //积分商城
				NavSginMethods();
			} else if (location.href.indexOf("pintuan") >= 0) { //拼团开奖
				NavSginMethods();
				WebNavSginselected.eq(0)
					.removeClass("bagD42B5B");
				WebNavSginselected.eq(4)
					.addClass("bagD42B5B");
				NavLinkSgin.eq(4)
					.addClass("select");
			} else if (location.href.indexOf("pdd") >= 0) { //拼团开奖
				NavSginMethods();
				WebNavSginselected.eq(0)
					.removeClass("bagD42B5B");
				WebNavSginselected.eq(5)
					.addClass("bagD42B5B");
				NavLinkSgin.eq(5)
					.addClass("select");
			}

			function NavSginMethods() {
				for (var p = 0; p < 6; p++) {
					NavLinkSgin.eq(p)
						.removeClass("select")
				}
			}
		</script>
	<div class="main" style="margin-top: 20px;">
		<div class="trialDetail_bg clearfix" style="padding:0 0 50px 0">
			<div class="main mainm clearfix">
				<div class="trialDetail" style="display:inline-block;">
					<input type="hidden" value="1">
					<input type="hidden" value="$itemDetails.applyNewTask">
					<input type="hidden" value="8bfbd845d247e284df58dc7da3c39cfa" name="token">
					<input type="hidden" value="zh_CN">
					<input type="hidden" class="memberType" value="" name="307328">
					<input type="hidden" class="activityType" value="1">
					<input type="hidden" class="locationPic" value="https://laquimage.b0.upaiyun.com/activity/2019/1/5/img1546667497978_458.jpg"
					 name="0">
					<input class="locationHref" type="hidden" value="/user/activity/apply?activityType=1&amp;activityId=307328&amp;token=8bfbd845d247e284df58dc7da3c39cfa">
					<input type="hidden" name="sysDate" value="2019-01-08 20:51:21">
					<!--商品规格-->
					<input type="hidden" value="拍   8883款@@" id="newadd_J_GG">
					<input type="hidden" name="activityId" value="307328">
					<!--&lt;!&ndash; 当前位置&ndash;&gt;-->
					<!---->
					<!--<p class="nowPosition">当前位置：好货精选 > <span>商品详情页</span></p>-->
					<!---->
					<!---->
					<!---->
					<!--<div class="new_index_guidestep11" style="display: none;">-->
					<!--<span class="new_index_guidestepimg"></span>-->
					<!--<span class="new_index_guidestepfont">点击此按钮，免费领取这个商品~</span>-->
					<!--<span class="new_index_guidestepoff"></span>-->
					<!--</div>-->
					<input type="hidden" name="itemPrice" value="13800">
					<!-- 商品操作区   游客 -->
					<div class="operation">
						<div class="operation_left myfl">
							<div class="productPhoto myfl">
								<img style="width: 360px;height: 360px" src="https://laquimage.b0.upaiyun.com/activity/2019/1/5/img1546667497978_458.jpg!360x360"> </div>
							<div class="producTmessage myfl">
								<h2 class="goods-title myfl" title="运动休闲鞋" style=" width: 460px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">运动休闲鞋</h2>
								<!--<p class="count_down myfl"><i></i>活动结束剩余：5天3小时8分钟</p>-->
								<div class="price_information clearfix">
									<p class="price">商品价格：
										<span>￥138.00</span>
									</p>
									<p class="describe" style="padding-bottom: 0px;">商品规格：
										<span class="newadd_J_ggdata">拍 8883款</span>
									</p>
									<p class="describe">
										<input type="hidden" value="1" id="iscoupon"> 支付支持：
										<em class="icon_pay">信用卡</em>
										<em class="icon_pay">花呗</em>
									</p>
								</div>
								<!--<p class="acquire_integral"><span class="icon_detail">积分</span>  申请活动并完成任务未中奖，将获得<em>30</em>积分</p>-->
								<p class="newadd_J_style_box">
									<span class=" newadd_J_stylesmall">宝贝份数
										<em class="newadd_J_style_data">10</em>
									</span>
									<span class="border  newadd_J_stylesmall" style="border-left: 1px solid #EAEAEA;border-right: 1px solid #EAEAEA;">金币份数
										<em class="newadd_J_style_data">0</em>
									</span>
									<span class=" newadd_J_stylesmall">申请人数
										<em class="newadd_J_style_data">6795</em>
									</span>
								</p>
								<p class="invitation clearfix" style="display: block">当前粉丝0个，邀请好友提高中奖率20% &nbsp;
									<!--游客状态去登录页面-->
									<a href="/go-login">立即去邀请&gt;</a>
								</p>
								<input type="button" id="apply_now_no" onclick="window.location='/go-login'" value="立即申请" class="myfl" style="z-index: 201;position: relative;">
								<input type="button" style="margin-left: 15px" id="gold_exchange_no" onclick="window.location='/go-login'" value="金币兑换"> </div>
						</div>
						<div class="operation_right myfl" style="width: 220px;">
							<p class="nextTime">下次开奖时间:
								<span>01月08日 21:10</span>
								<!--<span>12月19日&nbsp;10 : 00</span>-->
							</p>
							<img class="memberTypePic" src="https://laquimage.b0.upaiyun.com/system/2019/1/5/img1546671993645_919.png" style="width: 190px; height: 190px;">
							<span class="scan_code">扫码关注发现惊喜!</span>
							<p class="invite_award">领
								<em>10</em>元现金 :&nbsp;
								<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=http%3A%2F%2Flaqu.com%2Fuser-spokesman-index%3FmemberType%3D1%26inviteCode%3D%24loginMemberBO.inviteCode&amp;summary=%E4%BA%B2%E7%88%B1%E7%9A%84%E4%BB%AC%E9%83%BD%E6%9D%A5%E7%9C%8B%E7%9C%8B%E5%90%A7%EF%BC%8C%E5%A5%BD%E4%B8%9C%E8%A5%BF%E8%A6%81%E5%88%86%E4%BA%AB%E7%BB%99%E6%9C%80%E5%A5%BD%E7%9A%84%E6%9C%8B%E5%8F%8B%EF%BC%8C%E8%B5%B6%E7%B4%A7%E5%8E%BB%E5%85%8D%E8%B4%B9%E9%A2%86%E5%8F%96%E5%90%A7%EF%BC%81&amp;pics=https%3A%2F%2Flaquimage.b0.upaiyun.com%2Factivity%2F2019%2F1%2F5%2Fimg1546667497978_458.jpg"
								 class="space" target="_blank"></a>
								<a href="http://v.t.qq.com/share/share.php?title=%E4%BA%B2%E7%88%B1%E7%9A%84%E4%BB%AC%E9%83%BD%E6%9D%A5%E7%9C%8B%E7%9C%8B%E5%90%A7%EF%BC%8C%E5%A5%BD%E4%B8%9C%E8%A5%BF%E8%A6%81%E5%88%86%E4%BA%AB%E7%BB%99%E6%9C%80%E5%A5%BD%E7%9A%84%E6%9C%8B%E5%8F%8B%EF%BC%8C%E8%B5%B6%E7%B4%A7%E5%8E%BB%E5%85%8D%E8%B4%B9%E9%A2%86%E5%8F%96%E5%90%A7%EF%BC%81&amp;url=http%3A%2F%2Flaqu.com%2Fuser-spokesman-index%3FmemberType%3D1%26inviteCode%3D%24loginMemberBO.inviteCode&amp;appkey=5bd32d6f1dff4725ba40338b233ff155&amp;pic=https%3A%2F%2Flaquimage.b0.upaiyun.com%2Factivity%2F2019%2F1%2F5%2Fimg1546667497978_458.jpg"
								 class="blogs" target="_blank"></a>
								<a href="http://v.t.sina.com.cn/share/share.php?&amp;appkey=895033136&amp;url=http%3A%2F%2Flaqu.com%2Fuser-spokesman-index%3FmemberType%3D1%26inviteCode%3D%24loginMemberBO.inviteCode&amp;title=%E4%BA%B2%E7%88%B1%E7%9A%84%E4%BB%AC%E9%83%BD%E6%9D%A5%E7%9C%8B%E7%9C%8B%E5%90%A7%EF%BC%8C%E5%A5%BD%E4%B8%9C%E8%A5%BF%E8%A6%81%E5%88%86%E4%BA%AB%E7%BB%99%E6%9C%80%E5%A5%BD%E7%9A%84%E6%9C%8B%E5%8F%8B%EF%BC%8C%E8%B5%B6%E7%B4%A7%E5%8E%BB%E5%85%8D%E8%B4%B9%E9%A2%86%E5%8F%96%E5%90%A7%EF%BC%81&amp;content=utf-8&amp;pic=https%3A%2F%2Flaquimage.b0.upaiyun.com%2Factivity%2F2019%2F1%2F5%2Fimg1546667497978_458.jpg"
								 class="weibo"></a>
								<a href="/go-login" class="weixin"></a>
							</p>
						</div>
					</div>
					<!-- 商品详情 -->
					<div class="box particulars">
						<ul class="tab_menu">
							<li class="current fristLi">商品详情页</li>
							<li class="process">新手流程</li>
							<li class="rule">申请规则</li>
							<li class="lastLi"></li>
						</ul>
						<div class="tab_box">
							<div class="commoditydDetails">
								<div style="height: 20px"> </div>
								<!--新加的文案-->
								<div class="newadd_detailsCopy martop20">
									<h2>拉趣网提示</h2>
									<p>1、禁止私自使用花呗、天猫积分、淘金币、信用卡、分期付款以及淘宝客等各种返利方式下单(拉趣指定可使用除外)；</p>
									<p>2、禁止使用店铺优惠券、店铺红包等（拉趣网指定优惠券、红包等情况除外），禁止参与好评返现；</p>
									<p>3、该商品不参与店铺满减满送（如送赠品）等优惠活动；禁止在旺旺提及拉趣，影射自己是拉趣或者活动用户等；</p>
									<p>4、&lt;150元的商品全国包邮（但新疆、西藏、内蒙、青海、宁夏、甘肃卖家可不包邮）；≥150元的商品不一定包邮，若不包邮则后期返款仅包含下单商品金额，邮费买家自行承担；若担心邮费问题，请先确认无异议后再进行加购物车的操作；</p>
									<p>5、若商品有任何售后问题，请在对应中奖商品下发起售后，请勿旺旺私自联系商家；</p>
									<p>6、以上由于买家违规下单所产生的费用，由买家承担。拉趣网有权冻结其帐号，限制提现操作，IP列入黑名单。</p>
								</div>
								<p>
									<img align="absmiddle" src="https://img.alicdn.com/imgextra/i1/296541600/TB2g0t8eKuSBuNjSsplXXbe8pXa_!!296541600.jpg"
									 style="max-width: 750.0px;">
									<img align="absmiddle" src="https://img.alicdn.com/imgextra/i4/296541600/TB2.WaIeQCWBuNjy0FaXXXUlXXa_!!296541600.jpg"
									 style="max-width: 750.0px;">
									<img align="absmiddle" src="https://img.alicdn.com/imgextra/i3/296541600/TB2qUSdeFuWBuNjSszbXXcS7FXa_!!296541600.jpg"
									 style="max-width: 750.0px;">
									<img align="absmiddle" src="https://img.alicdn.com/imgextra/i2/296541600/TB2YfSLeN9YBuNjy0FfXXXIsVXa_!!296541600.jpg"
									 style="max-width: 750.0px;">
									<img align="absmiddle" src="https://img.alicdn.com/imgextra/i4/296541600/TB2AL5DeNWYBuNjy1zkXXXGGpXa_!!296541600.jpg"
									 style="max-width: 750.0px;">
									<img align="absmiddle" src="https://img.alicdn.com/imgextra/i3/296541600/TB2i9CheFGWBuNjy0FbXXb4sXXa_!!296541600.jpg"
									 style="max-width: 750.0px;">
									<img align="absmiddle" src="https://img.alicdn.com/imgextra/i2/296541600/TB25FqxeKOSBuNjy0FdXXbDnVXa_!!296541600.jpg"
									 style="max-width: 750.0px;">
									<img align="absmiddle" src="https://img.alicdn.com/imgextra/i1/296541600/TB2jdV8eKuSBuNjSsplXXbe8pXa_!!296541600.jpg"
									 style="max-width: 750.0px;">
									<img align="absmiddle" src="https://img.alicdn.com/imgextra/i3/296541600/TB2adWyeKuSBuNjSsziXXbq8pXa_!!296541600.jpg"
									 style="max-width: 750.0px;">
									<img align="absmiddle" src="https://img.alicdn.com/imgextra/i1/296541600/TB2AEWceHuWBuNjSszgXXb8jVXa_!!296541600.jpg"
									 style="max-width: 750.0px;">
									<img align="absmiddle" src="https://img.alicdn.com/imgextra/i1/296541600/TB291tgboOWBKNjSZKzXXXfWFXa_!!296541600.jpg"
									 style="max-width: 750.0px;">
									<img align="absmiddle" src="https://img.alicdn.com/imgextra/i4/296541600/TB2B8mCeL5TBuNjSspmXXaDRVXa_!!296541600.jpg"
									 style="max-width: 750.0px;">
									<img align="absmiddle" src="https://img.alicdn.com/imgextra/i4/296541600/TB2O85BeH1YBuNjSszhXXcUsFXa_!!296541600.jpg"
									 style="max-width: 750.0px;">
									<img align="absmiddle" src="https://img.alicdn.com/imgextra/i4/296541600/TB2.kWIeGmWBuNjy1XaXXXCbXXa_!!296541600.jpg"
									 style="max-width: 750.0px;">
								</p>';
								<p style="height: 40px;color: #666666;line-height: 40px;text-align: center">商品详情由拉趣抓取自动展示，抓取地址由商家提供，权利归商家所有。若有侵权拉趣网不承担法律责任！</p>
							</div>
							<div class="hide Newbie clearfix">
								<dl class="myfl">
									<dt class="myfl">01</dt>
									<dd class="myfl">
										<h2>注册账户，免费领取</h2>
										<p>注册拉趣网用户账户，然后找到想要的商品，进入商品详情页，点击立即申请后，查看申请试用规则，然后进入到申请页面。</p>
									</dd>
								</dl>
								<h2 class="moudle_img myfl">
									<img src="/img/home/user_new_step_07.png">
								</h2>
								<dl class="myfl">
									<dt class="myfl">02</dt>
									<dd class="myfl">
										<h2>提交申请，等待开奖</h2>
										<p>按照要求找到商品后，把商品的链接或者详情页底部数字代码在平台申请页面核对，确认正确后把商品加入购物车，然后回到平台提交申请。</p>
									</dd>
								</dl>
								<h2 class="moudle_img myfl">
									<img src="/img/home/user_new_step_11.png">
								</h2>
								<dl class="myfl">
									<dt class="myfl">03</dt>
									<dd class="myfl">
										<h2>中奖领取，下单付款</h2>
										<p>系统开奖后收到了中奖通知就可以去领奖了，领奖之前请先阅读领奖须知，然后去完成领奖的任务，去找到商品下单付款。</p>
									</dd>
								</dl>
								<h2 class="moudle_img myfl">
									<img src="/img/home/user_new_step_14.png">
								</h2>
								<dl class="myfl">
									<dt class="myfl">04</dt>
									<dd class="myfl">
										<h2>收货确认，五星好评</h2>
										<p>等收到货后，撰写商品的五星好评并提交，然后回到平台上传评论截图提交审核。</p>
									</dd>
								</dl>
								<h2 class="moudle_img myfl">
									<img src="/img/home/user_new_step_17.png">
								</h2>
								<dl class="myfl">
									<dt class="myfl">05</dt>
									<dd class="myfl">
										<h2>完成活动，返款到账</h2>
										<p>商家审核确认之后，平台会自动返款到您的注册账户上，您可以通过&lt;资金明细&gt;查看</p>
									</dd>
								</dl>
								<h2 class="moudle_img myfl">
									<img src="/img/home/user_new_step_19.png">
								</h2>
							</div>
							<!--申请规则-->
							<div class="hide application_regulation">
								<dl>
									<dt>注意事项</dt>
									<dd>
										<p>1、禁止私自使用花呗、天猫积分、淘金币、信用卡、分期付款以及淘宝客等各种返利方式下单。(拉趣指定可使用除外)
											<br> 2、禁止使用店铺优惠券、店铺红包等（拉趣网指定优惠券、红包等情况除外）；禁止参与好评返现
											<br>3、该商品不参与店铺满减满送（如送赠品）等优惠活动；禁止在旺旺提及拉趣，影射自己是拉趣或者活动用户等；
											<br>4、&lt;150元的商品全国包邮（但新疆、西藏、内蒙、青海、宁夏、甘肃卖家可不包邮）；≥150元的商品不一定包邮，若不包邮则后期返款仅包含下单商品金额，邮费买家自行承担；若担心邮费问题，请先确认无异议后再进行加购物车的操作。
											<br>5、若商品有任何售后问题，请在对应中奖商品下发起售后，请勿旺旺私自联系商家；
											<br>6、以上由于买家违规下单所产生的费用，由买家承担。拉趣网有权冻结其帐号，限制提现操作，IP列入黑名单。 </p>
									</dd>
								</dl>
								<dl>
									<dt>温馨提示</dt>
									<dd>
										<p>1、用户获得领奖资格后，请根据时间提示按时提交订单号和评论截图。
											<br> 2、若因未按时提交以上信息而被系统取消资格，用户自行承担责任。
											<br> 3、若活动已无剩余资格，将无法恢复资格，由此造成的损失需由买家承担。</p>
									</dd>
								</dl>
								<dl>
									<dt>权利说明</dt>
									<dd>
										<p> 所有活动产品均由合作商家直接提供，杜绝一切非正规渠道来源的活动产品。本站只为用户提供渠道及信息交流平台，产品的使用效果因产品本身及用户的个体差异而有所不同。若会员在产品使用过程中有任何不适，请即时停用并直接与商品提供商联系。因商品提供商的产品和服务导致的任何瑕疵、过错
											、责任和纠纷，本站不承担任何法律责任。</p>
									</dd>
								</dl>
								<dl>
									<dt>常见问题</dt>
									<dd>
										<p style="color: #999999;">
											<span style="color: #666666;">1、如果提高中奖率？</span>
											<br>
											<em style="text-align: left;">拉趣网提供了很多提升中奖率的途径，只要你多申请活动、多邀请好友一起参与、多登陆多签到、及时绑定微信、及时完善个人信息、开通VIP服务，你的中奖率一定会蹭蹭的往上涨，更多提高中奖率方法
												<span onclick="window.location='/html/home/win_esoterica.html'"
												 style="color: red;cursor: pointer;">请点击这里查看</span>
											</em>
											<br>
											<br>
											<span style="color: #666666;">2、如何成为代言人，领取代言人奖励？</span>
											<br>
											<em style="text-align: left;">代言人通过分享好货给好友，好友成功领奖下单之后代言人就可以获得丰厚的奖励，奖励不设上线，持续累计。只要你成功注册成为拉趣网用户，阅读并同意《用户服务协议》，完成首单之后就可以申请成为拉趣代言人。</em>
											<br>
											<br>
											<span style="color: #666666;">3、金币兑换中奖的商品如何领取下单？</span>
											<br>
											<em style="text-align:left;">在金币必中频道，找到已经开抢的宝贝，点击进入详情页后选择金币兑换（如果金币不足则需要先充值金币），金币兑换成功后按要求找到宝贝提交活动。等活动开奖之后按要求完成领取，收货好评后即可拿到平台的返款。 Tips：多参与金币兑换可以提高申请活动的中奖率哦~</em>
											<br>
											<br> </p>
									</dd>
								</dl>
							</div>
						</div>
					</div>
					<!-- 推荐活动 -->
					<div class="recommend myfl">
						<h2 class="recommend_title" style="padding:0;">平台推荐</h2>
						<dl>
							<dt>
								<a href="/activity/304579/-1.html" onclick="_czc.push(['_trackEvent', '详情推荐', '推荐活动', '活动ID=,用户ID='])">
									<img style="width:180px;height:180px" src="https://laquimage.b0.upaiyun.com/activity/2018/12/7/img1544155070228_481.jpg!200x200">
								</a>
							</dt>
							<dd>
								<p class="goods_name">
									<span class="good_recommendlabel">推荐</span>
									<a class="overtop" href="/activity/304579/-1.html" onclick="_czc.push(['_trackEvent', '详情推荐', '推荐活动', '活动ID=,用户ID='])">秋冬新款高帮女鞋小白鞋</a>
								</p>
								<p class="cost">
									<span class="original_price">¥158.0</span>
									<span class="people_number myfr">
										<em>291</em>人已申请</span>
								</p>
							</dd>
						</dl>
						<dl>
							<dt>
								<a href="/activity/304581/-1.html" onclick="_czc.push(['_trackEvent', '详情推荐', '推荐活动', '活动ID=,用户ID='])">
									<img style="width:180px;height:180px" src="https://laquimage.b0.upaiyun.com/activity/2018/12/23/img1545538597065_906.jpg!200x200">
								</a>
							</dt>
							<dd>
								<p class="goods_name">
									<span class="good_recommendlabel">推荐</span>
									<a class="overtop" href="/activity/304581/-1.html" onclick="_czc.push(['_trackEvent', '详情推荐', '推荐活动', '活动ID=,用户ID='])">冬季新款高帮绿星帆布鞋女鞋</a>
								</p>
								<p class="cost">
									<span class="original_price">¥158.0</span>
									<span class="people_number myfr">
										<em>294</em>人已申请</span>
								</p>
							</dd>
						</dl>
						<dl>
							<dt>
								<a href="/activity/308813/1.html" onclick="_czc.push(['_trackEvent', '详情推荐', '推荐活动', '活动ID=,用户ID='])">
									<img style="width:180px;height:180px" src="https://laquimage.b0.upaiyun.com/system/2019/1/2/file1546392116867_747.jpg!200x200">
								</a>
							</dt>
							<dd>
								<p class="goods_name">
									<span class="good_recommendlabel">推荐</span>
									<a class="overtop" href="/activity/308813/1.html" onclick="_czc.push(['_trackEvent', '详情推荐', '推荐活动', '活动ID=,用户ID='])">休闲商务皮鞋男</a>
								</p>
								<p class="cost">
									<span class="original_price">¥158.0</span>
									<span class="people_number myfr">
										<em>729</em>人已申请</span>
								</p>
							</dd>
						</dl>
						<dl>
							<dt>
								<a href="/activity/306218/1.html" onclick="_czc.push(['_trackEvent', '详情推荐', '推荐活动', '活动ID=,用户ID='])">
									<img style="width:180px;height:180px" src="https://laquimage.b0.upaiyun.com/system/2019/1/3/file1546494570644_482.jpg_400x400.jpg!200x200">
								</a>
							</dt>
							<dd>
								<p class="goods_name">
									<span class="good_recommendlabel">推荐</span>
									<a class="overtop" href="/activity/306218/1.html" onclick="_czc.push(['_trackEvent', '详情推荐', '推荐活动', '活动ID=,用户ID='])">韩版百搭棉布袋</a>
								</p>
								<p class="cost">
									<span class="original_price">¥12.0</span>
									<span class="people_number myfr">
										<em>1008</em>人已申请</span>
								</p>
							</dd>
						</dl>
						<dl>
							<dt>
								<a href="/activity/308219/1.html" onclick="_czc.push(['_trackEvent', '详情推荐', '推荐活动', '活动ID=,用户ID='])">
									<img style="width:180px;height:180px" src="https://laquimage.b0.upaiyun.com/activity/2019/1/7/img1546839805657_739.JPG!200x200">
								</a>
							</dt>
							<dd>
								<p class="goods_name">
									<span class="good_recommendlabel">推荐</span>
									<a class="overtop" href="/activity/308219/1.html" onclick="_czc.push(['_trackEvent', '详情推荐', '推荐活动', '活动ID=,用户ID='])">春季运动跑步鞋透气网鞋男休闲鞋</a>
								</p>
								<p class="cost">
									<span class="original_price">¥39.9</span>
									<span class="people_number myfr">
										<em>2130</em>人已申请</span>
								</p>
							</dd>
						</dl>
						<dl>
							<dt>
								<a href="/activity/308150/1.html" onclick="_czc.push(['_trackEvent', '详情推荐', '推荐活动', '活动ID=,用户ID='])">
									<img style="width:180px;height:180px" src="https://laquimage.b0.upaiyun.com/system/2019/1/7/file1546839768158_693.png!200x200">
								</a>
							</dt>
							<dd>
								<p class="goods_name">
									<span class="good_recommendlabel">推荐</span>
									<a class="overtop" href="/activity/308150/1.html" onclick="_czc.push(['_trackEvent', '详情推荐', '推荐活动', '活动ID=,用户ID='])">coach购物袋一个</a>
								</p>
								<p class="cost">
									<span class="original_price">¥556.0</span>
									<span class="people_number myfr">
										<em>2151</em>人已申请</span>
								</p>
							</dd>
						</dl>
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