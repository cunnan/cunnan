<?php
header("Content-Type:text/html;charset=utf-8");
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root"; 
$pdo = new PDO($dsn,$username,$password);
//准备语句 
//1、PHP通知MySQL编译sql语句，此时仅编译 不执行
$query = "select id,aname from cms_admin";
$statm = $pdo->prepare($query);
//3、执行
$result = $statm->execute();
//var_dump($result); true
/*
 * 1、应用PDO的准备语句，从cms_admin数据库表中循环获取
 * 查询的记录。将获取的结果打印到屏幕上。
 */
var_dump($statm->fetch()); //关联和索引数组
echo "<hr/>";
var_dump($statm->fetch(PDO::FETCH_BOTH));//关联和索引数组
echo "<hr/>";
var_dump($statm->fetch(PDO::FETCH_ASSOC));//关联数组
echo "<hr/>";
var_dump($statm->fetch(PDO::FETCH_NUM));//索引数组
echo "<hr/>";
var_dump($statm->fetch(PDO::FETCH_NUM));//索引数组































