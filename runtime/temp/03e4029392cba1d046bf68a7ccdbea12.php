<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:88:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/index\view\index\index.html";i:1551164788;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\header.html";i:1551164819;s:86:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\top_nav_menu.html";i:1551164819;s:85:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\search_menu.html";i:1551164819;}*/ ?>
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
<link rel="stylesheet" href="<?php echo INDEX_STYLE; ?>css/index_page.css" />
<link rel="stylesheet" href="<?php echo INDEX_STYLE; ?>css/public_module/web_float.css" />
	</head>
<body style="background:#f5f5f5;">
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
		<!--banner-->
		<div class="homebanner">
			<div class="superslide">
				<div class="hd">
					<a class="prev" href="javascript:void(0)"></a>
					<a class="next" href="javascript:void(0)"></a>
					<ul>
						<li class=""></li>
						<li class=""></li>
						<li class=""></li>
						<li class=""></li>
						<li class=""></li>
						<li class="on"></li>
					</ul>
				</div>
				<div class="bd">
					<ul class="clearfix">
						<li style="background: url(&quot;https://laquimage.b0.upaiyun.com/system/2018/12/21/file1545388075575_409.jpg!origin&quot;) center center no-repeat; display: none;">
							<a href="https://www.laqu.com/wealth/user/get/diamond/landing" target="_blank"></a>
						</li>
						<li style="background: url(&quot;https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545320989315_985.png!origin&quot;) center center no-repeat; display: none;">
							<a href="https://www.laqu.com/activity/298834/1.html" target="_blank"></a>
						</li>
						<li style="background: url(&quot;https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545320934526_797.png!origin&quot;) center center no-repeat; display: none;">
							<a href="http://www.laqu.com/activity/294492/1.html" target="_blank"></a>
						</li>
						<li style="background: url(&quot;https://laquimage.b0.upaiyun.com/system/2018/12/21/file1545375580052_785.jpg!origin&quot;) center center no-repeat; display: none;">
							<a href="https://www.laqu.com/activity/299123/1.html" target="_blank"></a>
						</li>
						<li style="background: url(&quot;https://laquimage.b0.upaiyun.com/system/2018/12/21/file1545366195922_160.jpg!origin&quot;) center center no-repeat; display: none;">
							<a href="http://www.laqu.com/wealth/user/spokesman/topic" target="_blank"></a>
						</li>
						<li style="background: url(&quot;https://laquimage.b0.upaiyun.com/system/2018/12/21/file1545365883417_083.jpg!origin&quot;) center center no-repeat; display: list-item;">
							<a href="http://www.laqu.com/user/growth/system/task" target="_blank"></a>
						</li>
					</ul>
				</div>
				<div class="content clearfix">
					<div class="myfr">
						<div class="unlisted_top">
							<a href="/go-login">
								<img src="/img/home_banner/banner_portrait.png" class="default">
							</a>
							<a href="/go-login" style="color: #666;">
								<span style="display: block;text-align: center;color: #666;margin-top: 10px;">Hi~ 上午好</span>
							</a>
						</div>
						<div class="unlisted_title tabchange">
							<p class="clearfix">
								<span>公告</span>
								<i style="display: inline-block;float: left;height: 12px;width: 1px; background: #999999;margin-top: 6px;"></i>
								<span class="unselect">规则</span>
							</p>
							<ul>
								<li>
									<a href="http://www.laqu.com/help/notice_j">关于对部分用户的违规行为进行整治的公告</a>
								</li>
								<li>
									<a href="http://www.laqu.com/help/notice_i">关于同一用户多个账户申请同一商品的处理方式公告</a>
								</li>
							</ul>
							<ul class="hide">
								<li>
									<a href="http://laqu.com/help/user_getaward" target="_blank">新人必中领取规则</a>
								</li>
								<li>
									<a href="http://laqu.com/help/user_goldorder" target="_blank">金币必中规则</a>
								</li>
							</ul>
						</div>
						<div class="unlisted_bottom">
							<div class="unlisted_bottom_top">
								<div class="unlisted_bottom_top-left myfl">
									<p>
										<span>314244</span>
										<br> 商品在线 </p>
								</div>
								<div class="unlisted_bottom_top-right myfl">
									<p>
										<span>186876</span>
										<br> 商家入驻 </p>
								</div>
							</div>
							<div class="unlisted_bottom_bottom">
								<div class="unlisted_bottom_bottom-left myfl">
									<p>
										<span>1215319</span>
										<br> 活动发布 </p>
								</div>
								<div class="unlisted_bottom_bottom-right myfl">
									<p>
										<span>293988</span>
										<br> 活跃用户 </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="homebanner_buttommenubg"></div>
			<div class="homebanner_buttommenu mainm">
				<span class="homebanner_buttommenu_line"></span>
				<a href="/help/user_guideapply" target="_blank">
					<span>新手入门</span>
					<i>5分钟教你轻松玩转拉趣，千万商品等你来</i>
				</a>
				<span class="homebanner_buttommenu_line"></span>
				<a href="/html/home/win_esoterica.html" target="_blank">
					<span>如何提高中奖率</span>
					<i>教您快速提升自己中奖值，赢得更多中奖机会，战胜他人</i>
				</a>
				<span class="homebanner_buttommenu_line"></span>
				<a href="/item?jump=1&amp;shopType=&amp;itemCategoryId=&amp;sortType=ACTIVITY_RELEASE_DATE&amp;sortEnum=DESC&amp;itemType=PIN_DUO_DUO"
				 target="_blank">
					<span>拼多多优选</span>
					<i>玩转拼多多，中奖率更高，中奖次数更多</i>
				</a>
				<span class="homebanner_buttommenu_line"></span>
				<a href="/wealth/user/spokesman/topic" target="_blank" style="width: 217px;">
					<span>邀请有奖</span>
					<i>邀请好友一起加入拉趣，好友下单您就可得10元现金奖励</i>
				</a>
				<span class="homebanner_buttommenu_line"></span>
			</div>
		</div>
		<div style="width: 100%;background: #fff;padding-bottom: 20px;">
			<!--广告列表-->
			<div class="advertising_content" style="width: 1100px;margin: auto;overflow: hidden;">
				<ul class="clearfix" style="margin-top: 15px;width: 1200px">
					<li style="height: 240px;width: 208px;margin-right: 15px;float: left">
						<a href="https://www.laqu.com/item?jump=1&amp;shopType=&amp;itemCategoryId=&amp;sortType=APPLY_MEMBER_COUNT&amp;sortEnum=DESC&amp;itemType=NORMAL&amp;reward=10&amp;usedHuabei=0&amp;usedCredit=0"
						 target="_blank" style="display: block;height: 240px;width: 208px;">
							<img src="https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545319462836_809.jpg" style="width: 208px;height: 240px;"> </a>
					</li>
					<li style="height: 240px;width: 208px;margin-right: 15px;float: left">
						<a href="https://www.laqu.com/coin/seckill?sortType=4" target="_blank" style="display: block;height: 240px;width: 208px;">
							<img src="https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545319517149_722.jpg" style="width: 208px;height: 240px;"> </a>
					</li>
					<li style="height: 240px;width: 208px;margin-right: 15px;float: left">
						<a href="https://www.laqu.com/item?jump=1&amp;shopType=&amp;itemCategoryId=&amp;sortType=APPLY_MEMBER_COUNT&amp;sortEnum=DESC&amp;itemType=HIGH_VALUES"
						 target="_blank" style="display: block;height: 240px;width: 208px;">
							<img src="https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545319564208_704.jpg" style="width: 208px;height: 240px;"> </a>
					</li>
					<li style="height: 240px;width: 208px;margin-right: 15px;float: left">
						<a href="https://www.laqu.com/item?jump=1&amp;shopType=&amp;itemCategoryId=&amp;sortType=ACTIVITY_RELEASE_DATE&amp;sortEnum=DESC&amp;itemType=COUPON"
						 target="_blank" style="display: block;height: 240px;width: 208px;">
							<img src="https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545319634267_491.jpg" style="width: 208px;height: 240px;"> </a>
					</li>
					<li style="height: 240px;width: 208px;margin-right: 15px;float: left">
						<a href="https://www.laqu.com/item?jump=1&amp;shopType=&amp;itemCategoryId=&amp;secondCategoryId=&amp;itemType=HIGH_AWARD_RATE&amp;sortEnum=DESC"
						 target="_blank" style="display: block;height: 240px;width: 208px;">
							<img src="https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545319677876_855.jpg" style="width: 208px;height: 240px;"> </a>
					</li>
				</ul>
			</div>
			<!--今日上新标题-->
			<div class="novice_title">
				<h2 class="myfl">今日上新</h2>
				<a href="/tasks" class="myfr">查看更多</a>
			</div>
			<!--今日上新商品-->
			<div class="novice_content">
				<ul class="clearfix" style="width: 1120px;">
					<?php foreach($atList as $vo): ?>
						<li class="laqu_goods_style laqu_goods_style1">
							<a href="/tdetails/<?php echo $vo['id']; ?>" target="_blank" class="animatelink">
								<img class="animateimg" src="//39.108.99.113/<?php echo $vo['product_logo']; ?>"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<span class="good_label">下单有奖</span>
									<!---->
									<!---->
									<span class="good_label">券</span>
								</p>
								<p class="goods_name">CC棒一支</p>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num"><?php echo $vo['product_price']; ?></span>
									</span>
									<span class="apply myfr"><?php echo $vo['user_counts']; ?>人已申请</span>
								</p>
								<a href="/act?<?php echo $vo['id']; ?>" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<!--优质推荐标题-->
		<div class="recommend_title clearfix" style="position: relative;">
			<h2 class="myfl">热门推荐</h2>
			<div class="myfr">
				<span class="tabplatform select">优质推荐
					<!--<img src="/img/web_index/index_goods_icon.png"/>-->
				</span>
				<span class="highvalue">高价值商品
					<!--<img src="/img/web_index/index_goods_icon.png" class="hide"/>-->
				</span>
				<span class="highwinrate">高中奖率
					<!--<img src="/img/web_index/index_goods_icon.png" class="hide"/>-->
				</span>
				<a href="/item" style="color: #333;font-size: 16px;background: none">全部</a>
			</div>
			<!--优质推荐引导-->
			<div class="new_index_guidestep6" style="display: none;">
				<span class="new_index_guidestepimg"></span>
				<span class="new_index_guidestepfont">您可以选择平台推荐的商品、高价值商品、当然还有高中 奖率商品，95%的人都选择在高中奖率分类中挑选商品~</span>
				<span class="new_index_guidestepbtn" id="new_guidestep_eightstep"></span>
				<span class="new_index_guidestepoff"></span>
			</div>
			<div class="new_index_guidestep7" style="display: none;">
				<span class="new_index_guidestepwire" style="top: 10px;"></span>
				<span class="new_index_guidestepfont" style="top: 0;">申请下面任意一款宝贝，点击红色按钮，进入商品详情免费申请~</span>
				<span class="new_index_guidestepoff"></span>
			</div>
		</div>
		<!--优质推荐商品-->
		<div class="recommend_content">
			<div class="hd">
				<a class="prev prevStop"></a>
				<a class="next"></a>
			</div>
			<div class="bd">
				<div class="tempWrap" style="overflow:hidden; position:relative; width:1110px">
					<ul style="width: 4440px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -1110px;">
						<li class="laqu_goods_style clone" style="float: left; width: 212px;">
							<a href="/activity/297547/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/12/18/file1545117631688_088.png!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/297547/1.html" target="_blank" class="goods_name">洗车毛巾擦车巾汽车用吸水加厚</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">16.80</span>
									</span>
									<span class="apply myfr">858人已申请</span>
								</p>
								<a href="/activity/297547/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style clone" style="float: left; width: 212px;">
							<a href="/activity/299472/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/12/19/file1545211771008_384.jpg_430x430q90.jpg!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/299472/1.html" target="_blank" class="goods_name">圣诞专属纯银雪花耳钉一对</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">98.00</span>
									</span>
									<span class="apply myfr">420人已申请</span>
								</p>
								<a href="/activity/299472/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style clone" style="float: left; width: 212px;">
							<a href="/activity/298384/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545291573977_499.jpg!232x232">
								<span class="hight_icon">高价值</span>
							</a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/298384/1.html" target="_blank" class="goods_name">双面尼仿羊绒大衣</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">198.00</span>
									</span>
									<span class="apply myfr">10407人已申请</span>
								</p>
								<a href="/activity/298384/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style clone" style="float: left; width: 212px;">
							<a href="/activity/298771/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/14/img1544776274049_515.jpg!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/298771/1.html" target="_blank" class="goods_name">小清新棉服女</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">169.00</span>
									</span>
									<span class="apply myfr">9789人已申请</span>
								</p>
								<a href="/activity/298771/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style clone" style="float: left; width: 212px;">
							<a href="/activity/297307/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/18/img1545098316279_258.jpg!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/297307/1.html" target="_blank" class="goods_name">OUSDI电子烟男女士大烟雾戒烟</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">129.00</span>
									</span>
									<span class="apply myfr">531人已申请</span>
								</p>
								<a href="/activity/297307/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style" style="float: left; width: 212px;">
							<a href="/activity/296420/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/14/img1544776274049_515.jpg!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/296420/1.html" target="_blank" class="goods_name">小清新棉服女</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">169.00</span>
									</span>
									<span class="apply myfr">14148人已申请</span>
								</p>
								<a href="/activity/296420/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style" style="float: left; width: 212px;">
							<a href="/activity/298374/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/19/img1545207685929_326.jpg!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/298374/1.html" target="_blank" class="goods_name">泰国牛奶衣女士超柔保暖修身</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">99.00</span>
									</span>
									<span class="apply myfr">13455人已申请</span>
								</p>
								<a href="/activity/298374/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style" style="float: left; width: 212px;">
							<a href="/activity/298768/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/20/img1545279385557_387.jpg!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/298768/1.html" target="_blank" class="goods_name">羽绒棉服女短款时尚棉衣女</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">149.00</span>
									</span>
									<span class="apply myfr">12894人已申请</span>
								</p>
								<a href="/activity/298768/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style" style="float: left; width: 212px;">
							<a href="/activity/297253/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/18/img1545095919665_618.jpg!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/297253/1.html" target="_blank" class="goods_name">纯棉运动休闲 套头衫</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">119.00</span>
									</span>
									<span class="apply myfr">3234人已申请</span>
								</p>
								<a href="/activity/297253/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style" style="float: left; width: 212px;">
							<a href="/activity/299123/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/11/5/file1541384892725_646.jpg!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/299123/1.html" target="_blank" class="goods_name">潮流男皮鞋</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">138.00</span>
									</span>
									<span class="apply myfr">3609人已申请</span>
								</p>
								<a href="/activity/299123/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style" style="float: left; width: 212px;">
							<a href="/activity/297547/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/12/18/file1545117631688_088.png!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/297547/1.html" target="_blank" class="goods_name">洗车毛巾擦车巾汽车用吸水加厚</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">16.80</span>
									</span>
									<span class="apply myfr">858人已申请</span>
								</p>
								<a href="/activity/297547/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style" style="float: left; width: 212px;">
							<a href="/activity/299472/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/12/19/file1545211771008_384.jpg_430x430q90.jpg!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/299472/1.html" target="_blank" class="goods_name">圣诞专属纯银雪花耳钉一对</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">98.00</span>
									</span>
									<span class="apply myfr">420人已申请</span>
								</p>
								<a href="/activity/299472/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style" style="float: left; width: 212px;">
							<a href="/activity/298384/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545291573977_499.jpg!232x232">
								<span class="hight_icon">高价值</span>
							</a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/298384/1.html" target="_blank" class="goods_name">双面尼仿羊绒大衣</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">198.00</span>
									</span>
									<span class="apply myfr">10407人已申请</span>
								</p>
								<a href="/activity/298384/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style" style="float: left; width: 212px;">
							<a href="/activity/298771/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/14/img1544776274049_515.jpg!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/298771/1.html" target="_blank" class="goods_name">小清新棉服女</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">169.00</span>
									</span>
									<span class="apply myfr">9789人已申请</span>
								</p>
								<a href="/activity/298771/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style" style="float: left; width: 212px;">
							<a href="/activity/297307/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/18/img1545098316279_258.jpg!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/297307/1.html" target="_blank" class="goods_name">OUSDI电子烟男女士大烟雾戒烟</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">129.00</span>
									</span>
									<span class="apply myfr">531人已申请</span>
								</p>
								<a href="/activity/297307/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style clone" style="float: left; width: 212px;">
							<a href="/activity/296420/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/14/img1544776274049_515.jpg!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/296420/1.html" target="_blank" class="goods_name">小清新棉服女</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">169.00</span>
									</span>
									<span class="apply myfr">14148人已申请</span>
								</p>
								<a href="/activity/296420/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style clone" style="float: left; width: 212px;">
							<a href="/activity/298374/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/19/img1545207685929_326.jpg!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/298374/1.html" target="_blank" class="goods_name">泰国牛奶衣女士超柔保暖修身</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">99.00</span>
									</span>
									<span class="apply myfr">13455人已申请</span>
								</p>
								<a href="/activity/298374/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style clone" style="float: left; width: 212px;">
							<a href="/activity/298768/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/20/img1545279385557_387.jpg!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/298768/1.html" target="_blank" class="goods_name">羽绒棉服女短款时尚棉衣女</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">149.00</span>
									</span>
									<span class="apply myfr">12894人已申请</span>
								</p>
								<a href="/activity/298768/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style clone" style="float: left; width: 212px;">
							<a href="/activity/297253/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/18/img1545095919665_618.jpg!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/297253/1.html" target="_blank" class="goods_name">纯棉运动休闲 套头衫</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">119.00</span>
									</span>
									<span class="apply myfr">3234人已申请</span>
								</p>
								<a href="/activity/297253/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
						<li class="laqu_goods_style clone" style="float: left; width: 212px;">
							<a href="/activity/299123/1.html" target="_blank" class="animatelink">
								<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/11/5/file1541384892725_646.jpg!232x232"> </a>
							<div class="explain">
								<p class="paymentmode clearfix">
									<!---->
								</p>
								<a href="/activity/299123/1.html" target="_blank" class="goods_name">潮流男皮鞋</a>
								<p class="priceandapply clearfix">
									<span class="price myfl">
										<span class="money_symbol">¥</span>
										<span class="money_num">138.00</span>
									</span>
									<span class="apply myfr">3609人已申请</span>
								</p>
								<a href="/activity/299123/1.html" target="_blank" class="receive">免费领取</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--拼团开奖标题-->
		<div class="fight_title group_title">
			<h2 class="myfl">拼团开奖</h2>
			<div class="myfr">
				<a href="/item?jump=1&amp;shopType=&amp;itemCategoryId=&amp;sortType=ACTIVITY_RELEASE_DATE&amp;sortEnum=DESC&amp;itemType=REAL_TIME_LOTTERY">查看更多</a>
			</div>
		</div>
		<!--拼团开奖商品-->
		<div class="fight_content">
			<ul class="clearfix">
				<li style="width: 434px;height: 352px; margin-right: 10px;float: left">
					<a href="https://www.laqu.com/item?pintuan=1&amp;jump=1&amp;shopType=&amp;itemCategoryId=&amp;sortType=ACTIVITY_RELEASE_DATE&amp;sortEnum=DESC&amp;itemType=REAL_TIME_LOTTERY"
					 target="_blank" style="display: block;width: 434px;height: 352px;">
						<img src="https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545318968238_161.png" style="width: 434px;height: 352px;"> </a>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/233626/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/laqu/images/img1537256669399_236.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/233626/-1.html" target="_blank" class="goods_name_progres">透明 一次性水杯 50个</a>
						<!--<p class="progres">-->
						<!--<em style="background:-webkit-linear-gradient(left, #ff527f , #ff887a);width:0.0%;max-width: 212px;"></em>-->
						<!--</p>-->
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">10.00</span>
							</span>
							<span class="apply myfr">距离开奖仅差5人</span>
						</p>
						<!--<p class="fight_link clearfix">-->
						<a href="/activity/233626/-1.html" target="_blank" class="receive">免费领取</a>
						<!--<span class="myfr">加速开奖</span>-->
						<input type="hidden" value="233626">
						<!--</p>-->
					</div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/297919/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/11/25/img1543157758435_175.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
						</p>
						<a href="/activity/297919/-1.html" target="_blank" class="goods_name_progres">厨具不锈钢硅胶铲子</a>
						<!--<p class="progres">-->
						<!--<em style="background:-webkit-linear-gradient(left, #ff527f , #ff887a);width:60.0%;max-width: 212px;"></em>-->
						<!--</p>-->
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">34.00</span>
							</span>
							<span class="apply myfr">距离开奖仅差4人</span>
						</p>
						<!--<p class="fight_link clearfix">-->
						<a href="/activity/297919/-1.html" target="_blank" class="receive">免费领取</a>
						<!--<span class="myfr">加速开奖</span>-->
						<input type="hidden" value="297919">
						<!--</p>-->
					</div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/295544/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/12/15/file1544838110064_390.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
						</p>
						<a href="/activity/295544/-1.html" target="_blank" class="goods_name_progres">高档蕾丝性感女士内裤1条装</a>
						<!--<p class="progres">-->
						<!--<em style="background:-webkit-linear-gradient(left, #ff527f , #ff887a);width:60.0%;max-width: 212px;"></em>-->
						<!--</p>-->
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">16.90</span>
							</span>
							<span class="apply myfr">距离开奖仅差4人</span>
						</p>
						<!--<p class="fight_link clearfix">-->
						<a href="/activity/295544/-1.html" target="_blank" class="receive">免费领取</a>
						<!--<span class="myfr">加速开奖</span>-->
						<input type="hidden" value="295544">
						<!--</p>-->
					</div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/299732/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/12/21/file1545380514523_471.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
							<span class="good_label">下单有奖</span>
						</p>
						<a href="/activity/299732/-1.html" target="_blank" class="goods_name_progres">手工剪纸折纸立体大全书2本</a>
						<!--<p class="progres">-->
						<!--<em style="background:-webkit-linear-gradient(left, #ff527f , #ff887a);width:40.0%;max-width: 212px;"></em>-->
						<!--</p>-->
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">12.80</span>
							</span>
							<span class="apply myfr">距离开奖仅差3人</span>
						</p>
						<!--<p class="fight_link clearfix">-->
						<a href="/activity/299732/-1.html" target="_blank" class="receive">免费领取</a>
						<!--<span class="myfr">加速开奖</span>-->
						<input type="hidden" value="299732">
						<!--</p>-->
					</div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/276998/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/apply/2018/9/14/img1536917152722_394.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">下单有奖</span>
						</p>
						<a href="/activity/276998/-1.html" target="_blank" class="goods_name_progres">2碗2勺</a>
						<!--<p class="progres">-->
						<!--<em style="background:-webkit-linear-gradient(left, #ff527f , #ff887a);width:0.0%;max-width: 212px;"></em>-->
						<!--</p>-->
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">19.80</span>
							</span>
							<span class="apply myfr">距离开奖仅差4人</span>
						</p>
						<!--<p class="fight_link clearfix">-->
						<a href="/activity/276998/-1.html" target="_blank" class="receive">免费领取</a>
						<!--<span class="myfr">加速开奖</span>-->
						<input type="hidden" value="276998">
						<!--</p>-->
					</div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/282185/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/apply/2018/9/14/img1536917152722_394.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">下单有奖</span>
						</p>
						<a href="/activity/282185/-1.html" target="_blank" class="goods_name_progres">2碗2勺</a>
						<!--<p class="progres">-->
						<!--<em style="background:-webkit-linear-gradient(left, #ff527f , #ff887a);width:25.0%;max-width: 212px;"></em>-->
						<!--</p>-->
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">19.80</span>
							</span>
							<span class="apply myfr">距离开奖仅差3人</span>
						</p>
						<!--<p class="fight_link clearfix">-->
						<a href="/activity/282185/-1.html" target="_blank" class="receive">免费领取</a>
						<!--<span class="myfr">加速开奖</span>-->
						<input type="hidden" value="282185">
						<!--</p>-->
					</div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/276316/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/apply/2018/9/14/img1536917152722_394.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">下单有奖</span>
						</p>
						<a href="/activity/276316/-1.html" target="_blank" class="goods_name_progres">2碗2勺</a>
						<!--<p class="progres">-->
						<!--<em style="background:-webkit-linear-gradient(left, #ff527f , #ff887a);width:25.0%;max-width: 212px;"></em>-->
						<!--</p>-->
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">19.80</span>
							</span>
							<span class="apply myfr">距离开奖仅差3人</span>
						</p>
						<!--<p class="fight_link clearfix">-->
						<a href="/activity/276316/-1.html" target="_blank" class="receive">免费领取</a>
						<!--<span class="myfr">加速开奖</span>-->
						<input type="hidden" value="276316">
						<!--</p>-->
					</div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/275647/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/apply/2018/9/14/img1536917152722_394.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">下单有奖</span>
						</p>
						<a href="/activity/275647/-1.html" target="_blank" class="goods_name_progres">2碗2勺</a>
						<!--<p class="progres">-->
						<!--<em style="background:-webkit-linear-gradient(left, #ff527f , #ff887a);width:75.0%;max-width: 212px;"></em>-->
						<!--</p>-->
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">19.80</span>
							</span>
							<span class="apply myfr">距离开奖仅差1人</span>
						</p>
						<!--<p class="fight_link clearfix">-->
						<a href="/activity/275647/-1.html" target="_blank" class="receive">免费领取</a>
						<!--<span class="myfr">加速开奖</span>-->
						<input type="hidden" value="275647">
						<!--</p>-->
					</div>
				</li>
			</ul>
		</div>
		<!--服饰服装标题-->
		<div class="fight_title clothe_title">
			<h2 class="myfl">服饰服装</h2>
			<div class="myfr">
				<a href="/item?jump=1&amp;shopType=&amp;itemCategoryId=21&amp;sortType=ACTIVITY_RELEASE_DATE&amp;sortEnum=DESC&amp;itemType=ALL">查看更多</a>
			</div>
		</div>
		<!--服饰服装商品-->
		<div class="fight_content">
			<ul class="clearfix">
				<li style="width: 212px;height: 352px; margin-right: 10px;float: left">
					<a href="https://www.laqu.com/item?jump=1&amp;shopType=&amp;itemCategoryId=21&amp;secondCategoryId=1&amp;sortType=APPLY_MEMBER_COUNT&amp;sortEnum=DESC&amp;itemType=NORMAL"
					 target="_blank" style="display: block;width: 212px;height: 352px;">
						<img src="https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545319022605_005.png" style="width: 212px;height: 352px;"> </a>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300701/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/5/img1543996699985_885.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300701/-1.html" target="_blank" class="goods_name_progres">心机设计感毛衣</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">89.00</span>
							</span>
							<span class="apply myfr">258人已申请</span>
						</p>
						<a href="/activity/300701/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300701"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300694/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/23/img1545555542785_758.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300694/-1.html" target="_blank" class="goods_name_progres">适合胯大的半身裙秋冬</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">59.00</span>
							</span>
							<span class="apply myfr">318人已申请</span>
						</p>
						<a href="/activity/300694/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300694"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300370/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/10/30/img1540881279585_983.jpg!232x232">
						<span class="hight_icon">高价值</span>
					</a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300370/-1.html" target="_blank" class="goods_name_progres">三角连体泳衣女</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">158.00</span>
							</span>
							<span class="apply myfr">24人已申请</span>
						</p>
						<a href="/activity/300370/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300370"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300673/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/23/img1545554290430_865.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300673/-1.html" target="_blank" class="goods_name_progres">蕾丝打底衫女</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">69.00</span>
							</span>
							<span class="apply myfr">630人已申请</span>
						</p>
						<a href="/activity/300673/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300673"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300675/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/23/img1545554063324_184.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300675/-1.html" target="_blank" class="goods_name_progres">黑色毛衣</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">69.00</span>
							</span>
							<span class="apply myfr">798人已申请</span>
						</p>
						<a href="/activity/300675/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300675"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300665/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/23/img1545553040441_871.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300665/-1.html" target="_blank" class="goods_name_progres">开叉杏色毛衣</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">65.00</span>
							</span>
							<span class="apply myfr">1008人已申请</span>
						</p>
						<a href="/activity/300665/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300665"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300658/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/23/img1545552630600_343.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300658/-1.html" target="_blank" class="goods_name_progres">新杏色毛衣</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">59.00</span>
							</span>
							<span class="apply myfr">963人已申请</span>
						</p>
						<a href="/activity/300658/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300658"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300656/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/12/15/file1544864636542_369.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300656/-1.html" target="_blank" class="goods_name_progres">适合胯大的半身裙秋冬</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">59.00</span>
							</span>
							<span class="apply myfr">903人已申请</span>
						</p>
						<a href="/activity/300656/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300656"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300642/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/23/img1545551312702_270.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300642/-1.html" target="_blank" class="goods_name_progres">法国小众连衣裙</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">48.00</span>
							</span>
							<span class="apply myfr">1026人已申请</span>
						</p>
						<a href="/activity/300642/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300642"> </div>
				</li>
			</ul>
		</div>
		<!--鞋子箱包标题-->
		<div class="fight_title shoe_title">
			<h2 class="myfl">鞋子箱包</h2>
			<div class="myfr">
				<a href="/item?jump=1&amp;shopType=&amp;itemCategoryId=3&amp;sortType=ACTIVITY_RELEASE_DATE&amp;sortEnum=DESC&amp;itemType=ALL">查看更多</a>
			</div>
		</div>
		<!--鞋子箱包商品-->
		<div class="fight_content">
			<ul class="clearfix">
				<li style="width: 212px;height: 352px; margin-right: 10px;float: left">
					<a href="https://www.laqu.com/item?jump=1&amp;shopType=&amp;itemCategoryId=3&amp;sortType=APPLY_MEMBER_COUNT&amp;sortEnum=DESC&amp;itemType=NORMAL"
					 target="_blank" style="display: block;width: 212px;height: 352px;">
						<img src="https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545319151705_611.png" style="width: 212px;height: 352px;"> </a>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300630/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/23/img1545550482654_069.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300630/-1.html" target="_blank" class="goods_name_progres">椰子350V2跑步款</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">118.00</span>
							</span>
							<span class="apply myfr">51人已申请</span>
						</p>
						<a href="/activity/300630/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300630"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300204/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/22/img1545465198058_744.jpg!232x232">
						<span class="hight_icon">高价值</span>
					</a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300204/-1.html" target="_blank" class="goods_name_progres">军迷作战靴登山靴</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">152.00</span>
							</span>
							<span class="apply myfr">3081人已申请</span>
						</p>
						<a href="/activity/300204/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300204"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/299884/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/21/img1545395539897_205.JPG!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/299884/-1.html" target="_blank" class="goods_name_progres">钱包女学生韩版多卡位</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">18.90</span>
							</span>
							<span class="apply myfr">4710人已申请</span>
						</p>
						<a href="/activity/299884/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="299884"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300161/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/22/img1545459149894_122.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300161/-1.html" target="_blank" class="goods_name_progres">钱包男士长款超薄青年简约版</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">16.00</span>
							</span>
							<span class="apply myfr">930人已申请</span>
						</p>
						<a href="/activity/300161/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300161"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/299126/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/20/img1545302531153_323.png!232x232">
						<span class="hight_icon">高价值</span>
					</a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">下单有奖</span>
						</p>
						<a href="/activity/299126/-1.html" target="_blank" class="goods_name_progres">牛津大学书包中小学生休闲书包</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">159.00</span>
							</span>
							<span class="apply myfr">7935人已申请</span>
						</p>
						<a href="/activity/299126/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="299126"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/299824/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/21/img1545385429359_675.jpg!232x232">
						<span class="hight_icon">高价值</span>
					</a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/299824/-1.html" target="_blank" class="goods_name_progres">男款马丁靴</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">169.00</span>
							</span>
							<span class="apply myfr">6600人已申请</span>
						</p>
						<a href="/activity/299824/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="299824"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/299580/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/21/img1545373967281_126.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
						</p>
						<a href="/activity/299580/-1.html" target="_blank" class="goods_name_progres">百搭棉布袋</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">12.00</span>
							</span>
							<span class="apply myfr">714人已申请</span>
						</p>
						<a href="/activity/299580/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="299580"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/299495/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/11/25/img1543118748623_133.jpg!232x232">
						<span class="hight_icon">高价值</span>
					</a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/299495/-1.html" target="_blank" class="goods_name_progres">男士休闲鞋</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">158.00</span>
							</span>
							<span class="apply myfr">2592人已申请</span>
						</p>
						<a href="/activity/299495/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="299495"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/299170/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/14/img1544766897781_933.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/299170/-1.html" target="_blank" class="goods_name_progres">女家居棉拖鞋</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">9.90</span>
							</span>
							<span class="apply myfr">1239人已申请</span>
						</p>
						<a href="/activity/299170/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="299170"> </div>
				</li>
			</ul>
		</div>
		<!--护肤彩妆标题-->
		<div class="fight_title cosmetics_title">
			<h2 class="myfl">护肤彩妆</h2>
			<div class="myfr">
				<a href="/item?jump=1&amp;shopType=&amp;itemCategoryId=7&amp;sortType=ACTIVITY_RELEASE_DATE&amp;sortEnum=DESC&amp;itemType=ALL">查看更多</a>
			</div>
		</div>
		<!--护肤彩妆商品-->
		<div class="fight_content">
			<ul class="clearfix">
				<li style="width: 212px;height: 352px; margin-right: 10px;float: left">
					<a href="https://www.laqu.com/item?jump=1&amp;shopType=&amp;itemCategoryId=7&amp;sortType=APPLY_MEMBER_COUNT&amp;sortEnum=DESC&amp;itemType=NORMAL"
					 target="_blank" style="display: block;width: 212px;height: 352px;">
						<img src="https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545319205856_560.png" style="width: 212px;height: 352px;"> </a>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300698/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/12/21/file1545383356122_953.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
							<span class="good_label">下单有奖</span>
						</p>
						<a href="/activity/300698/-1.html" target="_blank" class="goods_name_progres">CC棒一支</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">88.00</span>
							</span>
							<span class="apply myfr">0人已申请</span>
						</p>
						<a href="/activity/300698/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300698"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300614/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/23/img1545553444850_771.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300614/-1.html" target="_blank" class="goods_name_progres">桂花洁面皂精油皂手工皂</a>
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">39.80</span>
							</span>
							<span class="apply myfr">距离开奖仅差28人</span>
						</p>
						<a href="/activity/300614/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300614"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300254/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/22/img1545467338531_510.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300254/-1.html" target="_blank" class="goods_name_progres">RAY面膜金色10片</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">49.00</span>
							</span>
							<span class="apply myfr">708人已申请</span>
						</p>
						<a href="/activity/300254/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300254"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300591/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/23/img1545546004581_739.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
						</p>
						<a href="/activity/300591/-1.html" target="_blank" class="goods_name_progres">V脸面膜一片 秒变瓜子脸</a>
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">8.80</span>
							</span>
							<span class="apply myfr">距离开奖仅差2人</span>
						</p>
						<a href="/activity/300591/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300591"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/280567/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/apply/2018/10/4/img1538656309323_611.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">下单有奖</span>
						</p>
						<a href="/activity/280567/-1.html" target="_blank" class="goods_name_progres">嫩白补水面部刮痧按摩面部精油</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">88.00</span>
							</span>
							<span class="apply myfr">120人已申请</span>
						</p>
						<a href="/activity/280567/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="280567"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300481/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/laqu/images/2018/9/13/img1536807077112_295.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300481/-1.html" target="_blank" class="goods_name_progres">鸡皮肤 干燥脱皮 鱼鳞皮肤霜1盒</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">48.00</span>
							</span>
							<span class="apply myfr">54人已申请</span>
						</p>
						<a href="/activity/300481/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300481"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300423/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/11/26/file1543197063003_106.jpg_430x430q90.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300423/-1.html" target="_blank" class="goods_name_progres">氨基酸洁面慕斯卸妆深层清洁</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">44.00</span>
							</span>
							<span class="apply myfr">741人已申请</span>
						</p>
						<a href="/activity/300423/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300423"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/298567/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/11/21/img1542769605163_823.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/298567/-1.html" target="_blank" class="goods_name_progres">硬芯拉线眉笔</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">19.90</span>
							</span>
							<span class="apply myfr">687人已申请</span>
						</p>
						<a href="/activity/298567/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="298567"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/299898/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/laqu/images/img1536216225583_529.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
						</p>
						<a href="/activity/299898/-1.html" target="_blank" class="goods_name_progres">祛斑美白霜 30g</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">89.90</span>
							</span>
							<span class="apply myfr">300人已申请</span>
						</p>
						<a href="/activity/299898/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="299898"> </div>
				</li>
			</ul>
		</div>
		<!--母婴用品标题-->
		<div class="fight_title fransnana_title">
			<h2 class="myfl">母婴用品</h2>
			<div class="myfr">
				<a href="/item?jump=1&amp;shopType=&amp;itemCategoryId=8&amp;sortType=ACTIVITY_RELEASE_DATE&amp;sortEnum=DESC&amp;itemType=ALL">查看更多</a>
			</div>
		</div>
		<!--母婴用品商品-->
		<div class="fight_content">
			<ul class="clearfix">
				<li style="width: 212px;height: 352px; margin-right: 10px;float: left">
					<a href="https://www.laqu.com/item?jump=1&amp;shopType=&amp;itemCategoryId=8&amp;sortType=APPLY_MEMBER_COUNT&amp;sortEnum=DESC&amp;itemType=NORMAL"
					 target="_blank" style="display: block;width: 212px;height: 352px;">
						<img src="https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545319247782_464.png" style="width: 212px;height: 352px;"> </a>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300615/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/23/img1545549637502_543.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300615/-1.html" target="_blank" class="goods_name_progres">日本手机防辐射贴</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">118.00</span>
							</span>
							<span class="apply myfr">51人已申请</span>
						</p>
						<a href="/activity/300615/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300615"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/299237/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/12/23/file1545532910144_688.jpg_430x430q90.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/299237/-1.html" target="_blank" class="goods_name_progres">泰迪熊毛绒玩具60厘米</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">43.00</span>
							</span>
							<span class="apply myfr">4935人已申请</span>
						</p>
						<a href="/activity/299237/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="299237"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300478/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/12/img1544580583257_682.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
						</p>
						<a href="/activity/300478/-1.html" target="_blank" class="goods_name_progres">全包便携杯套</a>
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">39.00</span>
							</span>
							<span class="apply myfr">距离开奖仅差6人</span>
						</p>
						<a href="/activity/300478/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300478"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300473/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/23/img1545531418675_319.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
						</p>
						<a href="/activity/300473/-1.html" target="_blank" class="goods_name_progres">便携杯套 全包裹实用</a>
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">39.00</span>
							</span>
							<span class="apply myfr">距离开奖仅差6人</span>
						</p>
						<a href="/activity/300473/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300473"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300457/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/23/img1545529645597_286.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300457/-1.html" target="_blank" class="goods_name_progres">两面使用杯套</a>
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">29.00</span>
							</span>
							<span class="apply myfr">距离开奖仅差8人</span>
						</p>
						<a href="/activity/300457/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300457"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300452/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/23/img1545529000058_091.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
						</p>
						<a href="/activity/300452/-1.html" target="_blank" class="goods_name_progres">两面使用杯套</a>
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">29.00</span>
							</span>
							<span class="apply myfr">距离开奖仅差10人</span>
						</p>
						<a href="/activity/300452/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300452"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300160/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/22/img1545458942963_927.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300160/-1.html" target="_blank" class="goods_name_progres">孕产妇海藻钙</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">169.00</span>
							</span>
							<span class="apply myfr">237人已申请</span>
						</p>
						<a href="/activity/300160/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300160"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300156/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/22/img1545458804685_918.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300156/-1.html" target="_blank" class="goods_name_progres">维生素DV凝胶糖果</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">169.00</span>
							</span>
							<span class="apply myfr">534人已申请</span>
						</p>
						<a href="/activity/300156/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300156"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300155/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/22/img1545458650540_615.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300155/-1.html" target="_blank" class="goods_name_progres">孕产妇海藻DHA胶囊</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">189.00</span>
							</span>
							<span class="apply myfr">249人已申请</span>
						</p>
						<a href="/activity/300155/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300155"> </div>
				</li>
			</ul>
		</div>
		<!--数码家电标题-->
		<div class="fight_title appliances_title">
			<h2 class="myfl">数码家电</h2>
			<div class="myfr">
				<a href="/item?jump=1&amp;shopType=&amp;itemCategoryId=6&amp;sortType=ACTIVITY_RELEASE_DATE&amp;sortEnum=DESC&amp;itemType=ALL">查看更多</a>
			</div>
		</div>
		<!--数码家电商品-->
		<div class="fight_content">
			<ul class="clearfix">
				<li style="width: 212px;height: 352px; margin-right: 10px;float: left">
					<a href="https://www.laqu.com/item?jump=1&amp;shopType=&amp;itemCategoryId=6&amp;sortType=APPLY_MEMBER_COUNT&amp;sortEnum=DESC&amp;itemType=NORMAL"
					 target="_blank" style="display: block;width: 212px;height: 352px;">
						<img src="https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545319294303_573.png" style="width: 212px;height: 352px;"> </a>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300336/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/12/23/file1545549311874_115.jpg_430x430q90.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
						</p>
						<a href="/activity/300336/-1.html" target="_blank" class="goods_name_progres">公牛开关插座面板</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">12.90</span>
							</span>
							<span class="apply myfr">126人已申请</span>
						</p>
						<a href="/activity/300336/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300336"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300450/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/23/img1545528585616_372.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
						</p>
						<a href="/activity/300450/-1.html" target="_blank" class="goods_name_progres">对讲机手机耳机安卓苹果通用接头</a>
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">11.90</span>
							</span>
							<span class="apply myfr">距离开奖仅差1人</span>
						</p>
						<a href="/activity/300450/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300450"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300334/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/12/18/file1545125045647_130.png!232x232">
						<span class="hight_icon">高价值</span>
					</a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300334/-1.html" target="_blank" class="goods_name_progres">六核电脑主机</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">600.00</span>
							</span>
							<span class="apply myfr">1389人已申请</span>
						</p>
						<a href="/activity/300334/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300334"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300129/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/22/img1545454739395_198.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300129/-1.html" target="_blank" class="goods_name_progres">手机支架保护壳</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">15.00</span>
							</span>
							<span class="apply myfr">303人已申请</span>
						</p>
						<a href="/activity/300129/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300129"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300004/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/10/21/file1540088001582_729.jpg!232x232">
						<span class="hight_icon">高价值</span>
					</a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300004/-1.html" target="_blank" class="goods_name_progres">电脑主机</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">1099.00</span>
							</span>
							<span class="apply myfr">3069人已申请</span>
						</p>
						<a href="/activity/300004/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300004"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300024/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/14/img1544752659404_044.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">下单有奖</span>
						</p>
						<a href="/activity/300024/-1.html" target="_blank" class="goods_name_progres">小米8手机壳网红男女款</a>
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">21.00</span>
							</span>
							<span class="apply myfr">距离开奖仅差2人</span>
						</p>
						<a href="/activity/300024/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300024"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/295687/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/15/img1544843733111_598.jpg!232x232">
						<span class="hight_icon">高价值</span>
					</a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/295687/-1.html" target="_blank" class="goods_name_progres">日本双头美容棒</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">199.00</span>
							</span>
							<span class="apply myfr">714人已申请</span>
						</p>
						<a href="/activity/295687/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="295687"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/299833/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/21/img1545369441224_075.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
							<span class="good_label">下单有奖</span>
						</p>
						<a href="/activity/299833/-1.html" target="_blank" class="goods_name_progres">苹果手机回收服务</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">10.00</span>
							</span>
							<span class="apply myfr">453人已申请</span>
						</p>
						<a href="/activity/299833/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="299833"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/299417/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/21/img1545360991496_645.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/299417/-1.html" target="_blank" class="goods_name_progres">取暧器</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">99.00</span>
							</span>
							<span class="apply myfr">7302人已申请</span>
						</p>
						<a href="/activity/299417/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="299417"> </div>
				</li>
			</ul>
		</div>
		<!--家纺日用标题-->
		<div class="fight_title expenses_title">
			<h2 class="myfl">家纺日用</h2>
			<div class="myfr">
				<a href="/item?jump=1&amp;shopType=&amp;itemCategoryId=22&amp;sortType=ACTIVITY_RELEASE_DATE&amp;sortEnum=DESC&amp;itemType=ALL">查看更多</a>
			</div>
		</div>
		<!--家纺日用商品-->
		<div class="fight_content">
			<ul class="clearfix">
				<li style="width: 212px;height: 352px; margin-right: 10px;float: left">
					<a href="https://www.laqu.com/item?jump=1&amp;shopType=&amp;itemCategoryId=22&amp;secondCategoryId=1&amp;sortType=APPLY_MEMBER_COUNT&amp;sortEnum=DESC&amp;itemType=NORMAL"
					 target="_blank" style="display: block;width: 212px;height: 352px;">
						<img src="https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545319339680_275.png" style="width: 212px;height: 352px;"> </a>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300425/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/12/23/file1545554905762_823.jpg_400x400.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
						</p>
						<a href="/activity/300425/-1.html" target="_blank" class="goods_name_progres">咖啡杯简约</a>
						<p class="priceandapply_progres clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">29.30</span>
							</span>
							<span class="apply myfr">距离开奖仅差7人</span>
						</p>
						<a href="/activity/300425/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300425"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300537/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/23/img1545550425559_466.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix"> </p>
						<a href="/activity/300537/-1.html" target="_blank" class="goods_name_progres">2019创意新春对联</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">18.00</span>
							</span>
							<span class="apply myfr">87人已申请</span>
						</p>
						<a href="/activity/300537/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300537"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300651/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/apply/2018/10/13/img1539408422840_248.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
							<span class="good_label">下单有奖</span>
						</p>
						<a href="/activity/300651/-1.html" target="_blank" class="goods_name_progres">强力鞋胶补鞋胶水粘鞋胶</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">9.90</span>
							</span>
							<span class="apply myfr">60人已申请</span>
						</p>
						<a href="/activity/300651/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300651"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300647/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/12/20/file1545297147566_198.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
							<span class="good_label">下单有奖</span>
						</p>
						<a href="/activity/300647/-1.html" target="_blank" class="goods_name_progres">AB胶水美国进口强力胶</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">21.80</span>
							</span>
							<span class="apply myfr">60人已申请</span>
						</p>
						<a href="/activity/300647/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300647"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300639/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/4/img1543905185775_916.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
						</p>
						<a href="/activity/300639/-1.html" target="_blank" class="goods_name_progres">长方形盘子</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">5.18</span>
							</span>
							<span class="apply myfr">75人已申请</span>
						</p>
						<a href="/activity/300639/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300639"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300633/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/5/img1543990540639_715.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
						</p>
						<a href="/activity/300633/-1.html" target="_blank" class="goods_name_progres">圆盘</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">5.78</span>
							</span>
							<span class="apply myfr">66人已申请</span>
						</p>
						<a href="/activity/300633/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300633"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300632/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/11/12/file1542013139728_555.png!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
						</p>
						<a href="/activity/300632/-1.html" target="_blank" class="goods_name_progres">黑色碗一个</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">5.00</span>
							</span>
							<span class="apply myfr">147人已申请</span>
						</p>
						<a href="/activity/300632/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300632"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300631/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/10/22/img1540189350118_942.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
						</p>
						<a href="/activity/300631/-1.html" target="_blank" class="goods_name_progres">酱料碟子</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">5.15</span>
							</span>
							<span class="apply myfr">96人已申请</span>
						</p>
						<a href="/activity/300631/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300631"> </div>
				</li>
				<li class="laqu_goods_style">
					<a href="/activity/300622/-1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/10/29/img1540794372407_712.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode_progres clearfix">
							<span class="good_label">券</span>
						</p>
						<a href="/activity/300622/-1.html" target="_blank" class="goods_name_progres">黑色磨砂圆盘</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">5.15</span>
							</span>
							<span class="apply myfr">75人已申请</span>
						</p>
						<a href="/activity/300622/-1.html" target="_blank" class="receive">免费领取</a>
						<input type="hidden" value="300622"> </div>
				</li>
			</ul>
		</div>
		<!--拼多多优选标题-->
		<div class="collage_title">
			<div style="position: relative;z-index: 900;">
				<h2 class="myfl">拼多多优选</h2>
				<!--<p class="myfl">更多的中奖率，更多的中奖机会</p>-->
				<a class="myfr" href="/item?jump=1&amp;shopType=&amp;itemCategoryId=&amp;sortType=ACTIVITY_RELEASE_DATE&amp;sortEnum=DESC&amp;itemType=PIN_DUO_DUO">查看更多</a>
			</div>
			<div class="collage_title_guide">
				<p class="top_fonts">拉趣网拼多多优选活动上线啦！</p>
				<p class="bottom_fonts">中奖率更高 中奖机会更多 宝贝更多样</p>
				<img src="https://laquimage.b0.upaiyun.com/next_arrow1529913090216.png" class="point">
				<img src="https://laquimage.b0.upaiyun.com/nextbtn1529912977536.png" onclick="location.href='/item?jump=1&amp;shopType=&amp;itemCategoryId=&amp;sortType=ACTIVITY_RELEASE_DATE&amp;sortEnum=DESC&amp;itemType=PIN_DUO_DUO'"
				 class="next_btn">
				<img src="https://laquimage.b0.upaiyun.com/off1529913154377.png" class="off">
				<div></div>
			</div>
		</div>
		<!--拼多多商品-->
		<div class="collage_content">
			<ul class="clearfix" style="width: 1150px;">
				<li class="myfl laqu_goods_style" style="position: relative;z-index: 140;">
					<a href="/activity/297565/1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/18/img1545115138121_557.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode clearfix">
							<!---->
							<!--<span class="good_labelpdd">拼多多</span>-->
							<!---->
						</p>
						<a href="/activity/297565/1.html" target="_blank" class="goods_name">围巾女</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">27.50</span>
							</span>
							<span class="apply myfr">8373人已申请</span>
						</p>
						<a href="/activity/297565/1.html" target="_blank" class="receive">免费领取</a>
					</div>
				</li>
				<li class="myfl laqu_goods_style" style="position: relative;z-index: 140;">
					<a href="/activity/299417/1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/21/img1545360991496_645.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode clearfix">
							<!---->
							<!--<span class="good_labelpdd">拼多多</span>-->
							<!---->
						</p>
						<a href="/activity/299417/1.html" target="_blank" class="goods_name">取暧器</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">99.00</span>
							</span>
							<span class="apply myfr">7302人已申请</span>
						</p>
						<a href="/activity/299417/1.html" target="_blank" class="receive">免费领取</a>
					</div>
				</li>
				<li class="myfl laqu_goods_style" style="position: relative;z-index: 140;">
					<a href="/activity/297073/1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/17/img1545036221591_099.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode clearfix">
							<!---->
							<!--<span class="good_labelpdd">拼多多</span>-->
							<!---->
						</p>
						<a href="/activity/297073/1.html" target="_blank" class="goods_name">加厚加大宽松糖果色毛衣女</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">56.60</span>
							</span>
							<span class="apply myfr">5256人已申请</span>
						</p>
						<a href="/activity/297073/1.html" target="_blank" class="receive">免费领取</a>
					</div>
				</li>
				<li class="myfl laqu_goods_style" style="position: relative;z-index: 140;">
					<a href="/activity/297877/1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/activity/2018/12/18/img1545135096115_283.jpg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode clearfix">
							<!---->
							<!--<span class="good_labelpdd">拼多多</span>-->
							<!---->
						</p>
						<a href="/activity/297877/1.html" target="_blank" class="goods_name">加厚防滑保暖毛绒垫子</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">24.00</span>
							</span>
							<span class="apply myfr">4854人已申请</span>
						</p>
						<a href="/activity/297877/1.html" target="_blank" class="receive">免费领取</a>
					</div>
				</li>
				<li class="myfl laqu_goods_style" style="position: relative;z-index: 140;">
					<a href="/activity/299606/1.html" target="_blank" class="animatelink">
						<img class="animateimg" src="https://laquimage.b0.upaiyun.com/system/2018/12/21/file1545374977711_018.jpeg!232x232"> </a>
					<div class="explain">
						<p class="paymentmode clearfix">
							<!---->
							<!--<span class="good_labelpdd">拼多多</span>-->
							<!---->
						</p>
						<a href="/activity/299606/1.html" target="_blank" class="goods_name">六层纱布儿童毛巾小毛巾擦手巾</a>
						<p class="priceandapply clearfix">
							<span class="price myfl">
								<span class="money_symbol">¥</span>
								<span class="money_num">10.50</span>
							</span>
							<span class="apply myfr">2676人已申请</span>
						</p>
						<a href="/activity/299606/1.html" target="_blank" class="receive">免费领取</a>
					</div>
				</li>
			</ul>
		</div>
		<!--左边定位导航-->
		<div class="float_left" style="display: none;">
			<!--<span >优质推荐</span>-->
			<span class="select">拼团开奖</span>
			<span>服饰服装</span>
			<span>鞋子箱包</span>
			<span>护肤彩妆</span>
			<span>母婴用品</span>
			<span>数码家电</span>
			<span>家纺日用</span>
			<a href="#" style="border-bottom: none">
				<img src="/img/web_index/dingbu.png" style="display: block;margin-left: 22px;margin-top: 22px;"> 回到顶部 </a>
		</div>
		<!--分享赚钱的弹窗-->
		<ul class="activityAddEvaluate_payPop" id="share_box" style="display: none">
			<h1>分享此商品给朋友，并成功下单即获得代言人奖金
				<span>10.00</span>元</h1>
			<li class="myfl pop_page">
				<p class="mode_A">邀请方式一：通过链接分享</p>
				<textarea readonly="true" class="url_transform" id="textCopy">亲爱的们都来看看吧，好东西要分享给最好的朋友，赶紧去免费领取吧！http://laqu.com/user-spokesman-index?memberType=1&amp;inviteCode=$loginMemberBO.inviteCode</textarea>
				<input type="button" id="copy" class="copy activityAddEvaluate_payBtn" value="复制" onclick="_czc.push(['_trackEvent', '首页分享', '分享复制', '活动ID=,用户ID='])">
				<p class="annotation_a clearfix fontstylea">复制您的专属邀请链接分享给您身边的朋友，并引导其完成注册和申请，粉丝在成功完成下单之后，代言人即可获得相应奖励</p>
			</li>
			<li class="myfl division"></li>
			<li class="myfl pop_right">
				<p class="mode_A clearfix">邀请方式二：通过二维码分享</p>
				<dl class="way_two">
					<dt>
						<img src="/img/base/QRcode_user.jpg" id="shopQRCode">
					</dt>
					<dd class="annotation_a">
						<p>把您的专属二维码通过微信朋友圈、微博等方式分享给身边的朋友，引导关注公众号并注册，在粉丝成功下单后，您就可获得相应奖励</p>
					</dd>
				</dl>
			</li>
		</ul>
		<!--发布试用温馨提示-->
		<div class="issue_hint" style="display: none">
			<h2>温馨提示</h2>
			<p style="margin: 10px 0 8px 120px;"> 1、请关闭活动链接淘客计划；
				<br> 2、请确认关键词能够找到；
				<br> 3、严厉杜绝AB/拉趣款；
				<br> 4、严厉杜绝活动期间改价； </p>
			<div class="clearfix" style="width:360px;margin-left:80px;padding-top:14px;">
				<a href="/shop/activity/form" class="activityCheckimg_passBtn got_it  layui-layer-close btn_true">知道了</a>
				<a href="/shop/activity/form" class="activityCheckimg_rejectBtn no_longer layui-layer-close btn_false" style="left: 224px;">不再提示</a>
			</div>
		</div>
		<!--发布试用提示还不是VIP-->
		<div class="bound_remind2" style="display: none;">
			<h2>禁止发布</h2>
			<p class="no_publish">暂不能发布！</p>
			<p class="no_publishtext">您的账户扣分已累计达到36分，短期之内禁止发放活动</p>
			<a href="javascript:;" class="bound_link layui-layer-close btn_true">确定</a>
		</div>
		<!--发布试用提示未绑定店铺-->
		<div class="bound_remind" style="display: none;">
			<h2>绑定店铺提醒</h2>
			<p class="no_publish">暂不能发布！</p>
			<p class="no_publishtext">发布活动需先绑定店铺，您还未绑定</p>
			<a href="/shop/list" class="bound_link layui-layer-close btn_true">绑定店铺</a>
		</div>
		<!--发布试用提示还不是VIP-->
		<div class="bound_remind1" style="display: none;">
			<h2>开通会员提醒</h2>
			<p class="no_publish">暂不能发布！</p>
			<p class="no_publishtext">发布活动需先开通会员，您还未开通</p>
			<a href="/merchants-vip-go?vipType=1" class="bound_link layui-layer-close btn_true">成为会员</a>
		</div>
		<!--Gb修改弹窗-->
		<div class="otherwebcooperationpop">
			<img src="https://laquimage.b0.upaiyun.com/close1530687513028.png" class="close">
			<img src="https://laqu.com/img/drainage/cangsuextend.png">
			<p>拉趣新平台，请放心购买</p>
		</div>
		<div class="otherwebcooperationmark"></div>
		<link rel="stylesheet" charset="UTF-8" href="css/public_module/web_float.css?v=20189330">
		<div class="web_float">
			<a href="/go-login" target="_blank" class="title icon1">
				<img src="/img/web_public/web_float_icon1.png" class="web_icon"> 邀
				<br>请
				<br>送
				<br>必
				<br>中
				<br>券</a>
			<em></em>
			<div class="customer_service">
				<a href="javascript:;" class="customer_service">
					<img src="/img/web_public/web_float_icon2.png" class="web_icon">售后客服</a>
				<div class="relation_box">
					<img src="/img/web_public/web_float_sign.png">
					<p class="float_window_title">用户问题</p>
					<div class="user">
						<p>买家客服：
							<a target="_blank" href="/go-login">点击联系</a>
						</p>
						<span>(处理各类买家售前和售后问题的咨询)</span>
					</div>
					<p class="float_window_title">商家问题</p>
					<div class="seller">
						<p>商家售后客服：
							<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=800171725&amp;site=qq&amp;menu=yes">点击联系</a>
						</p>
						<span>(处理投诉、活动发布、审核、暂停、结算、买家违规等非运营类商家售后问题的咨询)</span>
						<em style="opacity: 1;background: none;filter: alpha(opacity = 100)">运营/活动效果请咨询运营顾问</em>
					</div>
				</div>
			</div>
			<em></em>
			<a href="javascript:;" class="operate">
				<img src="/img/web_public/web_float_hot.png">
				<img src="/img/web_public/web_float_icon3.png" class="web_icon" style="margin: 6px auto 4px;"> 运营诊断
				<div class="operate_box no_signin_qrcode" style="padding-bottom: 32px;">
					<img src="/img/web_public/web_float_sign.png" class="sign" style="width: auto;">
					<p>微信扫码添加
						<i>请勿重复添加</i>
					</p>
					<h6>拉趣运营-逍遥</h6>
					<img src="/img/web_public/web_float_xyqrcode.png" width="80px" height="80px">
					<h6 style="margin-top: 28px;">拉趣运营-飞蓬</h6>
					<img src="/img/web_public/web_float_xyqrcodefp.png" width="80px" height="80px">
					<h6 style="margin-top: 28px;">拉趣运营-阿灿</h6>
					<img src="/img/web_public/web_float_xyqrcodeac.png" width="80px" height="80px">
					<h6 style="margin-top: 28px;">拉趣运营-明台</h6>
					<img src="/img/web_public/web_float_xyqrcodemt.png" width="80px" height="80px"> </div>
			</a>
			<em></em>
			<a href="javascript:;" class="direct_train">
				<img src="/img/web_public/web_float_new.png">
				<img src="/img/web_public/web_float_wechat.png" class="web_icon" style="margin: 6px auto 4px;"> 爆款打造
				<div class="direct_train_box">
					<p class="tit">免费爆款打造
						<i>请勿重复添加</i>
					</p>
					<h6>拉趣运营-飞蓬</h6>
					<img src="/img/qrcode/web_float_xyqrcodemt.png" width="80px" height="80px">
					<h6>拉趣运营-韩磊</h6>
					<img src="/img/qrcode/web_float_xyqrcodexc.png" width="80px" height="80px">
					<img src="/img/web_public/web_float_sign.png" class="sign" style="margin: 0;"> </div>
			</a>
			<em></em>
			<a href="/help/help_index" target="_blank" class="help_center">
				<img src="/img/web_public/web_float_icon5.png" class="web_icon">帮助中心</a>
			<em></em>
			<a href="#" class="top">
				<img src="/img/web_public/web_float_top.png">
			</a>
		</div>
		<script src="https://qiyukf.com/script/393fb621fe9ce1c7b96c0d5ee748c2d4.js" charset="utf-8"></script>
		<div style="top: 0px; left: 0px; visibility: hidden; position: absolute; width: 1px; height: 1px;">
			<iframe style="height:0px; width:0px;" src="https://qiyukf.com/sdk/res/delegate.html?1545556269581"></iframe>
		</div>
		<div class="layer-2" id="YSF-BTN-HOLDER" style="display: none;">
			<div id="YSF-CUSTOM-ENTRY-2">
				<img src="https://qiyukf.com/sdk/res/kefu/custom/2.png">
			</div>
			<span id="YSF-BTN-CIRCLE"></span>
			<div id="YSF-BTN-BUBBLE">
				<div id="YSF-BTN-CONTENT"></div>
				<span id="YSF-BTN-ARROW"></span>
				<span id="YSF-BTN-CLOSE"></span>
			</div>
		</div>
		<script type="text/javascript" charset="utf-8">
			//商家的联系客服(招商的随机QQ号)
			$(function () {
				$(".shop_service")
					.on("click", function () {
						$.ajax({
								url: "/query/maintailQq",
								type: "post",
								async: false,
								dataType: "json",
								data: {
									"departmentId": "4"
								}
							})
							.done(function (datacon) {
								if (datacon.code == 10000) {
									//成功
									var Shop_Service_Link;
									var arr = datacon.data.marketList;
									if (arr.length < 1) {
										//数组为空的情况
										Shop_Service_Link = 3004100509;
									} else {
										//数组不为空的情况
										var merchantConsulting = parseInt(arr.length * Math.random());
										Shop_Service_Link = arr[merchantConsulting];
									}
									var shop_service = "http://wpa.qq.com/msgrd?v=3&uin=" + Shop_Service_Link + "&site=qq&menu=yes";
									$(".shop_service")
										.attr("href", shop_service);
								} else {
									//失败
									shop_service = "http://wpa.qq.com/msgrd?v=3&uin=" + 3004100509 + "&site=qq&menu=yes";
									$(".shop_service")
										.attr("href", shop_service);
								}
							});
					});
				//用户七鱼接入
				$(".userqiyu_access")
					.on("click", function () {
						var datadom = $(".userqiyu_access");
						ysf.logoff();
						ysf.config({
							uid: datadom.attr('datauid'),
							name: datadom.attr('datanick'),
							success: function () { // 成功回调
								window.open(ysf.url());
							}
						});
					});
			});
		</script>
		<!-- 底部弹窗 -->
		<!--<div>-->
		<!--</div>-->
		<div class="home_bottom_box">
			<!--<div class="footer_top">-->
			<!--<div class="main" style="width: 1200px \9;position:relative \9;left: 50% \9;margin-left: -600px \9;">-->
			<!--<ul>-->
			<!--<li>-->
			<!--<img src="/img/home/home_icon_lightning.png" />-->
			<!--<span><b>闪电到账</b><br/><em>收货评价直接现金到账</em></span>-->
			<!--<div class="footer_top_line"></div>-->
			<!--</li>-->
			<!--<li>-->
			<!--<img src="/img/home/home_icon_safeguard.png" />-->
			<!--<span><b>好货保障</b><br/><em>商品平均客单价200元</em></span>-->
			<!--<div class="footer_top_line"></div>-->
			<!--</li>-->
			<!--<li>-->
			<!--<img src="/img/home/home_icon_award.png" />-->
			<!--<span><b>高中奖率</b><br/><em>高达平均30%中奖率</em></span>-->
			<!--<div class="footer_top_line"></div>-->
			<!--</li>-->
			<!--<li>-->
			<!--<img src="/img/home/home_icon_spokesman.png" />-->
			<!--<span><b>代言人奖</b><br/><em>邀请送10元现金+必中</em></span>-->
			<!--</li>-->
			<!--</ul>-->
			<!--</div>-->
			<!--</div>-->
			<!--&lt;!&ndash; 底部通栏 &ndash;&gt;-->
			<!--<footer>-->
			<!--<div class="footer_bottom">-->
			<!--<div class="main" style="width: 1200px \9;position:relative \9;left: 50% \9;margin-left: -600px \9;">-->
			<!--<div class="clearfix" style="padding:25px 0;border-bottom:1px solid #1d1d1d">-->
			<!--<div class="myfl">-->
			<!---->
			<!--<img class="myfl" src="/img/base/QRcode_user.jpg" style="width: 100px;height: 100px;"/>-->
			<!---->
			<!--<span>扫码关注<br/>微信公众号</span>-->
			<!--</div>-->
			<!--<div class="myfr">-->
			<!--<div style="padding:25px 0">-->
			<!--<a href="/contact-us" target="view_window">关于我们</a>-->
			<!--<a href="/contact-us" target="view_window">联系我们</a>-->
			<!--<a href="/html/home/user_protocolC.html" target="_blank">法律声明</a>-->
			<!--<a href="javascript:;">站点地图</a>-->
			<!---->
			<!--<a href="/help/help_indexb">帮助中心</a>-->
			<!---->
			<!--</div>-->
			<!--<div style="padding-left:30px">-->
			<!--<img src="/img/base/footer_icon_email.png" />-->
			<!--<span> kefu@laqu.com</span>-->
			<!--<span class="myfr">0571-28120772</span>-->
			<!--<img class="myfr" src="/img/base/footer_icon_tel.png" />-->
			<!--</div>-->
			<!--</div>-->
			<!--</div>-->
			<!--&lt;!&ndash;<p>Copyright © 2017 laqu.com&nbsp;&nbsp;浙ICP17003883号-1 &nbsp;&nbsp;版权所有</p>&ndash;&gt;-->
			<!--<p class="laquCopy">Copyright&nbsp;&nbsp;© 2017杭州拉趣科技有限公司 &nbsp;&nbsp;浙ICP17003883号-1 &nbsp;&nbsp;版权所有   <a target="_blank" href="https://v.pinpaibao.com.cn/cert/site/?site=www.laqu.com&at=business" ><img style="margin: 5px 10px 0;" src="https://static.anquan.org/static/outer/image/hy_124x47.png" /></a><a  key ="59014f90efbfb03b502bcaf6"  logo_size="83x30"  logo_type="common"  href="http://www.anquan.org" ><script src="//static.anquan.org/static/outer/js/aq_auth.js"></script></a></p>-->
			<!--</div>-->
			<!--</div>-->
			<!--</footer>-->
			<script>
				//百度统计
				var _hmt = _hmt || [];
				(function () {
					var hm = document.createElement("script");
					hm.src = "https://hm.baidu.com/hm.js?449f25ec3f3ef864dfd6998eb39d88d3";
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(hm, s);
				})();
			</script>
			<!--CNZZ事件追踪-->
			<script>
				var _czc = _czc || [];
				_czc.push(["_setAccount", "1261070205"]);
			</script>
			<!--CNZZ统计-->
			<script>
				var cnzz_s_tag = document.createElement('script');
				cnzz_s_tag.type = 'text/javascript';
				cnzz_s_tag.async = true;
				cnzz_s_tag.charset = 'utf-8';
				cnzz_s_tag.src = 'https://w.cnzz.com/c.php?id=1261070205&async=1';
				var root_s = document.getElementsByTagName('script')[0];
				root_s.parentNode.insertBefore(cnzz_s_tag, root_s);
			</script>
			<footer>
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
									<a href="/help/help_indexb">帮助中心</a>
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
						<p class="laquCopy">Copyright&nbsp;&nbsp;© 2017杭州拉趣科技有限公司 &nbsp;&nbsp;浙ICP17003883号-1 &nbsp;&nbsp;版权所有
							<a target="_blank" href="https://v.pinpaibao.com.cn/cert/site/?site=www.laqu.com&amp;at=business">
								<img style="margin: 15px 11px 0 31px;" src="https://laquimage.b0.upaiyun.com/ICON/2018/11/2/label_lg_900301544519713771.png">
							</a>
							<a key="59014f90efbfb03b502bcaf6" logo_size="83x30" logo_type="common" href="http://www.cn-ecusc.org.cn/cert/aqkx/site/?site=www.laqu.com"
							 target="_blank">
								<script src="//static.anquan.org/static/outer/js/aq_auth.js"></script>
								<b id="aqLogoUQCHC" style="display: none;"></b>
								<img src="//static.anquan.org/static/outer/image/aqkx_83x30.png?id=www.laqu.com?t=101" alt="安全联盟认证" width="83"
								 height="30" style="border: none;">
							</a>
						</p>
					</div>
				</div>
			</footer>
		</div>
		<!--新人大礼包-->
		<div class="newplepo">
			<!--标题-->
			<p class="new_guidestep_title textcenter">新人专享好礼</p>
			<p class="new_subheading textcenter">感谢您加入拉趣，我们为您准备了一份专享礼物 </p>
			<!--内容-->
			<ul class="new_guidestep_content1 clearfix">
				<li class="gift_baglist" style="background: #fff url(/img/advert/baglist1.jpg) no-repeat center;">
					<a href="/newer-activity?newpage" target="_blank" class="get1">立即领取</a>
					<a href="javascript:;" target="_blank" class="noget1">已领取</a>
				</li>
				<li class="gift_baglist" style="background: #fff url(/img/advert/baglist2.jpg) no-repeat center;">
					<a href="/wealth/user/spokesman/topic" target="_blank" class="get3">立即邀请</a>
					<a href="javascript:;" target="_blank" class="noget3">已完成</a>
				</li>
				<li class="gift_baglist" style="margin-right: 0;background: #fff url(/img/advert/baglist3.jpg) no-repeat center;">
					<a href="/item?goodshop" target="_blank" class="get2">立即申请</a>
					<a href="javascript:;" target="_blank" class="noget2">已完成</a>
				</li>
			</ul>
			<!--关闭-->
			<a href="javascript:void(0)" class="new_guidestep_popoff1"></a>
		</div>
		<!--引导第一步-->
		<div class="new_index_guidestep16" style="display: none;">
			<!--标题-->
			<p class="new_guidestep_title textcenter">
				<i></i>
				<span>欢迎您，加入拉趣</span>
				<i></i>
			</p>
			<!--副标题-->
			<p class="new_guidestep_Subtitle textcenter">下面请让我们用1分钟带您认识拉趣，完成之后您将获得以下
				<span>新人专享好礼</span>
			</p>
			<!--内容-->
			<ul class="new_guidestep_content clearfix">
				<li style="background: url(/img/new_guideimg/new_guidestep_q.png) no-repeat;"></li>
				<li style="background: url(/img/new_guideimg/new_guidestep_r.png) no-repeat;margin-left: 30px;"></li>
				<li style="background: url(/img/new_guideimg/new_guidestep_s.png) no-repeat;margin-left: 30px;"></li>
			</ul>
			<!--关闭-->
			<a href="javascript:void(0)" class="new_guidestep_popoff new_index_guidestepoff"></a>
			<!--按钮-->
			<a href="javascript:void(0)" class="new_guidestep_oncebtn">好的，给朕呈上吧！</a>
		</div>
		<!--继续任务和退出弹窗-->
		<div class="new_index_guidestep17" style="display: none;">
			<p class="new-guidestep_bagicon"></p>
			<p class="new-guidestep_confont color666 textcenter fontsize18">中途退出新手教程，您将无法获得新人奖励哦~</p>
			<p class="new-guidestep_popbtn textcenter">
				<a href="javascript:void(0)" class="new-guidestep_popbtna new_guidestep_nofq">继续教程</a>
				<a href="javascript:void(0)" class="new-guidestep_popbtnb" id="new_guidestep_yesfq">确认放弃</a>
			</p>
			<a href="javascript:void(0)" class="new_guidestep_popoff new_guidestep_nofq"></a>
		</div>
		<!--蒙版背景层-->
		<div class="guide_flow_bag" style="opacity: 0.75;filter:Alpha(opacity = 75);"></div>
		<!--拼多多的蒙层-->
		<div class="collage_flow_bag"></div>
		<!--新人弹窗背景-->
		<div class="newplepobg" style="background: #000000; opacity: 0.6;  filter:alpha(opacity=60); width: 100%;height: 2000px;position: fixed;left:0;top:0;z-index: 9999;display: none;"></div>
		<input type="hidden" value="${guideQTO.homeGuideInterfaceNo}" id="new_guidestep_numNO">
		<!--指定当前的页面-->
		<input type="hidden" value="${guideQTO.homePageGuideStep}" id="new_guidestep_numSTEP">
		<!--指定当前的步骤数目-->
		<input type="hidden" value="${guideQTO.homeGuideStatus}" id="new_guidestep_numStatus">
		<!--指定当前的状态0是具备弹窗的资格1是不具备-->
		<input type="hidden" value="" id="newpage_state_judgment">
		<!--//判断用户的登录类型-->

		<script type="text/javascript" charset="utf-8" src="js/jquery.SuperSlide.2.1.1.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/web_method/method.js?v=2018936561"></script>
		<script type="text/javascript" charset="utf-8" src="js/web_navpage/home.js?v=2018938421111"></script>
		<script type="text/javascript" charset="utf-8">
			//首页banner轮播
			$(".no_national")
				.on("click", function () {
					$(".national-day")
						.css("display", "none");
				});
			jQuery(".superslide")
				.slide({
					mainCell: ".bd ul",
					autoPlay: true,
					interTime: 3000
				});
			//新人专享的轮播
			jQuery(".novice_content")
				.slide({
					titCell: ".hd ul",
					mainCell: ".bd ul",
					autoPage: true,
					effect: "left",
					autoPlay: false,
					scroll: 5,
					vis: 5
				});
			jQuery(".recommend_content")
				.slide({
					titCell: ".hd ul",
					mainCell: ".bd ul",
					autoPage: true,
					effect: "leftLoop",
					pnLoop: false,
					autoPlay: false,
					scroll: 5,
					vis: 5
				});
			$(".navigation_ganged")
				.hover(function () {
					$(this)
						.children('.navigation_gangedahover')
						.css('display', 'block')
				}, function () {
					$(this)
						.children('.navigation_gangedahover')
						.css('display', 'none')
				})
		</script>
	</body>
</html>