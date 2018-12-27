<?php

//自增id
//1、连接数据库
$link = mysql_connect("localhost","root","root");

//2、选择默认数据库
mysql_select_db("cms");
//3、操作 没有返回结果集的sql语句 insert update delete
$query = "insert cms_admin(aname,pwd) 
		  value
		  ('jack04','555')";
$result = mysql_query($query);
var_dump($result);
echo "<hr/>";
//2、给数据库cms中的表cms_admin新增一个用户。
//返回新用户的id。
//自增id
echo "id=".mysql_insert_id();

//4、释放资源
mysql_close();





















