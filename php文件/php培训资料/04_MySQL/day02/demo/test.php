<?php 
//循环向数据库表cms_news中插入50条数据
//1、连接数据库
mysql_connect("localhost","root","root");

//2、选择默认数据库
mysql_select_db("cms");

//3、操作 
for($i=1;$i<=50;$i++){
	$title = "新闻标题".$i;//1~50 //新闻标题1~新闻标题50
	$query = "insert cms_news 
			  (title,content,aid,tid,addtime)
			  value
			  ('".$title."','新闻内容',1,1,".time().")";
	mysql_query($query);
}

//4、关闭数据库 
mysql_close();









