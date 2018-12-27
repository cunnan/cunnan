<?php 
/*
 * 1、在test1.php文件中保存cookie，名称为uname，值为jerry。
      在test2.php文件中读取出cookie的值。
 */
//保存cookie
$expire = time()+3600;
//setcookie("uname","jerry",$expire);
setcookie("uname","jerry");