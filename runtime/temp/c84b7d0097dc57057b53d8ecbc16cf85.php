<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/admin\view\login\index.html";i:1545550757;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>网站后台管理</title>
    <link href="<?php echo DS; ?>admin/Admin/css/admin_login.css" rel="stylesheet" type="text/css" />
    <style>
        body{background-image:url(/admin/Admin/images/adminbg.jpg);background-size:cover;background-repeat: repeat;}
    </style>
</head>
<body>
<div class="admin_login_wrap">
    <h1>后台登录</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="checkLogin" method="post">
                <ul class="admin_items">
                    <li>
                        <input type="password" style="z-index:-9999;position:absolute;" />
                        <label for="user">用户名：</label>
                        <input type="text" name="name" value="" id="user" size="40" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="pwd" value="" id="pwd" size="40" class="admin_input_style" />
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>

</div>
</body>
</html>