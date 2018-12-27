<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
    <link rel="stylesheet" href="/psd1611/16_ThinkPHP/Day01/demo/Public/styles/global.css" />
    <style>
		#a3{
			margin:0 auto;
			width:200px;
			height:200px;
			border:2px solid #00f;
			overflow:hidden;
			background-image:url(/psd1611/16_ThinkPHP/Day01/demo/Public/images/456.jpg);
		}
	</style>
  </head>
  <body> 
  	<h1 align="center">Hello World!</h1>  	
  	<h2><a href="/psd1611/16_ThinkPHP/Day01/demo/admin">链接到Admin模块的Index控制器</a></h2> 	  	
  	<h2 align="center"><a href="/psd1611/16_ThinkPHP/Day01/demo/home/index/test">调用Index控制器的test方法</a></h2>
  	<h2 align="center"><a href="/psd1611/16_ThinkPHP/Day01/demo/home/index/lists">显示所有的用户信息(模拟)</a></h2>
  	<h2 align="center"><a href="/psd1611/16_ThinkPHP/Day01/demo/home/Users">调用Users控制器的index方法</a></h2>  	
  	<div id="a1"><img src="/psd1611/16_ThinkPHP/Day01/demo/Public/images/jd.jpg"></div>
  	<div id="a2"></div>
  	<div id="a3"></div>
   	
  </body>
</html>