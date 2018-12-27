<?php
header('Content-Type:text/html;charset=utf-8');
session_start();
//数据库的连接信息
define('DB_NAME',"projectone");
define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('DB_CHARSET','utf8');
//url地址的公共部分
define('BASE_URL','http://localhost/php1611/13_Project/13_Project-day05/');
//项目的根目录
define("ROOT","E:/www/php1611/13_Project/13_Project-day05/");
//类的自动加载
function __autoload($classname){ //Db Db.class.php
	//根据类名称加载类文件
	require ROOT."class/".$classname.".class.php";
}
require ROOT.'Common/functions.php';









