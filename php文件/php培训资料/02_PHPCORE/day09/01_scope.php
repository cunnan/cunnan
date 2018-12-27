<?php
header('Content-Type:text/html;charset=utf-8');
// 所有的预定义变量都是超全局变量
echo $_SERVER['PHP_SELF'];
echo '<br/>';
echo $_SERVER['REQUEST_URI'];
echo '<br/>';
function isTest(){
	echo $_SERVER['REQUEST_URI'];
}
isTest();








