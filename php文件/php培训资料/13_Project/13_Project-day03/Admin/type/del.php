<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';
$db=Db::getInstance();
//逻辑删除 update  state---->9
$id=$_GET['id'];
$re=$db->update("type",array('state'=>9),"id=$id");
if($re){
	jump("删除成功","oper.php");
}else{
	jump("删除失败","oper.php");
}