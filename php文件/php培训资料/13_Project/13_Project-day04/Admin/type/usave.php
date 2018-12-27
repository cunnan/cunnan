<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';
$db=Db::getInstance();
$id=$_GET['id'];
$re=$db->update('type',$_POST,"id=$id");
if($re){
	jump("修改成功","oper.php");
}else{
	jump('修改失败',"oper.php");
}