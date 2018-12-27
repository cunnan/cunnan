<?php 
header("Content-Type:text/html;charset=utf-8");
//退出
//删除cookie
/*
 * setcookie("username",$username,$expire);
   setcookie("id",$row['id'],$expire);
 */
$expire = time()-10;
setcookie("username","",$expire);
setcookie("id","",$expire);

echo "<a href='login.php'>登录</a>";











