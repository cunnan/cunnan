<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<h1 align="center">我是Test方法调用的视图文件</h1>
	<h1 align="center">用户注册</h1>
	<form action="/psd1611/16_ThinkPHP/Day01/demo/home/index/doTest" method="post">
		<table align="center" width="500" cellpadding="10" cellspacing="0" border="1">
			<tr>
				<td>用户名</td>
				<td><input type="text" name="username" /></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" name="password"/></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" value="免费注册" /></td>
			</tr>
		</table>
	</form>
</body>
</html>