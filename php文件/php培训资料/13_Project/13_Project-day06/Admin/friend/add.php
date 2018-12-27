<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
  <div>当前操作：添加友情链接</div>
  <form action="save.php" method="post">
  <table>
  	<tr>
  		<td>名称：</td>
  		<td><input type="text" name="fname"/></td>
  	</tr>
  	<tr>
  		<td>url:</td>
  		<td><input type="text" name="url"/></td>
  	</tr>
  	<tr>
  		<td><input type="submit" value="提交"/></td>
  	</tr>
  </table>
  </form>
  </body>
</html>





