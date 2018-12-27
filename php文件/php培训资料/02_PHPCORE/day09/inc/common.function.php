<?php
header('Content-Type:text/html;charset=utf-8');
/*获得文件扩展名
 * @param  string $n
* @return string
*/
function exTension($n){
	return substr($n,strrpos($n,'.')+1);
}
/* 获得唯一标识
 * @param
* @return string
*/
function uuid(){
	return md5(microtime(true).mt_rand(1000,9999));
}