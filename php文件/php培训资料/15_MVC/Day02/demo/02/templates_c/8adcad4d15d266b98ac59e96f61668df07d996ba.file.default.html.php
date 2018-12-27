<?php /* Smarty version Smarty-3.1.16, created on 2017-02-22 16:00:30
         compiled from "templates\default.html" */ ?>
<?php /*%%SmartyHeaderCode:2120658ad451e678a59-47906218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8adcad4d15d266b98ac59e96f61668df07d996ba' => 
    array (
      0 => 'templates\\default.html',
      1 => 1487749654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2120658ad451e678a59-47906218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58ad451e6a4e69_72386521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad451e6a4e69_72386521')) {function content_58ad451e6a4e69_72386521($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/styles/global.css" />
  </head>
  <body>
  	<div id="container">
  		<h1 class="subject">第二版</h1>
	   	<p><a href="index.php/b/users/c/addUser">用户注册</a></p>
	   	<p><a href="index.php/b/users/c/listUser">用户列表</a></p>
	   	<p><a href="index.php/b/news/c/addNews">发布新闻</a></p>
	   	<p><a href="index.php/b/news/c/listNews">新闻列表</a></p>
   	</div>
  </body>
</html>




<?php }} ?>
