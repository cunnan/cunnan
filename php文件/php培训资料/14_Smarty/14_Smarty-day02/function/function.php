<?php
//声明函数，注册给模板
function getNewsByFid($params,$s){
	global $pdo;
	$fid=$params['fid'];
	$num=$params['num'];
	$length=$params['length'];
	$arrName=$params['arrname'];
	$sql="select * from news where typeid in(select id from type where fid=$fid) and state<9 limit $num";
	$pdoS=$pdo->query($sql);
	$arr=$pdoS->fetchAll(PDO::FETCH_ASSOC);
	//截取
	foreach($arr as $k=>$v){
		$arr[$k]['title']=mb_strlen($v['title'])>$length ? mb_substr($v['title'],0,$length,'UTF-8')."..." : mb_substr($v['title'],0,$length,'UTF-8');
	}
	$s->assign($arrName,$arr);
}
$smarty->registerPlugin('function','t_getNewsByFid', 'getNewsByFid');