<?php
header('Content-Type:text/html;charset=utf-8');
/* 判断密码合法性
 * $pwd1 ='123456';
 * $pwd2 ='123456';
 * 要求:
 *  1.第一个密码长度不能为空(必填)
 *  2.第一个密码长度必须在5-12之间
 *  3.两次密码必须一致
 *  strlen ：获得字符串的长度
 */
$pwd1 ='123456';
$pwd2 ='123456';
//1.第一个密码长度不能为空(必填) 
if(strlen($pwd1)){
	//...
}else{
	echo '第一个密码长度不能为空';
}
if(!strlen($pwd1)){
	echo '第一个密码长度不能为空';
}else{
	//...
}
echo '<hr/>';
/*  1.第一个密码长度不能为空(必填)
 *  2.第一个密码长度必须在5-12之间
 */
if(!strlen($pwd1)){
	echo '第一个密码长度不能为空';
}else{
	if(strlen($pwd1)>=5 && strlen($pwd1)<=12){
		 //...
	}else{
		echo '第一个密码长度必须在5-12之间'; 
	}
}
if(!strlen($pwd1)){
	echo '第一个密码长度不能为空';
}else{
	if(strlen($pwd1)<5 || strlen($pwd1)>12){
		echo '第一个密码长度必须在5-12之间';
	}else{
		//...
	}
}
echo '<hr/>';
echo '<hr/>';
/* 要求:
*  1.第一个密码长度不能为空(必填)
*  2.第一个密码长度必须在5-12之间
*  3.两次密码必须一致
*  strlen ：获得字符串的长度
*/
// 方法一 等同于 if多分支语句  if嵌套格式
if(!strlen($pwd1)){
	echo '第一个密码长度不能为空';
}else{
	if(strlen($pwd1)<5 || strlen($pwd1)>12){
		echo '第一个密码长度必须在5-12之间';
	}else{
		if($pwd1!=$pwd2){
			echo '两次密码必须一致';
		}
	}
}
echo '<br/>';
$pwd1 ='123456';
$pwd2 ='123456';
// 方法二 if多分支语句 
if(!strlen($pwd1)){
	die('密码不能为空');
}elseif(strlen($pwd1)<5 ||strlen($pwd1)>12){
	die('密码必须在5-12之间');
}elseif($pwd1!=$pwd2){
	die('两次密码必须一致');
}
echo '将合法的元素存入数据库';








