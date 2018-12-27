<?php
header("Content-Type:text/html;charset=utf-8");
//1、连接数据库
mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms");

//对于用户是否登录进行判断
if(isset($_COOKIE['username'])&&$_COOKIE['username']!=""){
	//说明用户已经登录,跳转到首页
	header("location:index.php");
	
}


if($_POST){
	$username = $_POST['username'];
	if($username==""){
		echo "用户名不能为空";
		exit;
	}
	
	$password = $_POST['password'];
	if($password==""){
		echo "密码不能为空";
		exit;
	}
	
	//将数据去数据库比对
	//操作
	$query = "select id from cms_user
			  where username='".$username."' 
			  		and password='".md5($password)."'";
	//echo $query;exit;
	$result = mysql_query($query);
	if($row=mysql_fetch_assoc($result)){
		//若登录成功，跳转到index.php页面
		//记录下当前用户的 cookie
		//生成cookie
		$expire = time()+3600;
		setcookie("username",$username,$expire);
		setcookie("id",$row['id'],$expire);
		//跳转
		header("location:index.php");
		//echo "登录成功,用户id为".$row["id"];
	}else{
		echo "登录失败";
	}	
}

//关闭数据库
mysql_close();
?>
<center>用户登录</center>
<br/><br/>
<form action="" method="post">
用户名：<input type="text" name="username" /><br/><br/>
密&nbsp;&nbsp;码：<input type="password" name="password" /><br/><br/>
<input type="submit" value="登录" />

</form>