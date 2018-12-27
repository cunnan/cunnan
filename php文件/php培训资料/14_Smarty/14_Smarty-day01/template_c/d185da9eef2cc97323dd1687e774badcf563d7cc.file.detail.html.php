<?php /* Smarty version Smarty-3.1.16, created on 2017-02-16 16:17:00
         compiled from "D:\www\psd1611\14_Smarty\template\news\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:286558a55ffcada7a6-40213157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd185da9eef2cc97323dd1687e774badcf563d7cc' => 
    array (
      0 => 'D:\\www\\psd1611\\14_Smarty\\template\\news\\detail.html',
      1 => 1487232990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286558a55ffcada7a6-40213157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58a55ffcb0a058_98750217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a55ffcb0a058_98750217')) {function content_58a55ffcb0a058_98750217($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
  <h1><?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>
</h1>
  <hr/>
  <p><?php echo $_smarty_tpl->tpl_vars['arr']->value['content'];?>
</p>
  </body>
</html><?php }} ?>
