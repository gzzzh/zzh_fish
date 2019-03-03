<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:93:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/index\view\login\loginindex.html";i:1551164795;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\header.html";i:1551164819;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\footer.html";i:1551164818;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="<?php echo INDEX_STYLE; ?>css/login_register/login.css">
	<body>
		<div class="login_header">
			<div class="header_center clearfix">
				<div class="myfl">
					<a href="/index">
						<img src="<?php echo INDEX_STYLE; ?>img/home/laqu_logo.png" />
					</a>
					<span>欢迎登录</span>
				</div>
				<div class="myfr">
					<a href="/index">返回首页</a>
				</div>
			</div>
		</div>
		<div class="login_content clearfix">
			<input type="hidden" id="memberType" value="" />
			<form action="/logincheck" method="post" id="login_form">
				<input type="hidden" name="memberType" id="parameter" value="1" />
				<input type="hidden" value="" class="logiontype">
				<div class="login_box myfr">
					<p class="system_error"></p>
					<div class="passwordsand">
						<p class="login_input">
							<span style="display: inline-block;height: 46px;width: 25px;background: url(/static/index/img/login_register/username_bg.png) no-repeat left center;vertical-align: top">
							</span>
							<input type="text" 
								name="mobile" 
								value="" 
								style="width: 248px;border-bottom: none;padding-left: 0px;margin-left: 0;background: none"
							  placeholder="手机号/用户名" 
							  onkeyup="checkPhone()"
							  maxlength="11"
							  id="username" /> 
						</p>
						<p class="login_input">
							<span style="display: inline-block;height: 46px;width: 25px;background: url(/static/index/img/login_register/password_bg.png) no-repeat left center;vertical-align: top">
							</span>
							<input 
								type="password" 
								placeholder="登录密码" 
								id="password" 
								name="psd" 
								maxlength="18"
								value="" 
								onkeyup="checkLoginPassword(this.value)"
								style="width: 248px;border-bottom: none;padding-left: 0px;margin-left: 0;background: none"/>
						</p>
						<p class="login_input" style="position: relative;">
							<span style="display: inline-block;height: 46px;width: 25px;background: url(/static/index/img/login_register/password_bg.png) no-repeat left center;vertical-align: top">
							</span>
							<input 
								type="text" 
								placeholder="验证码"
								name="vcode"
								id="loginVcode"
								onkeyup="checkLoginVcode()"
								value="" 
								maxlength="6"
								style="width: 248px;border-bottom: none;padding-left: 0px;margin-left: 0;background: none"/>
								<button class="myfr go_phone" type="button" id="phoneCode" onclick="getLoginPhoneCode()">手机验证码登录</button>
						</p>
						<p class="username_error" id='error_message'></p>
					</div>
					<input type="button" 
						value="立即登录"
						id="login_btn"
						class="submit_btn btn_disabled" 
						onclick="login()">
					<div class="entry_mode clearfix">
						<a href="/forget" class="myfl">忘记密码？</a>
						<p class="myfr">
							<span>没有账号？</span>
							<a href="/reg"> 注册 </a>
						</p>
					</div>
				</div>
			</form>
		</div>
		<script src="<?php echo INDEX_STYLE; ?>js/login_register/user_register.js"></script>
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