<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

$apps = up61_scan_dir(APP_PATH . '*', GLOB_ONLYDIR);

foreach ($apps as $app) {
    $routeFile = APP_PATH . $app . '/route.php';

    if (file_exists($routeFile)) {
        include_once $routeFile;
    }
}

return [
];
