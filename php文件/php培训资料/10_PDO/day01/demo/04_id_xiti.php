<?php
header("Content-Type:text/html;charset=utf-8");
/*
 * 3、向cms_admin表中添加一条用户记录。若添加成功，
* 返回：
新增用户成功，新增用户id为：***
否则返回：
新增用户失败。
*/
//1、实例化PDO类
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root";
$pdo = new PDO($dsn,$username,$password);
$query = "insert cms_admin(aname,pwd)
		  value
		  ('rose100','".md5(123)."')";
$result = $pdo->exec($query);

if($result){
	echo "新增用户成功，新增用户id为：".$pdo->lastInsertId();
}else{
	echo "新增用户失败";
}
























