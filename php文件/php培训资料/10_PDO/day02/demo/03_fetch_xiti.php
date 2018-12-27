<?php
header("Content-Type:text/html;charset=utf-8");
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root"; 
$pdo = new PDO($dsn,$username,$password);
/*
 * 1、应用PDO的准备语句，从cms_admin数据库表中循环获取
 * 查询的记录。将获取的结果打印到屏幕上。
 */
//准备语句
//1、PHP通知MySQL编译sql语句
$query = "select id,aname,pwd from cms_admin";
$statm = $pdo->prepare($query);
//3、执行
$result = $statm->execute();

//循环获取查询的结果
while($row = $statm->fetch(PDO::FETCH_ASSOC)){
	echo "ID:".$row["id"]." 用户名：".$row['aname'].
	" 密码：".$row["pwd"]."<br/>";
}

//查询结果的行数
echo "<br/>共".$statm->rowCount()."条记录";




























