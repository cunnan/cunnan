<?php

require '../config.ini.php';
//var_dump($_POST);
$content=$_POST['content'];
$newsid=$_POST['newsid'];
//$content=$_GET['content'];
//$newsid=$_GET['newsid'];
$userid=$_COOKIE['userid'];
$db=Db::getInstance();
$re=$db->insert("comment",array('userid'=>$userid,'newsid'=>$newsid,'content'=>$content,'addtime'=>time()));
if($re){
	$arrNum=$db->select('comment',"count(*) as num","newsid=$newsid");
	$num=$arrNum[0]['num'];//评论数
	$arrUserNum=$db->select('comment',"userid","newsid=$newsid","","","","userid");
	$userNum=count($arrUserNum); //参与的人数 select count(*) as num from comment where newsid=$newsid group by userid
	$reArr=array('info'=>'1','commentNum'=>$num,'userNum'=>$userNum);
}else{
	$reArr=array('info'=>'0');
}
echo json_encode($reArr);







