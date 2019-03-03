<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/admin\view\notice\add.html";i:1547975120;s:78:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\admin\view\public\left.html";i:1547878793;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>网站后台管理</title>
    <link rel="stylesheet" type="text/css" href="<?php echo DS; ?>admin/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo DS; ?>admin/Admin/css/main.css?version=122515"/>
    <link rel="stylesheet" type="text/css" href="<?php echo DS; ?>admin/Admin/iconfont/demo.css">
    <link rel="stylesheet" type="text/css" href="<?php echo DS; ?>admin/Admin/iconfont/iconfont.css"/>
    <script type="text/javascript" src="<?php echo DS; ?>admin/Admin/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="<?php echo DS; ?>admin/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo DS; ?>admin/plugin/Js/layer/layer.js"></script>
    <!-- // <script type="text/javascript" src="/Public/plugin/Js/layer/extend/layer.ext.js"></script> -->
    <script type="text/javascript" src="<?php echo DS; ?>admin/js/laydate/laydate.js"></script>
    <link type="text/css" href="<?php echo DS; ?>admin/Admin/css/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
    <link type="text/css" href="<?php echo DS; ?>admin/Admin/css/jquery-ui-timepicker-addon.css" rel="stylesheet" />
    <script type="text/javascript" src="<?php echo DS; ?>admin/Admin/js/jquery-ui-1.8.17.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo DS; ?>admin/Admin/js/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="<?php echo DS; ?>admin/Admin/js/jquery-ui-timepicker-zh-CN.js"></script>
    <style type="text/css">
        .sub-menu li a .tag{
            position: absolute;
            top: 2px;
            right: 5px;
            color: #fff;
            background: red;
            width: 20px;
            height: 20px;
            display: inline-block;
            border-radius: 10px;
            line-height: 20px;
            text-align: center;
        }

        .list-page li {
            float:left;
            list-style:none;
        }
    </style>
    <script>
        (function ($) {
            // 汉化 Datepicker
            $.datepicker.regional['zh-CN'] =
                {
                    clearText: '清除', clearStatus: '清除已选日期',
                    closeText: '关闭', closeStatus: '不改变当前选择',
                    prevText: '<上月', prevStatus: '显示上月',
                    nextText: '下月>', nextStatus: '显示下月',
                    currentText: '今天', currentStatus: '显示本月',
                    monthNames: ['一月', '二月', '三月', '四月', '五月', '六月',
                        '七月', '八月', '九月', '十月', '十一月', '十二月'],
                    monthNamesShort: ['一', '二', '三', '四', '五', '六',
                        '七', '八', '九', '十', '十一', '十二'],
                    monthStatus: '选择月份', yearStatus: '选择年份',
                    weekHeader: '周', weekStatus: '年内周次',
                    dayNames: ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
                    dayNamesShort: ['周日', '周一', '周二', '周三', '周四', '周五', '周六'],
                    dayNamesMin: ['日', '一', '二', '三', '四', '五', '六'],
                    dayStatus: '设置 DD 为一周起始', dateStatus: '选择 m月 d日, DD',
                    dateFormat: 'yy-mm-dd', firstDay: 1,
                    initStatus: '请选择日期', isRTL: false
                };
            $.datepicker.setDefaults($.datepicker.regional['zh-CN']);

            //汉化 Timepicker
            $.timepicker.regional['zh-CN'] = {
                timeOnlyTitle: '选择时间',
                timeText: '时间',
                hourText: '小时',
                minuteText: '分钟',
                secondText: '秒钟',
                millisecText: '微秒',
                timezoneText: '时区',
                currentText: '现在时间',
                closeText: '关闭',
                timeFormat: 'hh:mm',
                amNames: ['AM', 'A'],
                pmNames: ['PM', 'P'],
                ampm: false
            };
            $.timepicker.setDefaults($.timepicker.regional['zh-CN']);
        })(jQuery);
    </script>
    <style>
        .iconfont{ padding-right:5px;}
        .fsize{ font-size:15px;}
    </style>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="Index/infoStatistics" target="_blank">全站统计信息</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="Manage/index">管理员</a></li>
                <li><a href="Manage/pwdUpdate">修改密码</a></li>
                <li><a href="<?php echo url('admin/Login/loginOut'); ?>">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="iconfont">&#xe635;</i><span class="fsize">常用操作</span></a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo url('admin/category/index'); ?>"><i class="iconfont"></i>&nbsp;分类管理</a></li>
                        <li><a href="<?php echo url('admin/focus/index'); ?>"><i class="iconfont"></i>&nbsp;轮播图管理</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="iconfont">&#xe635;</i><span class="fsize">用户管理</span></a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo url('admin/user/index'); ?>"><i class="iconfont"></i>&nbsp;用户列表</a></li>

                        <li><a href="<?php echo url('admin/user/shopUserIndex'); ?>"><i class="iconfont"></i>&nbsp;商家列表</a></li>

                    </ul>
                </li>

                <li>
                    <a href="#"><i class="iconfont">&#xe635;</i><span class="fsize">审核管理</span></a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo url('admin/audit/userTaobaoList'); ?>"><i class="iconfont"></i>&nbsp;用户淘宝审核</a></li>
                        <li><a href="<?php echo url('admin/audit/userAliList'); ?>"><i class="iconfont"></i>&nbsp;商用支付宝审核</a></li>
                        <li><a href="<?php echo url('admin/activity/index'); ?>"><i class="iconfont"></i>&nbsp;商家活动审核</a></li>
                        <li><a href="<?php echo url('admin/pay/index'); ?>"><i class="iconfont"></i>&nbsp;商用充值审核</a></li>
                        <li><a href="<?php echo url('admin/pay/txIndex'); ?>"><i class="iconfont"></i>&nbsp;商用提现审核</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="iconfont">&#xe635;</i><span class="fsize">公告管理</span></a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo url('admin/notice/index'); ?>"><i class="iconfont"></i>&nbsp;公告列表</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <script>
        $(".sidebar-list li").children("a").on("click",function(){
            $(this).next(".sub-menu").toggle();
        });

        function hlmenu(menuuri){
            if(!menuuri) {
                menuuri=window.location.pathname.toLowerCase().replace('.html','');
                menuurl=menuuri.toLowerCase();
            }
            $('.sub-menu > li > a').each(function(){
                href=$(this).attr('href').toLowerCase().replace('.html','');
                if(menuurl.indexOf(href)>=0){
                    $(this).parent().parent('.sub-menu').show();
                    $(this).parent().addClass('on');
                }
            });
        }
        hlmenu();
    </script>
