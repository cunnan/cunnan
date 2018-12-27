<?php /* Smarty version Smarty-3.1.16, created on 2017-02-22 11:56:17
         compiled from "templates\register.html" */ ?>
<?php /*%%SmartyHeaderCode:658558acf26fd628d0-93796301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27ab42430aa071a05311ef1721b4a6e75eaafb5d' => 
    array (
      0 => 'templates\\register.html',
      1 => 1487735772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '658558acf26fd628d0-93796301',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58acf26fd89ab2_84788651',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58acf26fd89ab2_84788651')) {function content_58acf26fd89ab2_84788651($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
    <link rel="stylesheet" href="styles/global.css" />
  </head>
  <body>
  <div id="container">  
  <h1 class="subject">用户注册</h1>
  <p style="text-align:center;"><img src="images/logo.v2.png"></p>
   <form action="index.php?b=users&c=doAddUser" method="post">
   	<table>
   		<tr>
   			<td>用户名</td>
   			<td><input type="text" name="username" id="" /></td>
   		</tr>
   		<tr>
   			<td>密码</td>
   			<td><input type="password" name="password" id="" /></td>
   		</tr>
   		<tr>
   			<td>确认密码</td>
   			<td><input type="password" name="password2" id="" /></td>
   		</tr>
   		<tr>
   			<td>验证码</td>
   			<td><input type="text" name="verify"/><img src="index.php?b=image&c=verify"></td>
   		</tr>
   		<tr>
   			<td>&nbsp;</td>
   			<td><input type="submit" value="免费注册" /></td>
   		</tr>
   	</table>
   </form>
   </div>
  </body>
</html><?php }} ?>
