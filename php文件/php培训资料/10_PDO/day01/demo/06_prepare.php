<?php 
//1、实例化PDO类
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root";
$pdo = new PDO($dsn,$username,$password);
//更新cms_admin数据库表中用户的密码
$query = "update cms_admin set pwd='777' where id=".$_GET['id'];
//echo $query;exit;
$pdo->exec($query);











