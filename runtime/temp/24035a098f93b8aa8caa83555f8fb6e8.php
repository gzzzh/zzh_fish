<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:93:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/index\view\account\regindex.html";i:1551164753;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\header.html";i:1551164819;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\footer.html";i:1551164818;}*/ ?>
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
</head>
<link rel="stylesheet" href="<?php echo INDEX_STYLE; ?>css/login_register/login.css" />
<link rel="stylesheet" href="<?php echo INDEX_STYLE; ?>css/font/iconfont.css" />
<body>
	<div class="register_header">
		<div class="header_center clearfix">
			<div class="myfl">
				<a href="/index">
					<img src="<?php echo INDEX_STYLE; ?>img/home/laqu_logo.png" /> </a>
				<span>用户注册</span>
			</div>
			<div class="myfr">
				<a href="/index">返回首页</a>
				<span></span>
				<a href="/login">已有账户，直接
					<em>登录</em>
				</a>
			</div>
		</div>
	</div>
	<div class="register_content clearfix">
		<form class="form-box clearfix" id="regForm" novalidate="novalidate">
			<ul class="reg-type" id="J_checkType">
				<li class="reg-user cur" data-type="1">
					<i class="icon iconfont">&#xe606;</i>
					<span>用户注册</span>
					<p class="triangle"></p>
				</li>
				<li class="reg-user" data-type="2">
					<i class="icon iconfont">&#xe607;</i>
					<span>商家注册</span>
					<p class="triangle"></p>
				</li>
				<input name="type" type="hidden" id="J_Type" value="1"> 
			</ul>
			<ul class="reg-box clearfix">
				<li class="reg-input-text reg-usname">
					 <i class="icon iconfont">&#xe849;</i>
					<input type="text" 
						class="input-text" 
						name="mobile" 
						data-status="false" 
						value=""
						id="mobile" 
						autocomplete="on" 
						maxlength="11"
						onkeyup="checkRegisterPhone()"
						placeholder="请输入手机号码"
					  tabindex="1">
					<span class="error-mes"></span>
				</li>
				<li class="reg-input-text">
					<i class="icon iconfont">&#xe771;</i>
					<input type="password" 
								 class="input-text" 
								 name="psd" 
								 id="psd" 
								 onblur="checkPassword()"
								 placeholder="请输入密码" 
								 tabindex="2">
					<span class="error-mes"></span>
				</li>
				<li class="reg-input-text">
					<i class="icon iconfont">&#xe771;</i>
					<input type="password" 
						class="input-text" 
						name="checkpsd" 
						id="checkpsd" 
						onblur="checkRepPassword()"
						placeholder="确认密码" tabindex="3">
					<span class="error-mes"></span>
				</li>
				<li class="reg-input-text reg-code">
					<i class="icon iconfont">&#xe6b9;</i>
					<input type="text" 
						name="vcode" 
						id="J_authcode" 
						autocomplete="off" 
						class="input-text" 
						data-status="false" 
						maxlength="4"
						placeholder="图像验证码"
					 	tabindex="4">
					<a href="javascript:void(0);" onclick="getPictureCode()">
						<img src="http://39.108.99.113/get_code" 
							id="CodeImg" class="vcode" title="看不清？点击更换" onclick="this.src='http://39.108.99.113/get_code?'+Math.random()">
					</a>
					<span class="error-mes"></span>
				</li>
				<li class="reg-input-text">
					<i class="icon iconfont">&#xe6b9;</i>
					<input type="text" 
						class="input-text" 
						name="vcode" 
						placeholder="请输入手机验证码" 
						id="registerVcode"
						onkeyup="checkRegisterVcode()"
						maxlength="6"
						tabindex="4">
						<a href="javascript:void(0);">
							<button type="button" class="vcode" id="phoneCode">获取手机验证码</button>
					</a>
					<span class="error-mes" id="register_vcode"></span>
				</li>
				<li class="reg-input-text">
					 <i class="icon iconfont">&#xe601;</i>
					<input type="tel" 
						class="input-text" 
						name="qq" 
						id="qq"
						onkeyup="checkQQ()"
						placeholder="请输入QQ" 
						tabindex="4">
					<span class="error-mes"></span>
				</li>
				<li class="reg-input-text reg-proto ">
					<span class="invinte-code">邀请码:</span>
					<input type="text" 
						id="J_inviteCode" 
						name="agent" 
						class="input-text" 
						style="width: 230px; line-height: 30px; margin-right: 15px; padding: 15px 0 15px 5px;"
					 tabindex="5" 
					 maxlength="20">
					<span class="error-mes"></span>
				</li>
				
				<li class="reg-proto">
					<input id="J_agree" class="reg-agree" type="checkbox" name="J_agree" value="" tabindex="6">
					<label for="J_agree"> 我已阅读协议，知悉并认可协议条款
						<a href="http://www.shikee.com/us/confer.html" target="_blank">《用户使用协议》</a>
					</label>
					<span class="error-mes"></span>
				</li>
				<li class="reg-proto no-pt">
					<input id="J_agreehp" class="reg-agree" type="checkbox" name="J_agreehp" value="" tabindex="7">
					<label for="J_agreehp"> 我已阅读协议，知悉并认可协议条款
						<a href="http://help.shikee.com/guize/shikexinshoushanglu/zhuce/2018-01-19/1046.html" target="_blank">《一站互联服务协议》</a>
					</label>
					<span class="error-mes"></span>
				</li>
				<li class="reg-submit">
					<input type="buton" 
						class="submit_btn btn_disabled"
						id="J_Submit" 
						name="" 
						value="立即注册"
						disabled="disabled"
						onclick="register()"> 				
				</li>
			</ul>
		</form>
	</div>
	<script type="text/javascript" charset="UTF-8"
	 src="<?php echo INDEX_STYLE; ?>js/login_register/user_register.js?v=20189311"></script> 
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