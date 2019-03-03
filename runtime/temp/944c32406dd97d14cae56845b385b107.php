<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:97:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/index\view\activity\shop_addact.html";i:1550718877;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\header.html";i:1548216744;s:92:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\base_message_title.html";i:1548216741;s:82:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\nav_menu.html";i:1548216745;s:80:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\index\view\public\footer.html";i:1548216744;}*/ ?>
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
				<div class="shopBind_right myfl" style="background:#FFF;">
					<p class="publishing-activities">发布活动</p>
					<?php if(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty())): ?>
						<form action="/biz/checkact" id="myform" method="post" enctype="multipart/form-data">
						<?php else: ?>
							<form action="/save/tasks" id="myform" method="post" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?php echo $info['id']; ?>" />
								<input type="hidden" name="types" value="edit" />
						<?php endif; ?>
						<table width="100%" class="insert-tab">
							<tr>
								<td><i class="require-red">*</i>活动类型：</td>
								<td>
									<select name="task_type">
										<?php if(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty())): ?>
											<option value="1">当天活动类型</option>
											<option value="2">连续活动类型</option>
										<?php else: ?>
										<option value="1" <?php if($info['task_type'] == 1): ?>selected<?php endif; ?>>当天活动类型</option>
										<option value="2" <?php if($info['task_type'] == 2): ?>selected<?php endif; ?>>连续活动类型</option>
										<?php endif; ?>
									</select>
								</td>
							</tr>

							<tr>
								<td><i class="require-red">*</i>选择店铺：</td>
								<td>
									<select name="merchant_id">
										<?php if(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty())): if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
												<option value="<?php echo $vo['id']; ?>"><?php echo $vo['store_name']; ?></option>
											<?php endforeach; endif; else: echo "" ;endif; else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
												<option value="<?php echo $vo['id']; ?>" <?php if($info['merchant_id'] == $vo['id']): ?>selected<?php endif; ?>><?php echo $vo['store_name']; ?></option>
											<?php endforeach; endif; else: echo "" ;endif; endif; ?>
									</select>
								</td>
							</tr>

							<tr>
								<td><i class="require-red">*</i>分类：</td>
								<td>
									<select name="category_id">
										<?php if(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty())): if(is_array($cateList) || $cateList instanceof \think\Collection || $cateList instanceof \think\Paginator): if( count($cateList)==0 ) : echo "" ;else: foreach($cateList as $key=>$vo): ?>
												<option value="<?php echo $vo['id']; ?>"><?php echo $vo['catname']; ?></option>
											<?php endforeach; endif; else: echo "" ;endif; else: if(is_array($cateList) || $cateList instanceof \think\Collection || $cateList instanceof \think\Paginator): if( count($cateList)==0 ) : echo "" ;else: foreach($cateList as $key=>$vo): ?>
												<option value="<?php echo $vo['id']; ?>" <?php if($info['category_id'] == $vo['id']): ?>selected<?php endif; ?>><?php echo $vo['catname']; ?></option>
											<?php endforeach; endif; else: echo "" ;endif; endif; ?>
									</select>
								</td>
							</tr>

							<tr>
								<td><i class="require-red">*</i>商品名称：</td>
								<td><input type="text" name="product_name" value="<?php echo (isset($info['product_name']) && ($info['product_name'] !== '')?$info['product_name']:''); ?>" placeholder="请输入活动商品的名称"/></td>
							</tr>

							<tr>
								<td><i class="require-red">*</i>商品链接：</td>
								<td><input type="text" name="product_link" value="<?php echo (isset($info['product_link']) && ($info['product_link'] !== '')?$info['product_link']:''); ?>"  placeholder="请输入活动商品的链接"/></td>
							</tr>

							<?php if(!(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty()))): ?>
								<tr>
									<td width="15%"><i class="require-red">*</i>商品主图：</td>
									<td><img style="width:50px;" src="<?php echo (isset($info['product_logo']) && ($info['product_logo'] !== '')?$info['product_logo']:''); ?>"></td>
								</tr>
							<?php endif; ?>


							<tr>
								<td><i class="require-red">*</i>商品主图：</td>
								<td><input type="file" name="product_logo" /></td>
							</tr>

							<?php if(!(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty()))): ?>
							<tr>
								<td width="15%"><i class="require-red">*</i>礼品主图：</td>
								<td><img style="width:50px;" src="<?php echo (isset($info['product_logo_two']) && ($info['product_logo_two'] !== '')?$info['product_logo_two']:''); ?>"></td>
							</tr>
							<?php endif; ?>

							<tr>
								<td><i class="require-red"></i>礼品主图：</td>
								<td><input type="file" name="product_logo_two" /></td>
							</tr>

							<tr>
								<td><i class="require-red">*</i>搜索关键词：</td>
								<td><input type="text" name="task_label" value="<?php echo (isset($info['task_label']) && ($info['task_label'] !== '')?$info['task_label']:''); ?>" placeholder="例: 关键词1,关键词2"/><span class="activities-tips">多个关键词用英文逗号','分隔</span></td>
							</tr>

							<tr>
								<td><i class="require-red">*</i>排序方式：</td>
								<td>
									<?php if(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty())): ?>
										<select name="sortord">
											<option value="1">综合排序</option>
											<option value="2">信用排序</option>
											<option value="3">销量排序</option>
											<option value="4">价格降序</option>
											<option value="5">价格升序</option>
										</select>
									<?php else: ?>
										<select name="sortord">
											<option value="1" <?php if($info['sortord'] == 1): ?>selected<?php endif; ?>>综合排序</option>
											<option value="2" <?php if($info['sortord'] == 2): ?>selected<?php endif; ?>>信用排序</option>
											<option value="3" <?php if($info['sortord'] == 3): ?>selected<?php endif; ?>>销量排序</option>
											<option value="4" <?php if($info['sortord'] == 4): ?>selected<?php endif; ?>>价格降序</option>
											<option value="5" <?php if($info['sortord'] == 5): ?>selected<?php endif; ?>>价格升序</option>
										</select>
									<?php endif; ?>
								</td>
							</tr>

							<tr>
								<td><i class="require-red">*</i>商品单价：</td>
								<td><input type="text" name="product_price" value="<?php echo (isset($info['product_price']) && ($info['product_price'] !== '')?$info['product_price']:''); ?>" placeholder="活动商品的单价"/></td>
							</tr>

							<tr>
								<td><i class="require-red">*</i>商品数量：</td>
								<td><input type="text" name="num" value="<?php echo (isset($info['num']) && ($info['num'] !== '')?$info['num']:''); ?>" placeholder="请输入整数的数量"/></td>
							</tr>

							<tr>
								<td><i class="require-red"></i>商品规格/备注：</td>
								<td><input type="text" name="remark" value="<?php echo (isset($info['remark']) && ($info['remark'] !== '')?$info['remark']:''); ?>" placeholder="默认: 任意规格.不能输入空格"/></td>
							</tr>

							<tr>
								<td><i class="require-red">*</i>是否包邮：</td>
								<td>
									<select>
										<option>包邮</option>
									</select>
								</td>
							</tr>

							<tr>
								<td><i class="require-red">*</i>开始时间：</td>
								<td><input type="text" name="begin_time" id='begin_time' readonly placeholder="年/月/日"/></td>
							</tr>

							<tr>
								<td><i class="require-red">*</i>结束时间：</td>
								<td><input type="text" name="end_time" id="eng_time" readonly placeholder="年/月/日"/></td>
							</tr>

							<tr>
								<td><i class="require-red">*</i>支持花呗：</td>
								<td>
									<?php if(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty())): ?>
										<input name="if_huabei" type="radio" value="1" checked="checked" />不支持
										<input name="if_huabei" type="radio" value="2" />支持
									<?php else: ?>
										<input name="if_huabei" type="radio" value="1" <?php if($info['if_huabei'] == 1): ?>checked<?php endif; ?> />不支持
										<input name="if_huabei" type="radio" value="2" {if condition='$info.if_huabei eq 2'}checked{/if />支持
									<?php endif; ?>
								</td>
							</tr>

							<tr>
								<td><i class="require-red">*</i>支持信用卡：</td>
								<td>
									<?php if(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty())): ?>
									<input name="if_visa" type="radio" value="1" checked="checked" />不支持
									<input name="if_visa" type="radio" value="2" />支持
									<?php else: ?>
									<input name="if_visa" type="radio" value="1" <?php if($info['if_huabei'] == 1): ?>checked<?php endif; ?> />不支持
									<input name="if_visa" type="radio" value="2" {if condition='$info.if_huabei eq 2'}checked{/if />支持
									<?php endif; ?>
								</td>
							</tr>

							<tr>
								<td><i class="require-red">*</i>开启增值服务：</td>
								<td>
									<?php if(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty())): ?>
									<label for="is_serve">
										<input name="is_serve" type="radio" value="1" checked="checked" />不开启</label>
									<label for="is_serve"><input name="is_serve" type="radio" value="2" />开启</label>
									<?php else: ?>
									<label for="is_serve"><input name="is_serve" type="radio" value="1" <?php if($info['if_huabei'] == 1): ?>checked<?php endif; ?> />不开启</label>
									<label for="is_serve"><input name="is_serve" type="radio" value="2" {if condition='$info.if_huabei eq 2'}checked{/if />开启</label>
									<?php endif; ?>
								</td>
							</tr>
								<tr class="valueAddService">
									<td><i class="require-red"></i>增值服务：</td>
									<td>
										<span>旺旺聊天</span><input type="text" name="user_chat"  value="<?php echo (isset($info['user_chat']) && ($info['user_chat'] !== '')?$info['user_chat']:''); ?>" placeholder="请输入次数"/>
									</td>
								</tr>
								<tr class="valueAddService">
									<td><i class="require-red"></i>增值服务：</td>
									<td>
										<span>手淘问大家</span><input type="text" name="user_ask" value="<?php echo (isset($info['user_ask']) && ($info['user_ask'] !== '')?$info['user_ask']:''); ?>" placeholder="请输入次数"/>
									</td>
								</tr>
								<tr class="valueAddService">
									<td><i class="require-red"></i>增值服务：</td>
									<td>
										<span>晒图/视频</span><input type="text" name="user_photo" value="<?php echo (isset($info['user_photo']) && ($info['user_photo'] !== '')?$info['user_photo']:''); ?>" placeholder="请输入次数"/>
									</td>
								</tr>
								<tr class="valueAddService">
									<td><i class="require-red"></i>增值服务：</td>
									<td>
										<span>追加图片</span><input type="text" name="add_photo" value="<?php echo (isset($info['add_photo']) && ($info['add_photo'] !== '')?$info['add_photo']:''); ?>" placeholder="请输入次数"/>
									</td>
								</tr>
								<tr class="valueAddService">
									<td><i class="require-red"></i>增值服务：</td>
									<td>
										<span>追加评论</span><input type="text" name="add_cooent" value="<?php echo (isset($info['add_cooent']) && ($info['add_cooent'] !== '')?$info['add_cooent']:''); ?>" placeholder="请输入次数"/>
									</td>
								</tr>
							</div>
							<tr>
								<td></td>
								<?php if(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty())): ?>
								<td><input type="submit"  value="添加活动" /></td>
								<?php else: ?>
								<td><input type="submit"  value="保存修改" /></td>
								<?php endif; ?>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo INDEX_STYLE; ?>layer/laydate.js"></script>
	<script>
		laydate.render({
		  elem: '#begin_time', //指定元素
		});
		laydate.render({
		  elem: '#eng_time' //指定元素
		});
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