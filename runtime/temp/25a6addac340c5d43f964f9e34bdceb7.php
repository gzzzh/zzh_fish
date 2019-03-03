<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:86:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/index\view\task\list.html";i:1547729959;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\header.html";i:1548216744;s:86:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\top_nav_menu.html";i:1548216748;s:85:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\search_menu.html";i:1548216745;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\footer.html";i:1548216744;}*/ ?>
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
		<div class="bestCargo_bg" style="padding:0 0 40px 0;overflow:hidden;">
			<div style="margin-top: 10px;">
				<div style="width: 100%;background: #fff">
					<div style="margin: 0 auto;width: 1100px;">
						<ul class="clearfix addwin-acttype" 
							style="padding-left: 6px;border-bottom: 1px solid #F1F1F1;display: none;">
							<li class="myfl" style="width: 54px;padding: 0;color: #999;">类型：</li>
							<li class="myfl">
								<a href="/item?jump=1&amp;shopType=&amp;itemCategoryId=3&amp;sortType=APPLY_MEMBER_COUNT&amp;sortEnum=DESC&amp;itemType=ALL"
								 style="padding: 0 50px 0 6px;
        width: auto;">全部</a>
							</li>
							<li class="myfl">
								<a href="javascript:;" class="active">常规</a>
							</li>
						</ul>
						<ul class="classified_screening clearfix" style="position: relative;padding-left: 6px;">
							<li style="width: 54px;color: #999">分类：</li>
							<?php foreach($cateList as $vo): ?>
								<li class="goods_whole">
									<a href="/" style="padding: 0 16px 0 6px;width: auto"><?php echo $vo['catname']; ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="goods_clothing_childrenheight" style="height:68px;background: #fff;display: none"></div>
				<div class="goods_Category">
					<div class="commodity_sorting myfl">
						<a href="/item?jump=1&amp;shopType=&amp;itemCategoryId=3&amp;secondCategoryId=&amp;sortType=ACTIVITY_RELEASE_DATE&amp;sortEnum=DESC&amp;itemType=NORMAL"
						 class="myfl">综合</a>
						<em></em>
						<a href="javascript:void(0)" class="myfl" style="color: #C62F2F;">人气</a>
						<em></em>
						<a href="/item?jump=1&amp;shopType=&amp;itemCategoryId=3&amp;secondCategoryId=&amp;sortType=COMMODITY_PRICE&amp;sortEnum=DESC&amp;itemType=NORMAL"
						 class="myfl" style="padding-right: 4px;">价格
							<img src="/img/home/xiajiantou111.png">
						</a>
						<em></em>
						<a href="/item?jump=1&amp;shopType=&amp;itemCategoryId=3&amp;secondCategoryId=&amp;itemType=FORTHCOMING_AWARD&amp;sortEnum=ASC"
						 class="myfl color333">即将开奖</a>
						<em></em>
						<a href="/item?jump=1&amp;shopType=&amp;itemCategoryId=3&amp;secondCategoryId=&amp;itemType=HIGH_AWARD_RATE&amp;sortEnum=DESC"
						 class="myfl" style="color: #333;">99%高中奖率</a>
					</div>
					<div class="commodity_sorting myfr" style="display: none;">
						<a href="javascript:;" class="linkahrefcheckbox">
							<label onclick="linkahref()" style="cursor: pointer;">
								<input type="checkbox" name="checkboxtype1" class="checkboxtype" value="1"> 申请有奖</label>
						</a>
						<a href="javascript:;" class="linkahrefcheckbox">
							<label onclick="linkahref()" style="cursor: pointer">
								<input type="checkbox" name="checkboxtype2" class="checkboxtype" value="2"> 下单有奖</label>
						</a>
						<a href="javascript:;" class="linkahrefcheckbox">
							<label onclick="linkahref()" style="cursor: pointer">
								<input type="checkbox" name="checkboxtype3" class="checkboxtype" value="3"> 花呗支付</label>
						</a>
						<a href="javascript:;" class="linkahrefcheckbox">
							<label onclick="linkahref()" style="cursor: pointer">
								<input type="checkbox" name="checkboxtype4" class="checkboxtype" value="4"> 信用卡支付</label>
						</a>
					</div>
				</div>
			</div>
			<div class="mainlefty">
				<div class="bestCargo clearfix" style="min-height: 600px;">
					<!--广告位置移动-->
					<div class="myfr advert-move" style="background: #fff;padding-bottom: 60px;">
						<h3>平台推荐</h3>
						<ul class="picList" style="width: 212px;">
							<!--<input type="hidden" value="$Infolenth" />-->
							<li class="ShopPhotoThis" style="height: 300px;width: 212px;border: none;background: #fff;margin: 0;border-bottom: 1px solid #e5e5e5;position: relative">
								<div class="new_index_goodsbox myfl newpage_shopphotothis new_anmimat_time" style="background: #fff;height: 278px;margin: 0;">
									<!--新人专享特有的蒙版详情-->
									<a href="/activity/307323/1.html" class="displaylineblock overhiden" target="_blank" style="position: relative;width: 192px;height: 192px;margin: 10px 0 0 10px;">
										<img src="https://laquimage.b0.upaiyun.com/system/2019/1/5/file1546671741591_143.jpg!220x220" class="transitionphoto"
										 style="position: absolute;width: 192px;height: 192px;"> </a>
									<div class="new_index_goodsfont" style="width: 212px;">
										<p style="padding: 0 10px;width: auto;margin-top: 14px;line-height: 14px;" class="color333" title="红枫树苗庭院阳台风景树">
											<span class="good_recommendlabel">推荐</span>
											<a href="/activity/307323/1.html" class="color333 overtop fontsize14" target="_blank" style="display: inline-block;
    vertical-align: text-bottom;
    margin-left: 4px;width: 148px;">红枫树苗庭院阳台风景树</a>
										</p>
										<p class="priceandapply clearfix" style="padding: 0 10px;margin-top: 20px;height: 12px;line-height: 12px;">
											<span class="price myfl" style="font: 16px arial;color: #666;line-height: 12px;">
												<span class="money_symbol" style="margin-right: 3px;">¥</span>
												<span class="money_num" style="text-decoration: line-through;">28.80</span>
											</span>
											<span class="apply myfr" style="font-size: 12px;color: #999;">291人已申请</span>
										</p>
										<!--<a href="/activity/307323/1.html" target="_blank" style="margin:10px auto 0;display: block;width: 188px;" class="boderstyleff366f add_index_goodslink textcenter bdradius3 colorFF366f">免费领取</a>-->
									</div>
								</div>
								<!---->
							</li>
							<li class="ShopPhotoThis" style="height: 300px;width: 212px;border: none;background: #fff;margin: 0;border-bottom: 1px solid #e5e5e5;position: relative">
								<div class="new_index_goodsbox myfl newpage_shopphotothis new_anmimat_time" style="background: #fff;height: 278px;margin: 0;">
									<!--新人专享特有的蒙版详情-->
									<a href="/activity/305498/1.html" class="displaylineblock overhiden" target="_blank" style="position: relative;width: 192px;height: 192px;margin: 10px 0 0 10px;">
										<img src="https://laquimage.b0.upaiyun.com/activity/2018/12/24/img1545654237429_298.jpg!220x220" class="transitionphoto"
										 style="position: absolute;width: 192px;height: 192px;"> </a>
									<div class="new_index_goodsfont" style="width: 212px;">
										<p style="padding: 0 10px;width: auto;margin-top: 14px;line-height: 14px;" class="color333" title="光流定位无人机1080P长续航">
											<span class="good_recommendlabel">推荐</span>
											<a href="/activity/305498/1.html" class="color333 overtop fontsize14" target="_blank" style="display: inline-block;
    vertical-align: text-bottom;
    margin-left: 4px;width: 148px;">光流定位无人机1080P长续航</a>
										</p>
										<p class="priceandapply clearfix" style="padding: 0 10px;margin-top: 20px;height: 12px;line-height: 12px;">
											<span class="price myfl" style="font: 16px arial;color: #666;line-height: 12px;">
												<span class="money_symbol" style="margin-right: 3px;">¥</span>
												<span class="money_num" style="text-decoration: line-through;">284.00</span>
											</span>
											<span class="apply myfr" style="font-size: 12px;color: #999;">7623人已申请</span>
										</p>
										<!--<a href="/activity/305498/1.html" target="_blank" style="margin:10px auto 0;display: block;width: 188px;" class="boderstyleff366f add_index_goodslink textcenter bdradius3 colorFF366f">免费领取</a>-->
									</div>
								</div>
								<!---->
								<span class="hight_icon">高价值</span>
							</li>
							<li class="ShopPhotoThis" style="height: 300px;width: 212px;border: none;background: #fff;margin: 0;border-bottom: 1px solid #e5e5e5;position: relative">
								<div class="new_index_goodsbox myfl newpage_shopphotothis new_anmimat_time" style="background: #fff;height: 278px;margin: 0;">
									<!--新人专享特有的蒙版详情-->
									<a href="/activity/307302/1.html" class="displaylineblock overhiden" target="_blank" style="position: relative;width: 192px;height: 192px;margin: 10px 0 0 10px;">
										<img src="https://laquimage.b0.upaiyun.com/activity/2019/1/5/img1546664412165_034.jpg!220x220" class="transitionphoto"
										 style="position: absolute;width: 192px;height: 192px;"> </a>
									<div class="new_index_goodsfont" style="width: 212px;">
										<p style="padding: 0 10px;width: auto;margin-top: 14px;line-height: 14px;" class="color333" title="新款潮鞋">
											<span class="good_recommendlabel">推荐</span>
											<a href="/activity/307302/1.html" class="color333 overtop fontsize14" target="_blank" style="display: inline-block;
    vertical-align: text-bottom;
    margin-left: 4px;width: 148px;">新款潮鞋</a>
										</p>
										<p class="priceandapply clearfix" style="padding: 0 10px;margin-top: 20px;height: 12px;line-height: 12px;">
											<span class="price myfl" style="font: 16px arial;color: #666;line-height: 12px;">
												<span class="money_symbol" style="margin-right: 3px;">¥</span>
												<span class="money_num" style="text-decoration: line-through;">158.00</span>
											</span>
											<span class="apply myfr" style="font-size: 12px;color: #999;">7383人已申请</span>
										</p>
										<!--<a href="/activity/307302/1.html" target="_blank" style="margin:10px auto 0;display: block;width: 188px;" class="boderstyleff366f add_index_goodslink textcenter bdradius3 colorFF366f">免费领取</a>-->
									</div>
								</div>
								<!---->
								<span class="hight_icon">高价值</span>
							</li>
							<li class="ShopPhotoThis" style="height: 300px;width: 212px;border: none;background: #fff;margin: 0;border-bottom: 1px solid #e5e5e5;position: relative">
								<div class="new_index_goodsbox myfl newpage_shopphotothis new_anmimat_time" style="background: #fff;height: 278px;margin: 0;">
									<!--新人专享特有的蒙版详情-->
									<a href="/activity/308049/1.html" class="displaylineblock overhiden" target="_blank" style="position: relative;width: 192px;height: 192px;margin: 10px 0 0 10px;">
										<img src="https://laquimage.b0.upaiyun.com/activity/2019/1/7/img1546828192890_111.jpg!220x220" class="transitionphoto"
										 style="position: absolute;width: 192px;height: 192px;"> </a>
									<div class="new_index_goodsfont" style="width: 212px;">
										<p style="padding: 0 10px;width: auto;margin-top: 14px;line-height: 14px;" class="color333" title="棉服女中长款">
											<span class="good_recommendlabel">推荐</span>
											<a href="/activity/308049/1.html" class="color333 overtop fontsize14" target="_blank" style="display: inline-block;
    vertical-align: text-bottom;
    margin-left: 4px;width: 148px;">棉服女中长款</a>
										</p>
										<p class="priceandapply clearfix" style="padding: 0 10px;margin-top: 20px;height: 12px;line-height: 12px;">
											<span class="price myfl" style="font: 16px arial;color: #666;line-height: 12px;">
												<span class="money_symbol" style="margin-right: 3px;">¥</span>
												<span class="money_num" style="text-decoration: line-through;">269.00</span>
											</span>
											<span class="apply myfr" style="font-size: 12px;color: #999;">7224人已申请</span>
										</p>
										<!--<a href="/activity/308049/1.html" target="_blank" style="margin:10px auto 0;display: block;width: 188px;" class="boderstyleff366f add_index_goodslink textcenter bdradius3 colorFF366f">免费领取</a>-->
									</div>
								</div>
								<!---->
							</li>
					
						</ul>
					</div>
					<!-- 商品列表 -->
					<div class="bd myfl">
						<ul class="picList clearfix" style="width: 980px;margin-bottom: 20px;">
							<?php foreach($tList as $vo): ?>
								<li class="laqu_goods_style">
									<a href="/tdetails" class="animatelink">
										<img class="animateimg" src="<?php echo $vo['product_logo']; ?>">
										<span class="hight_icon">高价值</span>
									</a>
									<div class="explain">
										<p class="paymentmode">
											<!---->
										</p>
										<p class="goods_name"><?php echo $vo['product_name']; ?></p>
										<p class="priceandapply clearfix">
											<span class="price myfl">
												<span class="money_symbol">¥</span>
												<span class="money_num"><?php echo $vo['product_price']; ?></span>
											</span>
											<span class="apply myfr"><?php echo $vo['user_counts']; ?>人已申请</span>
										</p>
										<a href="/tdetails" target="_blank" class="receive">免费领取</a>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="no_goodslist" style="height: 600px;width: 100%;background: #fff;display: none">
					<p style="width: 100%;text-align: center;padding-top: 120px;padding-bottom: 58px;">
						<img src="/img/business/not_findgoods.jpg"> </p>
					<p style="width: 100%;text-align: center;color: #4bb546;font-size: 28px;line-height: 72px;">抱歉，该类别下暂时没有商品......</p>
					<p style="width: 100%;text-align: center;color: #999;font-size: 22px;">拉趣会尽快上传，去看看其他商品吧！</p>
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