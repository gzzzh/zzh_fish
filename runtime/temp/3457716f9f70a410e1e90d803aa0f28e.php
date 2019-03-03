<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:96:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/index\view\activity\shop_index.html";i:1550715419;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\header.html";i:1548216744;s:92:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\base_message_title.html";i:1548216741;s:82:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\nav_menu.html";i:1548216745;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\footer.html";i:1548216744;}*/ ?>
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
<link rel="stylesheet" href="<?php echo INDEX_STYLE; ?>css/business_l.css" />
</head>
<body>
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
	<div class="userControl_bg" style="padding:20px 0 40px 0">
		<div class="main userControl">
			<!-- 主要内容 -->
			<div class="clearfix">
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
				<div class="shopBind_right myfl">
					<p class="publishing-activities">活动列表</p>
					<table class="list-table">
						<thead>
							<tr>
								<th>活动名称</th>
								<th>开始时间</th>
								<th>结束时间</th>
								<th>状态</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
								<tr>
									<td width=""><?php echo $vo['product_name']; ?></td>
									<td><?php echo $vo['begin_time']; ?></td>
									<td><?php echo $vo['end_time']; ?></td>
									<td><?php if($vo['status'] == 1): ?>待付款
										<?php elseif($vo['status'] == 2): ?>等待审核
										<?php elseif($vo['status'] == 3): ?>进行中
										<?php elseif($vo['status'] == 4): ?>已完成
										<?php elseif($vo['status'] == 5): ?>驳回
										<?php elseif($vo['status'] == 6): ?>关闭
										<?php elseif($vo['status'] == 7): ?>结算中
										<?php endif; ?>
									</td>
									<td>
										<?php if($vo['status'] == 1): ?>
											<a href="/tradeno/<?php echo $vo['id']; ?>"  target="_blank">去支付</a>
											<a href="/editact/edit/<?php echo $vo['id']; ?>">编辑活动</a>
											<a href="/delact/del/<?php echo $vo['id']; ?>">关闭活动</a>
										<?php elseif($vo['status'] == 3): ?>
										<a href="/task/details/<?php echo $vo['id']; ?>">查看详情</a>
											<a href="/closact/closing/<?php echo $vo['id']; ?>">结算</a>
										<?php endif; ?>
									</td>
								</tr>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
				</div>
				<div>
					当前页: <?php echo $page; ?>
					总数量: <?php echo $taskCount['counts']; ?>
					总页数: <?php echo $taskCount['pageCount']; ?>
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