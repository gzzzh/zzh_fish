<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/index\view\user\my_alipay.html";i:1547130174;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的支付宝</title>
</head>
<body>
    <p>支付宝姓名: <?php echo $info['name']; ?></p>
    <p>支付宝账号: <?php echo $info['account']; ?></p>
    <p>状态: 状态 1=待审核 2=通过 3=驳回
        <?php if($vo['status'] == 1): ?> 等待审核
        <?php elseif($vo['status'] == 2): ?>通过认证
        <?php else: ?> 已驳回认证
        <?php endif; ?>
    </p>
    <p>申请时间: <?php echo $vo['add_time']; ?></p>
</body>
</html>