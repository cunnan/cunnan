<?php 
header("Content-Type:text/html;charset=utf-8");
/*
 * 2、定义Mobile类，在Mobile类中声明静态化的成员方法。
showModel。在showModel输出“我的型号是a1”，在类外访问静
态化的成员方法。
*/
class Mobile{
	static function showModel(){
		echo "我的型号是a1";
	}
}
Mobile::showModel();










