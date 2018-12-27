<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';
//保存表单的数据到表news
$db=Db::getInstance();
$_POST['addtime']=time();
$re=$db->insert('news',$_POST);
if($re){
	jump("添加成功",'oper.php');
}else{
	jump("添加失败","add.php");
}