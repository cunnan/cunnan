<?php
require '../config.ini.php';
$id=$_GET['id'];
if(!$smarty->isCached("news/detail.html",$id)){
	require ROOT.'function/function.php';
	$sql="select * from news where id=$id";
	$pdoS=$pdo->prepare($sql);
	$re=$pdoS->execute();
	$arr=$pdoS->fetch(PDO::FETCH_ASSOC);
	$smarty->assign('arr',$arr);
}
$smarty->display("news/detail.html",$id);