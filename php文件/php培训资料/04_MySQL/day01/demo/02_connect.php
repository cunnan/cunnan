<?php 
/*
 * 1、应用PHP的MySQL函数库，更新数据库cms中的表
 * cms_admin中
 * id为1的用户名。
 */
//1、连接数据库
$link = mysql_connect("localhost:3306","root","root");
//var_dump($link);
//2、选择默认数据库
mysql_select_db("cms");
//3、操作 没有返回结果集的sql语句 insert update delete
$query = "insert cms_admin(aname,pwd) 
		  value
		  ('jack01','555')";
$result = mysql_query($query);
var_dump($result);

//4、释放资源
mysql_close();





















