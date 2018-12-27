<?php
header("content-type:text/html;charset=utf-8");
//同时存储多个数据
//mset 名 值 名 值 名 值

$redis = new Redis();
$redis->connect("localhost",6379);
$redis->select(10);

$data = array(
	"stuName"=>iconv("utf-8","gbk","张小明"),
	"mailBox"=>iconv("utf-8","gbk","123@sina.com"),
	"address"=>iconv("utf-8","gbk","北京")
);
$redis->mset($data);

$redis->close();












