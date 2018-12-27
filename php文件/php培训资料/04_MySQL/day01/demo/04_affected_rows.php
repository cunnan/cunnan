<?php 
header("Content-Type:text/html;charset=utf-8");
//被影响行数
//1、连接数据库
mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms");
//3、操作 delete
$query = "delete from cms_admin where id=1";
$result = mysql_query($query);
var_dump($result);
echo "<hr/>";
//被影响的行数
echo "被影响的行数".mysql_affected_rows();
//4、释放内存
mysql_close();





















