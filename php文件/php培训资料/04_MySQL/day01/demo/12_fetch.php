<?php 
//从查询结果中取回索引数组
//1、连接数据库
mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms");
//3、操作
$query = "select id from cms_admin";
$result = mysql_query($query);
//循环获取结果
/*
 * 4
 * 9
 * 3
 * 2
 */
/*
 * 6、查询数据库表cms_admin中的内容，将获取的数据输出
 * 到浏览器：
 * 查询字段为：id，aname。输出格式如下：
   id：id的值    aname:aname的值
     例如：
     id:4              aname:tom
 */
while($row=mysql_fetch_assoc($result)){
	//$row = array("id"=>4);
	//$row = array("id"=>9);
	//$row = array("id"=>3);
	//$row = array("id"=>2);
	//$row = false
    var_dump($row); //array("id"=>4)
                    //array("id"=>9);
                    //array("id"=>3)
                    //array("id"=>2);
   
}












//4、释放资源
mysql_close();













