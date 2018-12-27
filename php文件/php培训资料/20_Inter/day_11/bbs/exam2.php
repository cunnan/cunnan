<?php
header("content-type:text/html;charset=utf-8");
//向redis中存储一个数据

$redis = new Redis();
$redis->connect("localhost",6379);
$redis->select(7);

$redis->set("like",iconv("utf-8","gbk","吃喝玩乐"));
$redis->set("length",iconv("utf-8","gbk",175));

$redis->close();












