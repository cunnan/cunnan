<?php
header('Content-Type:text/html;charset=utf-8');
define('APP_DEBUG',true);

// 定义应用目录
define('APP_PATH','./Application/');

define('BIND_MODULE','Admin');
// define('BIND_CONTROLLER_LIST','Index,Users,Products,Images,Members');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单

