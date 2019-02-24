<?php

// +----------------------------------------------------------------------
// | Links [ Link All Thing ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 http://linkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liugene <liujun2199@vip.qq.com>
// +----------------------------------------------------------------------
// |               links 入口文件
// +----------------------------------------------------------------------

//目录基础常量的定义
define('ROOT_PATH', __DIR__ . '/');
//加载自动加载方法
require(ROOT_PATH . 'vendor/linkphp/loader/src/Loader.php');
//装载框架启动文件
$app = require_once(ROOT_PATH . 'bootstrap.php');
$app->event(
    'error',
    \app\provider\ErrorProvider::class,
    true
);
$app->event(
    'console',
    \app\provider\ConsoleProvider::class
);

$kernel = $app->make(app\Kernel::class);
$kernel->start()->complete();
//只需要这么几句话就可以运行 !><!
//是不是很轻便呀 喵~