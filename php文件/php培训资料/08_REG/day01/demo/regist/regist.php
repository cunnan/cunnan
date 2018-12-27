<?php 
header("Content-Type:text/html;charset=utf-8");
include "functions.php";
//引入数据库配置文件
include "db.inc.php";

if($_POST){
	//收录用户名
	$username = $_POST["username"];
	if($username==""){
		echo "用户名不能为空";
		exit;
	}
	
	$password = $_POST['password'];
	if($password==""){
		echo "密码不能为空";
		exit;
	}
	//收录邮箱地址
	$email = $_POST['email'];
	if($email==""){
		echo "邮箱不能为空";
		exit;
	}
	//若邮箱地址不为空，进行合法性验证
	if(!isEmail($email)){//false
		echo "邮箱地址不合法";
		exit;
	}
	
	//收录用户提交的出生日期
	$birthday = $_POST["birthday"];
	if($birthday==""){
		echo "出生日期不能为空";
		exit;
	}
	
	//要对出生日期的合法性进行验证
	if(!isDate($birthday)){ //false
		echo "出生日期格式不合法";
		exit;
	} 
	
	//将用户输入的数据保存到cms_user表中。
	//保存前给cms_user表添加字段birthday
	$query = "insert cms_user
			  (username,password,email,birthday) 
			  value
			  ('".$username."','".md5($password)."','".$email."','".$birthday."')";
	
	$result = mysql_query($query);
	if($result){
		echo "注册成功";
	}else{
		echo "注册失败";
	}
	
	
}
?>
<center>用户注册</center><br/><br/>
<form action="" method="post">
用户名：<input type="text" name="username" /><br/><br/>
密码：<input type="password" name="password" /><br/><br/>
邮箱：<input type="text" name="email" /><br/><br/>
出生日期：<input type="text" name="birthday" /><br/><br/>
<input type="submit" value="注册" />
</form>


