<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:93:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/index\view\user\bind_alipay.html";i:1545978862;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\header.html";i:1548216744;s:82:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\nav_menu.html";i:1548216745;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\footer.html";i:1548216744;}*/ ?>
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
<link rel="stylesheet" href="<?php echo INDEX_STYLE; ?>css/user.css" />
<header style="background: #ffffff;">
	<div class="main clearfix">
		<h1 class="laqu_logo">
			<a href="/index">
				<img src="<?php echo INDEX_STYLE; ?>/img/home/laqu_logo.png" alt="图片加载失败" style="margin-top: -10px;"> </a>
		</h1>
		<span class="background_name">
			<a href="/user-index" style="color:#666666;">用户管理中心</a>
		</span>
	</div>
</header>
<div class="fundManage_bag row">
	<!--内容层1200居中-->
	<div class="main clearfix" style="margin: 20px auto;">
		<!--左侧下拉列表-->
		<div class="sideMenu myfl" id="laqu_userleft_nav">
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

		<!--右侧内容部分-->
		<div class="fundAccount_right myfr">
			<!--右侧标题的结构-->
			<span class="fundAccount_right_title">支付宝绑定</span>
			<em class="fundAccount_right_careful">
				<span></span>请注意：1、绑定的账号必须与支付宝账户一致，如提交的账户不一致导致无法打款，网站概不负责!如有问题，欢迎加群咨询；
				<span id="userqqgroup" style="margin-left: 0;background: none;">
					<a target="_blank" href="https://jq.qq.com/?_wv=1027&amp;k=5d7tUyF">
						<img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="LQ官方用户群" title="LQ官方用户群">
					</a>
				</span>
				<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、如遇到特殊情况涉及支付安全，拉趣有权在以上凭证基础上要求用户提供其他辅助凭证！
				<br> </em>
			<ul class="alipay-bind">
				<form action="/uc/alipay" id="myform" method="post">
					<li class="fundAccount_cash_a">
						<span>姓名：</span>
						<input type="text" id="alipay-bind_name" name="name">姓名必须与支付宝认证的姓名一致！ </li>
					<li class="fundAccount_cash_error">
						<i>姓名不能为空</i>
						<em class="fundAcount_error_a"></em>
					</li>
					<li class="fundAccount_cash_b">
						<span>支付宝账户：</span>
						<input type="text" id="alipay-bind_account" name="account"> </li>
					<li class="fundAccount_cash_error">
						<i>支付宝账户不能为空</i>
						<em class="fundAcount_error_b"></em>
					</li>
					<li style="height: 110px;">
						<span>支付宝账户截图：</span>
						<div class="pic webuploader-container" 
							id="pay_pic_first" style="line-height: 120px;z-index: 9999999">
							<div class="webuploader-pick">
								<img class="pay_pic_first" 
									src="/img/base/pay_pic_again.png" style="width: 98px;height: 98px">
								<i class="wrong"></i>
							</div>
							<div id="rt_rt_1cvlbvi254pms441c7rks1fm61" 
								style="position: absolute; top: 0px; left: 0px; width: 98px; height: 120px; overflow: hidden; bottom: auto; right: auto;">
								<input type="file" 
									name="alipay_imgs" 
									class="webuploader-element-invisible" 
									multiple="multiple" 
									accept="image/jpg,image/jpeg,image/png">
								<label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label>
							</div>
						</div>
						<div class="pic webuploader-container" id="pay_pic_second" style="line-height: 120px;z-index: 9999999">
							<div class="webuploader-pick">
								<img class="pay_pic_second" src="/img/base/pay_pic_again.png" style="width: 98px;height: 98px">
								<i class="wrong"></i>
							</div>
							<div id="rt_rt_1cvlbvi279b78vaalp1jov1pds4" style="position: absolute; top: 0px; left: 0px; width: 98px; height: 120px; overflow: hidden; bottom: auto; right: auto;">
								<input type="file" 
									name="alipay_imgs" 
									class="webuploader-element-invisible" 
									multiple="multiple" 
									accept="image/jpg,image/jpeg,image/png">
								<label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label>
							</div>
						</div>
						<div class="pic webuploader-container" 
							id="pay_pic_third" style="line-height: 120px;z-index: 9999999">
							<div class="webuploader-pick">
								<img class="pay_pic_third" 
									src="/img/base/pay_pic_again.png" style="width: 98px;height: 98px">
								<i class="wrong"></i>
							</div>
							<div id="rt_rt_1cvlbvi28e1e1f0r1frh158f1gj7" 
								style="position: absolute; top: 0px; left: 0px; width: 98px; height: 120px; overflow: hidden; bottom: auto; right: auto;">
								<input type="file" name="alipay_imgs" 
									class="webuploader-element-invisible" 
									multiple="multiple" a
									ccept="image/jpg,image/jpeg,image/png">
								<label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label>
							</div>
						</div>
						<div style="display: inline-block;font-size: 12px;vertical-align: top;">
							<p class="activityIssue_tip" style="line-height:20px;background-position:0 2px">上传提示:</p>
							<p class="activityIssue_tipDetail" style="height: 20px;line-height: 20px;">1、支付宝截图至少上传1张，每张图片大小不超过2M；</p>
							<p class="activityIssue_tipDetail" style="height: 20px;line-height: 20px;">2、图片仅支持：PNG、JPEG、JPG 格式；</p>
							<p class="activityIssue_tipDetail">3、截图中显示的淘宝会员需要与您在拉趣绑定的淘宝会员；</p>
							<p class="tip">查看截图示例</p>
						</div>
					</li>
					<li class="fundAccount_cash_error">
						<i>支付宝账户截图不能为空</i>
						<em class="fundAcount_error_c"></em>
					</li>
					<li class="fundAccount_cash_d">
						<span>您绑定的手机号：</span>
						<em>
							<b>187****8352</b>
						</em>
					</li>
					<li class="fundAccount_cash_e">
						<span>输入验证码：</span>
						<input type="text" id="alipay-bind_vercode" style="width: 180px;" maxlength="6" name="smsCode">
						<div class="fundAccount_countdown">
							<em id="countdown_click" style="z-index:2;">发送验证码</em>
							<em id="countdown_unclick">
								<i id="countdown_time">60</i>秒后重发</em>
						</div>
					</li>
					<li class="fundAccount_cash_error">
						<i>验证码不能为空</i>
						<em class="fundAcount_error_c"></em>
					</li>
					<li class="fundAccount_cash_g">
						<span>备注：</span>
						<input type="text" name="remark" placeholder="非必填，如您有特别说明请在这里说明！"> </li>
					<li style="margin-top: 45px">
						<a href="javascript:void(0)" id="form_click">提交</a>
					</li>
				</form>
				<!--短信-->
				<input type="hidden" name="token" value="d49808680b9860a073d5d7d19143034c" id="tonkenNum"> </ul>
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