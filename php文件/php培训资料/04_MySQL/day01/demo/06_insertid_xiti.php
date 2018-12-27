<?php
header("Content-Type:text/html;charset=utf-8");
//2、给数据库cms中的表cms_admin新增一个用户。返回新用户的id。

//1、连接数据库
mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms");
//3、操作
$query = "insert cms_admin(aname,pwd)
		  value
		  ('jack08','555')";
$result = mysql_query($query);
var_dump($result);
//新增用户id
echo "新增用户id:".mysql_insert_id();
//4、释放资源
mysql_close();














