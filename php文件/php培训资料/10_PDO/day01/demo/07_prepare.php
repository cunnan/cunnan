<?php 
//1、实例化PDO类
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root";
$pdo = new PDO($dsn,$username,$password);
//准备语句
/*
 * 4、应用PDO准备语句，向cms_admin表中插入一条数据记录。
 * 观察执行后的返回。
 */
//1、PDO类通知mysql对sql语句进行编译，此时sql语句只是被编译
//没有被执行
$query = "delete from cms_admin where id=4";
$statm = $pdo->prepare($query);
//var_dump($statm);
//2、绑定参数 （可选）此时sql语句中没有参数，不需要绑定，此步跳过
//3、执行
var_dump($statm->execute());





































