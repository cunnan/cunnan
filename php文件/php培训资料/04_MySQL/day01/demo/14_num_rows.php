<?php 
header("Content-Type:text/html;charset=utf-8");
//获取查询到结果集的行数
//1、连接数据库
mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms");
//3、操作
$query = "select id,aname from cms_admin";
$result = mysql_query($query);
//循环获取查询的结果
while($row=mysql_fetch_assoc($result)){
	//id:4        aname:tom
	echo "id:".$row['id']."&nbsp;aname:".$row['aname'];
	echo "<br/>";	
}
//7、将获取查询到的行数输出到上一题中。

//获取结果集的行数
echo "共".mysql_num_rows($result)."行数据";

//4、释放资源
mysql_close();


















