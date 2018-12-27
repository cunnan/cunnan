<?php
require '../config.ini.php';
require ROOT.'Admin/public/isLogin.php';//判断是否登录
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<title>达内教育集团CMS系统</title>
</head>
<frameset rows="80,*" framespacing="0" border="0">
	<frame src="public/top.php" frameborder="0" scrolling="no" noresize="noresize"/>
	<frameset cols="200,*">
		<frame src="public/menu.php" frameborder="0" scrolling="no" noresize="noresize" />
		<frame src="public/welcome.php" frameborder="0" scrolling="no" noresize="noresize" name="mainFrame" />
	</frameset>
</frameset>
</html>