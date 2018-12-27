<?php /* Smarty version Smarty-3.1.16, created on 2017-02-16 14:26:55
         compiled from "D:\www\psd1611\14_Smarty\template\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:2471758a5438c275a31-78220185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82bfb5fbd6e3f6aaa17c413bd9a5e8586a2d9d86' => 
    array (
      0 => 'D:\\www\\psd1611\\14_Smarty\\template\\detail.html',
      1 => 1487226413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2471758a5438c275a31-78220185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58a5438c29f945_28279001',
  'variables' => 
  array (
    't' => 0,
    'c' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a5438c29f945_28279001')) {function content_58a5438c29f945_28279001($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  <style type="text/css">
	h1{background:#abcdef;}
  </style>
  </head>
  <body>
  <h1>标题：<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</h1>
  
  <p>内容：<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
</p>
  <hr/>
  <h1>标题：<?php echo $_smarty_tpl->tpl_vars['a']->value['title'];?>
</h1>
  
  <p>内容：<?php echo $_smarty_tpl->tpl_vars['a']->value['content'];?>
</p>
  </body>
</html><?php }} ?>
