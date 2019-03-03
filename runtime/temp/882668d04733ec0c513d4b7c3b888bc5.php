<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:99:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/index\view\activity\add_trade_num.html";i:1550581265;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>活动-付款输入订单号</title>
</head>
<body>
<form action="/uc/tjtrade" id="myform" method="post" enctype="multipart/form-data">
    <table width="100%" class="insert-tab">
        <tr>
            <input type="hidden" name="id" value="<?php echo $info['id']; ?>"/>
            <th><i class="require-red">*</i>商品名称：</th>
            <td><?php echo $info['product_name']; ?></td>
        </tr>

        <tr>
            <th><i class="require-red">*</i>商品主图：</th>
            <td><img style="width:50px;" src="<?php echo $info['product_logo']; ?>" /> </td>
        </tr>

        <tr>
            <th><i class="require-red">*</i>商品单价：</th>
            <td><?php echo $info['product_price']; ?></td>
        </tr>

        <tr>
            <th><i class="require-red">*</i>商品数量：</th>
            <td><?php echo $info['num']; ?></td>
        </tr>

        <tr>
            <th><i class="require-red">*</i>开始时间：</th>
            <td><?php echo $info['begin_time']; ?></td>
        </tr>

        <tr>
            <th><i class="require-red">*</i>结束时间：</th>
            <td><?php echo $info['end_time']; ?></td>
        </tr>

        <tr>
            <th><i class="require-red">*</i>状态：</th>
            <td>
                <?php if($info['status'] == 1): ?>待付款
                <?php elseif($info['status'] == 2): ?>(已付)待审核
                <?php elseif($info['status'] == 3): ?>进行中
                <?php elseif($info['status'] == 4): ?>已完成
                <?php elseif($info['status'] == 5): ?>未通过审核
                <?php elseif($info['status'] == 6): ?>超期失效
                <?php endif; ?>
            </td>
        </tr>

        <tr>
            <th><i class="require-red">*</i>费用总览：</th>
            <td>
                总费用:<?php echo $info['countsPrice']; ?><br>
                担保金:<?php echo $info['deposit']; ?> <br>
                活动费用:<?php echo $info['service']; ?> <br>
                增值服务费:<?php echo $info['adv_price']; ?><br>
            </td>
        </tr>

        <tr>
            <th><i class="require-red">*</i>支付订单号：</th>
            <td><input type="text" name="trade_no"/></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit"  value="提交" /></td>
        </tr>
    </table>
</form>
</body>
</html>