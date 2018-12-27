<?php 
/*
 * 6、查询数据库表cms_admin中的内容，将获取的数据输出
* 到浏览器：
* 查询字段为：id，aname。输出格式如下：
id：id的值    aname:aname的值
例如：
id:4              aname:tom
*/
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

//4、释放资源
mysql_close();


















