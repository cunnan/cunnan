<?php
header('Content-Type:text/html;charset=utf-8');
// 1.Mysql
$link = mysql_connect('localhost','root','root');
//var_dump($link);
// 2打开 cms数据库 
mysql_select_db('cms');
// 3. 写 SQL 语句 (查询语句)
//  update cms_news set title='helloworld' where id=1;
$sql ="select id,title,addtime from cms_news";
// 4. 执行 SQL语句
$rs = mysql_query($sql);
//var_dump($rs);
/* $arr = mysql_fetch_assoc($rs);
$arr = mysql_fetch_assoc($rs);
$arr = mysql_fetch_assoc($rs);
echo '<pre>';
print_r($arr);
echo '</pre>'; */
// 5.通过循环 获得 结果集的每行数组(二维数组)
while($row = mysql_fetch_array($rs,MYSQL_ASSOC)){
	$newarr[] = $row;
	// $newarr[0] = array('id'=>1,'title'=>'hello');
	// $newarr[1] = array('id'=>2,'title'=>'ok');
}
echo '<pre>';
print_r($newarr);
echo '</pre>';
// 6. 释放结果集
if($rs){
	mysql_free_result($rs);
}
// 7. 关闭数据库
mysql_close();



















