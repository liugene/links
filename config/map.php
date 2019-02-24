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
// |               映射文件
// +----------------------------------------------------------------------
return [
    //psr4命名空间注册
    'autoload_namespace_psr4'   =>  [
        'app\\'         =>  [
            ROOT_PATH . 'application'
        ],
        'links\\'         =>  [
            ROOT_PATH . 'vendor/liugene/links/src'
        ],
    ],
    //psr0命名空间
    'autoload_namespace_psr0' => [
        //'命名空间' => '映射路径地址'
    ],
    //指定自动加载机制排序
    'autoload_namespace_file' => [
        //'文件名' => '映射路径地址'
        'check'                 => ROOT_PATH . 'vendor/liugene/links/src/check.php',
        'defined'                 => ROOT_PATH . 'vendor/liugene/links/src/define.php',
        'framework_defined'                 => ROOT_PATH . 'vendor/linkphp/framework/src/define.php',
        'framework_func'          => ROOT_PATH . 'vendor/linkphp/framework/src/helper.php'
    ],
    'class_autoload_map' => [
        //'类名' => '类文件地址'
    ],
];