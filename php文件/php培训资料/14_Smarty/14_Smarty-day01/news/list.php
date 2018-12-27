<?php
require '../config.ini.php';
$fid=2;
$where="typeid in(select id from type where fid=:fid) and state<9";
//获取记录的总条数  pdo
$sql="select count(*) as num from news where $where";
$pdoS=$pdo->prepare($sql);
$pdoS->execute(array(':fid'=>$fid));
$arr=$pdoS->fetch(PDO::FETCH_ASSOC);
$num=$arr['num'];//总条数
$pageSize=5;
$page=new Page($num,$pageSize);
$start=$page->getStart();
$sql="select * from news where $where limit $start,$pageSize";
$pdoS=$pdo->prepare($sql);
$pdoS->execute(array(':fid'=>$fid));
$arr=$pdoS->fetchAll(PDO::FETCH_ASSOC);
$smarty->assign('pageStr',$page->pages());
$smarty->assign('arr',$arr);
$smarty->display("news/list.html");








