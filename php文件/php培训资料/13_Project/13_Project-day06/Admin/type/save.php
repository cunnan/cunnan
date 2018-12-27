<?php
//使用Db.class.php,把接收到的表单数据写入到表type中
require "../../config.ini.php";
$db=Db::getInstance();
//把表单提交的数据，写入到type
$re=$db->insert("type",$_POST);
//提示，跳转
if($re){
	jump("添加成功","oper.php");
}else{
	jump("添加失败","add.php");
}








