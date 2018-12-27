<?php 
//从查询结果中取回关联数组
//1、连接数据库
mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms");
//3、操作
$query = "select id,aname from cms_admin";
$result = mysql_query($query);

//获取查询的结果
/*
 * 4、应用mysql_fetch_array从查询的资源中获取一行结果。
 * 将获取到的结果进行输出。
 */
var_dump(mysql_fetch_assoc($result));
var_dump(mysql_fetch_assoc($result));
var_dump(mysql_fetch_assoc($result));
var_dump(mysql_fetch_assoc($result));
var_dump(mysql_fetch_assoc($result)); //false

//4、释放资源
mysql_close();















