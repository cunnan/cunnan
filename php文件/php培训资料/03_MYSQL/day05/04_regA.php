<?php
header('Content-Type:text/html;charset=utf-8');
$user = trim($_POST['user']);
$pwd = trim(md5($_POST['pwd']));
//echo $user.$pwd;
//1. 连接mysql
$link = mysql_connect('localhost','root','root');
//2. 打开数据库 cms
mysql_select_db('cms');
//3. SQL语句   添加
$sql ="insert cms_admin(aname,pwd) value('{$user}','{$pwd}')";
//4. 执行SQL 语句  --返回布尔类型
mysql_query($sql);
//5.增删改的影响行数
$count = mysql_affected_rows();
//6 .判断是否 添加成功
if($count>0){
   header('location:login.html');
}else{
	die('添加失败');
}
//7.关闭数据库
mysql_close();









