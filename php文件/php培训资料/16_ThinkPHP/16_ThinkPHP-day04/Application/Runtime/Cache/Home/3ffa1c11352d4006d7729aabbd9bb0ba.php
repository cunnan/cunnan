<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
  <h1>会员注册</h1>
  <form action="/psd1611/16_ThinkPHP/Home/Uservip/reg" method="post">
  <table width="100%" border=1>
  	<tr>
  		<td width="100">用户名：</td>
  		<td width="300"><input value="<?php echo ($arr["username"]); ?>" type="text" name="username"/></td>
  		<td><?php echo ($eArr["username"]); ?></td>
  	</tr>
  	<tr>
  		<td>密码：</td>
  		<td><input value="<?php echo ($arr["password"]); ?>" type="password" name="password"/></td>
  		<td><?php echo ($eArr["password"]); ?></td>
  	</tr>
  	<tr>
  		<td>确认密码：</td>
  		<td><input type="password"  value="<?php echo ($arr["repassword"]); ?>" name="repassword"/></td>
  		<td><?php echo ($eArr["repassword"]); ?></td>
  	</tr>
  	<tr>
  		<td>邮箱：</td>
  		<td><input  value="<?php echo ($arr["email"]); ?>" type="text" name="email"/></td>
  		<td><?php echo ($eArr["email"]); ?></td>
  	</tr>
  	<tr>
  		<td>年龄：</td>
  		<td><input type="text"  value="<?php echo ($arr["age"]); ?>" name="age"/></td>
  		<td><?php echo ($eArr["age"]); ?></td>
  	</tr>
  	<tr>
  		<td>电话：</td>
  		<td><input type="text" name="phone"  value="<?php echo ($arr["phone"]); ?>"/></td>
  		<td><?php echo ($eArr["phone"]); ?></td>
  	</tr>
  	<tr>
  		<td colspan="3"><input type="submit" value="提交"/></td>
  	</tr>
  </table>
  </form>
  </body>
</html>