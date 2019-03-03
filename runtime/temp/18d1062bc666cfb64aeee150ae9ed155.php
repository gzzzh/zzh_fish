<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"C:\phpStudy\PHPTutorial\WWW\xianzhitao\public/../application/index\view\notice\index.html";i:1548088362;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>系统公告</title>
</head>
<body>
    <table>

        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
        <tr>
            <td><?php echo $vo['title']; ?></td>
            <td><?php echo $vo['publish_time']; ?></td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </table>

    <p>当前页：<?php echo $page; ?></p>
    <p>总数量：<?php echo $cNumber; ?></p>
    <p>总页数：<?php echo $cPage; ?></p>


</body>
</html>