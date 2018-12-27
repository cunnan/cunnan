<?php
header('Content-Type:text/html;charset=utf-8');
$user  = $_POST['user'];
$pwd1  = $_POST['pwd1'];
$pwd2  =$_POST['pwd2'];
$email =$_POST['email'];
//echo $user,$pwd1,$pwd2,$email;
// 判断用户名
if(!strlen($user)){
	die('用户名不能为空');
}elseif(strlen($user)<3 || strlen($user)>10){
	die('用户名必须在3-10之间');
}
// 判断密码
if(!strlen($pwd1)){
	die('密码不能为空');
}elseif(strlen($pwd1)<5 || strlen($pwd1)>12){
	die('密码必须在5-12之间');
}elseif($pwd1!=$pwd2){
	die('两次密码必须一致');
}
//邮箱
if(!strlen($email)){
	die('邮箱不能为空');
}elseif(strpos($email,'@')===false){
	die('邮箱必须存在@');
}
echo '合法的表单元素存入数据库中';







