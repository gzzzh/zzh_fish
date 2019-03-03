<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:94:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/index\view\shops\bind_taobao.html";i:1545978846;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商家绑定淘宝店铺页面</title>
</head>
<body>
    <form action="/biz/subshops">
        店铺名称： <input type="text" name="store_name"> <br>
        旺旺名称： <input type="text" name="wang_name">  <br>
        店铺链接： <input type="text" name="store_url">  <br>
        联系QQ： <input type="text" name="store_qq">   <br>
        手机号： <input type="text" name="mobile">  <br>
        <input type="submit" value="提交">
    </form>
</body>
</html>