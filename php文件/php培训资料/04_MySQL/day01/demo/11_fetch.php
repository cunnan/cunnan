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
/*while($row=mysql_fetch_assoc($result)){
	echo '<pre>';
	print_r($row);
	echo '</pre>';
}*/
/*
 * 4
 * 9
 * 3
 * 2
*/
$row=mysql_fetch_assoc($result);
//$row=array("id"=>4);

while($row){
    var_dump($row); //array("id"=>4)
                    //array("id"=>9)
                    //array("id"=>3)
                    //array("id"=>2)
    $row=mysql_fetch_assoc($result);
    //$row=array("id"=>9)
    //$row=array("id"=>3);
    //$row=array("id"=>2);
    //$row=false
}












//4、释放资源
mysql_close();













