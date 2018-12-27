<?php 
/*
 * 1、定义Mobile类，在index实例化Mobile类，
 * 应用autoload引入类。
 */
function __autoload($classname){
	echo $classname;
	echo "<br/>";
	include $classname.".class.php";
}
//$p = new Person();
//Student 类找不到
//Person 类也找不到
$s = new Student();
$m = new Mobile();









