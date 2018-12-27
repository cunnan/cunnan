<?php 
//1、实例化PDO类
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root";
$pdo = new PDO($dsn,$username,$password);
//应用PDO类的成员方法query，执行一条有返回结果集的sql语句
$query = "select id,aname from cms_admin where id=4";
$statm = $pdo->query($query);
foreach($statm as $value){
	var_dump($value);
}












