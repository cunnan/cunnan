<?php
require '../config.ini.php';
//有一个函数，根据一级分类获取分类对应的文章记录。
/*
 * int $num 获取文章的条数
 * int $fid 指定一级分类的id
 * int $length 标题的长度
 */
function getNewsByFid($params,$s){
	global $pdo;
	$fid=$params['fid'];
	$num=$params['num'];
	$length=$params['length'];
	$arrName=$params['arrname'];
	//使用这三个值，去数据库中查询，返回结果
	$sql="select * from news where typeid in(select id from type where fid=$fid) and state<9 limit $num";
	$pdoS=$pdo->query($sql);
	$arr=$pdoS->fetchAll(PDO::FETCH_ASSOC);
	//把数组直接传给模板
	$s->assign($arrName,$arr);
}
$smarty->registerPlugin("function", "t_getNewsByFid","getNewsByFid");
$smarty->display("news/registerFunction.html");