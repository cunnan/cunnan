<?php
require '../config.ini.php';
$content=$_POST['content'];
$newsid=$_POST['newsid'];
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
 json_encode($reArr);








