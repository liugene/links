<?php

// +----------------------------------------------------------------------
// | LinkPHP [ Link All Thing ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 http://linkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liugene <liujun2199@vip.qq.com>
// +----------------------------------------------------------------------
// |               配置类
// +----------------------------------------------------------------------

$loader = new \linkphp\loader\Loader();
//注册自动加载方法
$loader->register(
    $loader->import(require_once(ROOT_PATH . 'config/map.php'))
        ->setVendorPath(ROOT_PATH . 'vendor/')
        ->setLoadPath(ROOT_PATH . 'config/')
        ->setExtendPath(ROOT_PATH . 'ext/')
        ->setFrameWorkPath(ROOT_PATH . 'vendor/linkphp/framework/src/')
        ->setExt('.php')
)->complete();
$app = new \framework\Application();
$app->event(
    'loader',
    \linkphp\loader\provider\RegisterProvider::class,
    true
);
$app->event(
    'system',
    [
        \linkphp\event\provider\EnvProvider::class,
        \app\provider\ConfigProvider::class,
        \app\provider\LogProvider::class
    ]
);
$app->containerInstance(
    \linkphp\loader\Loader::class,
    $loader
);
$app->containerInstance(
    \framework\Application::class,
    $app
);
//应用周期
$app->run();
return $app;