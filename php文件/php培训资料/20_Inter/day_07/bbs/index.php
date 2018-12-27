<?php
header("content-type:text/html;charset=utf-8");

//查询所有记录
$url = "mysql:host=localhost;dbname=test";
$user = "root";
$pwd = "root";
$conn = new PDO($url,$user,$pwd);
$conn->query("set names utf8");
$st = $conn->query("select * from menuInfo");
$rs = $st->fetchAll();

//遍历菜单(递归调用)
function hello($pid)
{
	global $rs;
	foreach($rs as $v)
	{
		if($v["pid"] == $pid)
		{
			echo "{$v["menuName"]}<br>";
			//显示该菜单的子菜单
			hello($v["menuId"]);
		}
	}
}

hello(0);






















