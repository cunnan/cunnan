<?php
//加载配置文件
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';
//根据文章id，修改文章state字段的值
//接收文章id
$id=$_GET['id'];
//接收state的值
$state=$_GET['state'];
//实例化数据库操作类
$db=Db::getInstance();
//执行update   //mvc
$re=$db->update("news",array('state'=>$state),"id=$id");
//提示跳转
$message=$state == 0 ? '取消' : '推荐';
if($re){
	jump("{$message}成功",$_SERVER['HTTP_REFERER']);
}else{
	jump("{$message}失败",$_SERVER['HTTP_REFERER']);
}


















