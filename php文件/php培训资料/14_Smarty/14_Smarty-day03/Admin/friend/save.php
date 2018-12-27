<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';
$db=Db::getInstance();
//保存表单add.php中提交的数据进数据库表friend
$_POST['addtime']=time();
$re=$db->insert("friend",$_POST);
if($re){
	jump("添加成功","oper.php");
}else{
	jump("添加失败","oper.php");
}