<?php /* Smarty version Smarty-3.1.16, created on 2017-02-22 17:50:49
         compiled from "templates\listUser.html" */ ?>
<?php /*%%SmartyHeaderCode:3252158ad5ef95f6e79-84505061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8f003c6da545d587cf15bad5582ebe107ed591d' => 
    array (
      0 => 'templates\\listUser.html',
      1 => 1487749752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3252158ad5ef95f6e79-84505061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'rowset' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58ad5ef9630ba2_20614780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad5ef9630ba2_20614780')) {function content_58ad5ef9630ba2_20614780($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/styles/global.css" />
  </head>
  <body>
  	<div id="container">
  	<h1 class="subject">用户列表</h1>
	<table>
		<tr>
			<td>用户ID</td>
			<td>用户名</td>
			<td>性别</td>
			<td>操作</td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rowset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['sex'];?>
</td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/index.php/b/users/c/removeUser/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">删除</a></td>
		</tr>
		<?php } ?>
	</table> 
	</div>  
  </body>
</html><?php }} ?>
