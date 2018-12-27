<?php
/*自定义函数*/
function jiami($password){
	$username=$_POST['username'];
	return md5(md5($password).$username);
}