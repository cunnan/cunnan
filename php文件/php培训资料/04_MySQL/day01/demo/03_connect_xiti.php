<?php 
/*
 * 1、应用PHP的MySQL函数库，更新数据库cms中的表
 * cms_admin中id为1的用户名。
 */
//1、连接数据库
mysql_connect("localhost","root","root");
//2、选择数据库
mysql_select_db("cms");
//3、操作 没有返回结果集的sql语句 insert update delete
$query = "update cms_admin set aname='john' 
		  where id=1";
$result = mysql_query($query);
//根据mysql_query的返回，可以知道执行是否成功
var_dump($result); 

//4、关闭数据库 释放内存
mysql_close();













