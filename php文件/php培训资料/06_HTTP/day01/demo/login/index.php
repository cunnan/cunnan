<?php 
header("Content-Type:text/html;charset=utf-8");
//对用户是否登录进行判断
if(isset($_COOKIE['username'])&&$_COOKIE['username']!=""){
	echo "欢迎".$_COOKIE['username'];
	echo "<a href='logout.php'>退出</a>";	
}else{
	echo "<a href='login.php'>登录</a>";
}