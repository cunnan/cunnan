<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';
$db=Db::getInstance();
$re=$db->update("news",array('state'=>9),"id=".$_GET['id']);
//获取此页面的来源地址
$url=$_SERVER['HTTP_REFERER'];
if($re){
	jump("删除成功",$url);
}else{
	jump("删除失败",$url);
}