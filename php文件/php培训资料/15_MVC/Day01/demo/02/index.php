<?php
header('Content-Type:text/html;charset=utf-8');
echo '<a href="index.php?a=1">用户注册</a><br><br>';
echo '<a href="index.php?a=3">用户列表</a><br><br>';
$a = $_GET['a'];
if ($a=='1') {
	require_once 'templates/register.html';
} else if($a=='2'){
	echo '您提交了表单,提交数据如下:<br><br>';
	echo '用户名:' , $_POST['username'];	
	//进行数据库操作
} else if($a == '3'){
	//操作数据库操作
	require_once 'templates/list.html';
}






