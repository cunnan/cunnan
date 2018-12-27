<?php
header("Content-Type:text/html;charset=utf-8");
//1、连接数据库
mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms");
//接收form表单中提交的数据
//当用户浏览页面，没有点击提交按钮时：$_POST数组是空数组
//$_POST下的键名称form表单中的input的name值
//$username 是用户输入的用户名
//判断$_POST是否为空
//if(!empty($_POST)){
if($_POST){
	//若用户提交了数据
	$username = $_POST['uname'];
	if($username==""){
		echo "用户名不能为空";
		exit;
	}
	
	//收录密码
	$password = $_POST['pwd'];
	if($password==""){
		echo "密码不能为空";
		exit;
	}
	//将用户名密码保存到数据库中(增)
	//3、操作
	$query = "insert cms_admin(aname,pwd)
			  value
			  ('".$username."','".md5($password)."')";
	
	$result = mysql_query($query);
	if($result){
		echo "注册成功";
		echo "新用户ID：".mysql_insert_id();
	}else{
		echo "注册失败";
	}
	
}
//4、释放资源
mysql_close();
?>
<center>用户注册</center><br/>
<form action=""  method="post" >
用户名：<input type="text" name="uname" /><br/><br/>
密&nbsp;&nbsp;码：<input type="password" name="pwd" /><br/><br/>
<input type="submit" value="注册" />
</form>






