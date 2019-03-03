<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:96:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/index\view\activity\affirm_act.html";i:1548485648;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新增活动-二次确认</title>
</head>
<body>
        <form action="/biz/checkact" id="myform" method="post" enctype="multipart/form-data">
            <table width="100%" class="insert-tab">
                <tr>
                    <th><i class="require-red">*</i>选择店铺：</th>
                    <td><input type="text" name="merchant_id" value="<?php echo $data['shop_name']; ?>" readonly = "readonly" ></td>
                </tr>

                <tr>
                    <th><i class="require-red">*</i>商品名称：</th>
                    <td><input type="text" name="product_name" value="<?php echo $data['product_name']; ?>" readonly = "readonly"/></td>
                </tr>

                <tr>
                    <th><i class="require-red">*</i>分类：</th>
                    <td>

                    </td>
                </tr>

                <tr>
                    <th><i class="require-red">*</i>商品链接：</th>
                    <td><input type="text" name="product_name" /></td>
                </tr>

                <tr>
                    <th><i class="require-red"></i>商品收藏链接：</th>
                    <td><input type="text" name="collect_url" /></td>
                </tr>

                <tr>
                    <th><i class="require-red">*</i>商品主图：</th>
                    <td><input type="file" name="product_logo" /></td>
                </tr>

                <tr>
                    <th><i class="require-red">*</i>搜索关键词：</th>
                    <td><input type="text" name="task_label" /><span style="color: green">多个用英文逗号分隔</span></td>
                </tr>

                <tr>
                    <th><i class="require-red">*</i>排序方式：</th>
                    <td>
                        <select name="sortord">
                            <option value="1">综合排序</option>
                            <option value="2">信用排序</option>
                            <option value="3">销量排序</option>
                            <option value="4">价格降序</option>
                            <option value="5">价格升序</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th><i class="require-red">*</i>商品单价：</th>
                    <td><input type="text" name="product_price" /></td>
                </tr>

                <tr>
                    <th><i class="require-red">*</i>商品数量：</th>
                    <td><input type="text" name="num" /></td>
                </tr>

                <tr>
                    <th><i class="require-red">*</i>活动备注：</th>
                    <td><textarea name="remark"></textarea></td>
                </tr>

                <tr>
                    <th><i class="require-red">*</i>开始时间：</th>
                    <td><input type="date" name="begin_time" /></td>
                </tr>

                <tr>
                    <th><i class="require-red">*</i>结束时间：</th>
                    <td><input type="date" name="end_time" /></td>
                </tr>

                <tr>
                    <th></th>
                    <td><input type="submit"  value="下一步" /></td>
                </tr>
            </table>
        </form>
</body>
</html>