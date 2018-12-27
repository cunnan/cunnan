<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';
$id=$_GET['id'];
$db=Db::getInstance();
$infoArr=$db->select("advinfo","imagename","id=$id");
$re=$db->delete("advinfo","id=$id");
if($re){
	//删除图片
	@unlink(ROOT."upload/".$infoArr[0]['imagename']);
	jump("删除成功",$_SERVER['HTTP_REFERER']);
}else{
	jump("删除失败",$_SERVER['HTTP_REFERER']);
}