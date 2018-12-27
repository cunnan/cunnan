<?php /* Smarty version Smarty-3.1.16, created on 2017-02-16 17:00:59
         compiled from "D:\www\psd1611\14_Smarty\template\news\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2511058a56a4bde04e4-52609845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '268b4812af11ae7fb3497fde427ec54a5b0d4034' => 
    array (
      0 => 'D:\\www\\psd1611\\14_Smarty\\template\\news\\list.html',
      1 => 1487235568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2511058a56a4bde04e4-52609845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr' => 0,
    'v' => 0,
    'pageStr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58a56a4be12c72_06313553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a56a4be12c72_06313553')) {function content_58a56a4be12c72_06313553($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
  <div>当前位置：首页 > 文章列表</div>
  <ul>
  	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
  	<li><a href='detail.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
  	<?php } ?>
  </ul>
  <div><?php echo $_smarty_tpl->tpl_vars['pageStr']->value;?>
</div>
  </body>
</html><?php }} ?>
