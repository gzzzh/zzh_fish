<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/index\view\shops\my_shops.html";i:1547126944;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的店铺</title>
</head>
<body>
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
        <p>店铺类型: <?php if($vo['store_type'] == 1): ?> 淘宝 <?php else: ?> 京东 <?php endif; ?></p>
        <p>店铺名称: <?php echo $vo['store_name']; ?></p>
        <p>店铺旺旺号: <?php echo $vo['wang_name']; ?></p>
        <p>负责人手机号: <?php echo $vo['mobile']; ?></p>
        <p>添加时间: <?php echo $vo['add_time']; ?></p>
        <p>状态: <?php if($vo['shop_status'] == 1): ?> 未认证 <?php else: ?> 已认证 <?php endif; ?></p>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>