<?php 
//删除cookie
//2、删除上一题设置的cookie。
$expire = time()-100;
setcookie("uname","",$expire);