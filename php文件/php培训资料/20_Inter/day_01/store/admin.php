<?php
header("content-type:text/html;charset=utf-8");

//绑定模块
define("BIND_MODULE","Admin");
//指定应用程序的目录
define("APP_PATH","application/");
//开启调试模式
define("APP_DEBUG",true);
//构建目录安全
define("BUILD_DIR_SECURE",false);

include_once 'library/ThinkPHP/ThinkPHP.php';