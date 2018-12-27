<?php 
header("Content-Type:text/html;charset=utf-8");
//模拟事务
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root";
$pdo = new PDO($dsn,$username,$password);
//1、关闭自动提交
$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,0);
//2、开启事务
$pdo->beginTransaction();
//3、执行
//jerry的钱减少50
$query = "update demo set money=money-50 where id=2";
$result_1 = $pdo->exec($query);
//tom的钱加入50
$query = "update demo set money=money+50 where id=1";
$result_2 = $pdo->exec($query);
//4、视两条sql语句执行的结果 绝对提交还是回滚
if($result_1&&$result_2){
	//都执行成功
	echo "交易成功";
	$pdo->commit();
}else{
	//若有其中之一不成功,回滚
	echo "交易失败";
	$pdo->rollBack();
}
//5、开启自动提交
$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,1);











