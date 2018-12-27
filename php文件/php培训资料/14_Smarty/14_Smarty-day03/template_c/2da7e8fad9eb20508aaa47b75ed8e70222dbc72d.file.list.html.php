<?php /* Smarty version Smarty-3.1.16, created on 2017-02-16 15:41:09
         compiled from "D:\www\psd1611\14_Smarty\template\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2884758a547f5c79846-43091087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2da7e8fad9eb20508aaa47b75ed8e70222dbc72d' => 
    array (
      0 => 'D:\\www\\psd1611\\14_Smarty\\template\\list.html',
      1 => 1487230868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2884758a547f5c79846-43091087',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58a547f5cc0501_70206052',
  'variables' => 
  array (
    'arr' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a547f5cc0501_70206052')) {function content_58a547f5cc0501_70206052($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body style="height:2000px;">
  <h1>文章列表页：</h1>
  <hr/>
  <ul>
  	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
?>
  	<?php if ($_smarty_tpl->tpl_vars['v']->iteration%2==0) {?>
  	<li style="background:#abcdef;"><?php echo $_smarty_tpl->tpl_vars['v']->total;?>
--<a href='detail.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
  	<?php } else { ?>
  	<li style="background:#fedcba;"><?php echo $_smarty_tpl->tpl_vars['v']->total;?>
--<a href='detail.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
  	<?php }?>
  	<?php } ?>
  </ul>
  <h1>加边线</h1>
  
  <ul style="padding:0;border:1px solid #333;list-style:none;">
  	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
?>
  	<?php if ($_smarty_tpl->tpl_vars['v']->last) {?>
  	<li><?php echo $_smarty_tpl->tpl_vars['v']->total;?>
--<a href='detail.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
  	<?php } else { ?>
  	<li style="border-bottom:1px solid #abcedf;"><?php echo $_smarty_tpl->tpl_vars['v']->total;?>
--<a href='detail.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
  	<?php }?>
  	<?php } ?>
  </ul>
  
  </body>
</html><?php }} ?>
