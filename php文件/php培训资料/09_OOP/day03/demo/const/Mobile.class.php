<?php 
/*
 * 1、定义Mobile类，在Mobile类中声明常量MODEL赋初值="a1",
* 在类外访问常量。
*/
class Mobile{
	const MODEL="a1";
}
echo Mobile::MODEL;