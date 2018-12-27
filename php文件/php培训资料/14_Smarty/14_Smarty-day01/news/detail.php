<?php
require '../config.ini.php';
$id=$_GET['id'];
$sql="select * from news where id=$id";
$pdoS=$pdo->prepare($sql);
$re=$pdoS->execute();
$arr=$pdoS->fetch(PDO::FETCH_ASSOC);
$smarty->assign('arr',$arr);
$smarty->display("news/detail.html");