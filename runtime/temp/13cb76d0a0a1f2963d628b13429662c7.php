<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:93:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/admin\view\audit\user_index.html";i:1545717375;s:78:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\application\admin\view\public\left.html";i:1547878793;}*/ ?>
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
<link rel="stylesheet" href="<?php echo DS; ?>admin/js/layer/viewwe.min.css" />
<script type="text/javascript" src="<?php echo DS; ?>admin/js/layer/viewer.min.js"></script>
<!--<script type="text/javascript" src="/Public/js/layer/layer.js"></script>-->
<!--/sidebar-->
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo url('admin/Index/index'); ?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">用户淘宝审核列表</span></div>
    </div>
    <div class="search-wrap">
        <div class="search-content">
            <form action="<?php echo url('admin/Audit/userTaobaoList'); ?>" method="get">
                <table class="search-tab">
                    <tr>
                        <td>
                            <select name="status" id="seleceds" value="">
                                <option value="10">所有状态</option>
                                <option value="1" <?php if(1): ?>selected<?php endif; ?>>等待审核</option>
                                <option value="2" <?php if(2): ?>selected<?php endif; ?>>通过认证</option>
                                <option value="3" <?php if(3): ?>selected<?php endif; ?>>驳回</option>
                            </select>
                        </td>
                        <td><input class="common-text" placeholder="手机号进行搜索" value="<?php echo (isset($uid) && ($uid !== '')?$uid:''); ?>" name="uid" type="text" id="search"/></td>
                        <td><input class="btn btn-primary btn2"  value="搜索" type="submit"/></td>
                    </tr>
                </table>
            </form>

        </div>
    </div>
    <div class="result-wrap">
        <div class="result-content">
            <table class="result-tab" width="100%">
                <tr>
                    <th>上传时间</th>
                    <th>用户UID</th>
                    <th>淘宝账号</th>
                    <th>淘宝账号截图</th>
                    <th>淘气值</th>
                    <th>淘气值截图</th>
                    <th>性别</th>
                    <th>出生年份</th>
                    <th>状态</th>
                    <th>初审时间</th>
                    <th>审核人</th>
                    <th>操作</th>
                </tr>
                <tbody id="list">
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
                    <tr>
                        <td><?php echo $vo['add_time']; ?></td>
                        <td><?php echo $vo['userid']; ?></td>
                        <td><?php echo $vo['account']; ?></td>
                        <td class="idcards">
                            <a href="/<?php echo $vo['account_imgs']; ?>" target="_blank"><img src="/<?php echo $vo['account_imgs']; ?>"/></a>
                        </td>
                        <td><?php echo $vo['price_value']; ?></td>
                        <td class="idcards">
                            <a href="/<?php echo $vo['price_imgs']; ?>" target="_blank"><img src="/<?php echo $vo['price_imgs']; ?>"/></a>
                        </td>
                        <td><?php echo $vo['sex']; ?></td>
                        <td><?php echo $vo['birth_year']; ?></td>
                        <td>
                            <?php if($vo['status'] == 1): ?><span>待审核
                            <?php elseif($vo['status'] == 2): ?><span style="color: green">通过审核
                            <?php else: ?>
                            <span style="color: red">驳回
                            <?php endif; ?>
                            </span>
                        </td>

                        <td>
                            <?php if($vo['audit_time'] == 0): ?>/
                            <?php else: ?>
                            <?php echo $vo['audit_time']; endif; ?>
                        </td>

                        <td><?php echo (isset($vo['nickname']) && ($vo['nickname'] !== '')?$vo['nickname']:''); ?></td>

                        <td>
                            <?php if($vo['status'] == 1): ?>
                            <a href="<?php echo url('admin/Audit/pass',['id' => $vo['id'],'userid' => $vo['userid'],'type' => 'pass']); ?>">通过</a>
                            <a href="<?php echo url('admin/Audit/pass',['id' => $vo['id'],'userid' => $vo['userid'],'type' => 'pass']); ?>">驳回</a>
                            <?php endif; ?>
                        </td>

                    </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        </tbody>
        </table>
        <div class="list-page"> <ul><?php echo $page; ?></ul></div>
    </div>

</div>
</div>
<!--/main-->
</div>


<div id="hides"></div>
</body>
</html>
<script>
    function checkimg(id){
        var viewer = new Viewer(document.getElementById(id), {
            url: 'data-original'
        });
    }
</script>