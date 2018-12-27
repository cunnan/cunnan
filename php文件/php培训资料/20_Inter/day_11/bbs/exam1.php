<?php
header("content-type:text/html;charset=utf-8");
//获得一个数据

$redis = new Redis();
$redis->connect("localhost",6379);//连接服务
$redis->select(0);//选择库

$userName = iconv("gbk","utf-8",$redis->get("userName"));
$age = iconv("gbk","utf-8",$redis->get("age"));

echo "{$userName}---{$age}";


$redis->close();












