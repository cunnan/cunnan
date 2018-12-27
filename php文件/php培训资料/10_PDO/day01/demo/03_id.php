<?php
header("Content-Type:text/html;charset=utf-8");
//1、实例化PDO类
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root";
$pdo = new PDO($dsn,$username,$password);
//向cms_admin数据库表中插入一条记录
/*
 * 3、向cms_admin表中添加一条用户记录。若添加成功，
 * 返回：
      新增用户成功，新增用户id为：***
     否则返回：
     新增用户失败。
 */
$query = "insert into cms_admin(aname,pwd)
		  value
		  ('rose02','".md5(123)."')";
$result = $pdo->exec($query);

echo "被影响行数".$result;
echo "<br/>新增用户的id:".$pdo->lastInsertId();



