<script type="text/javascript" charset="utf-8" src="<?php echo DS; ?>admin/kindeditor/kindeditor.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo DS; ?>admin/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo DS; ?>admin/kindeditor/plugins/code/prettify.js"></script>
<!--/sidebar-->
<div class="main-wrap">
    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo url('admin/Index/index'); ?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">公告管理</span></div>
    </div>
    <div class="result-wrap">
        <form action="<?php echo url('admin/Notice/save'); ?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
            <div class="config-items">
                <div class="config-title">
                    <h1><i class="icon-font">&#xe00a;</i><?php echo !empty($info)?'编辑公告' : '添加公告'; ?></h1>
                </div>
                <div class="result-content">
                    <table width="100%" class="insert-tab">
                        <tbody>

                        <input type="hidden" name="id" value="<?php echo (isset($id) && ($id !== '')?$id:''); ?>"/>
                        <tr>
                            <th><i class="require-red">*</i>公告标题：</th>
                            <td><input type="text"  value="<?php echo (isset($info['title']) && ($info['title'] !== '')?$info['title']:''); ?>" size="85" name="title" class="common-text"></td>
                        </tr>

                        <tr>
                            <th><i class="require-red">*</i>简介：</th>
                            <td><input type="text"  value="<?php echo (isset($info['intro']) && ($info['intro'] !== '')?$info['intro']:''); ?>" size="85" name="intro" class="common-text"></td>
                        </tr>

                        <tr>
                            <th><i class="require-red">*</i>排序：</th>
                            <td><input type="text"  value="<?php echo (isset($info['sort']) && ($info['sort'] !== '')?$info['sort']:''); ?>" size="28" name="sort" class="common-text">
                                默认为最后面
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>状态：</th>
                            <td>
                                <select name="status" style="width: 200px;height: 29px;">

                                    <?php if(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty())): ?>
                                    <option value="1">上线</option>
                                    <option value="2">下线</option>
                                    <?php else: ?>
                                    <option value="1" <?php if($info['status'] == 1): ?>selected<?php endif; ?>>上线</option>
                                    <option value="2" <?php if($info['status'] == 2): ?>selected<?php endif; ?>>下线</option>
                                    <?php endif; ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th><i class="require-red">*</i>内容：</th>
                            <td>
                                <textarea id="content" name="content" cols="30" style="width:1000px;height:600px;" rows="10"><?php echo (isset($info['content']) && ($info['content'] !== '')?$info['content']:''); ?></textarea>
                                <script>
                                    KindEditor.ready(function(K) {
                                        window.editor = K.create('#content',{
                                            imageTabIndex:1,//显示网络图片选项（0），显示本地图片（1）
                                            uploadJson : 'http://www.xianzhibao.com/admin/Index/uploadImgs',//标识处理图片的文件
                                            afterUpload:function (url){
                                                console.log(url)
                                            },
                                            pasteType:1,//粘贴方式：0 禁止，1 纯文本，2 html粘贴
                                            newlineTag:'p',
                                            allowUpload:false
                                        });
                                    });
                                </script>

                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input type="submit" value="提交" class="btn btn-primary btn6 mr10">
                                <a href="<?php echo url('admin/Notice/index'); ?>"><input type="button" value="返回"  class="btn btn6"></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </form>
    </div>
</div>
<!--/main-->
</div>
</body>
</html>
<script>
</script>