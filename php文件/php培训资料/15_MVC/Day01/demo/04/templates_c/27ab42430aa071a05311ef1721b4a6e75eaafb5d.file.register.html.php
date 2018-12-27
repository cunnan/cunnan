<?php /* Smarty version Smarty-3.1.16, created on 2017-02-21 17:23:59
         compiled from "templates\register.html" */ ?>
<?php /*%%SmartyHeaderCode:1963458ac072f0bfb28-08263600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27ab42430aa071a05311ef1721b4a6e75eaafb5d' => 
    array (
      0 => 'templates\\register.html',
      1 => 1487661251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1963458ac072f0bfb28-08263600',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58ac072f0e5890_40904918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ac072f0e5890_40904918')) {function content_58ac072f0e5890_40904918($_smarty_tpl) {?><!DOCTYPE html>
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
   			<td>&nbsp;</td>
   			<td><input type="submit" value="免费注册" /></td>
   		</tr>
   	</table>
   </form>
   </div>
  </body>
</html><?php }} ?>
