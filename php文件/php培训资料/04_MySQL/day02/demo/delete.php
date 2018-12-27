<?php
header("Content-Type:text/html;charset=utf-8");
//1、连接数据库
mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms");

//接收要删除的新闻id
$id = isset($_GET['id'])?$_GET['id']:"";
if($id!=""){
	//3、操作
	$query = "delete from cms_news where id=".$id;    
	$result = mysql_query($query);
	//真正受到影响的行数
	$rows = mysql_affected_rows();    
	if($result&&$rows>0){
		echo "删除成功";
	}else{
		echo "删除失败";
	}
}else{
	echo "请给出要删除的新闻id";
}












