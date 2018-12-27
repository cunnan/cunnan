<?php 
//myql_query对于有返回结果集的sql语句的操作
//1、连接数据库
mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms");
//3、操作 有返回结果集的sql语句
$query = "select id,aname from cms_admin";
$result = mysql_query($query);
var_dump($result);
