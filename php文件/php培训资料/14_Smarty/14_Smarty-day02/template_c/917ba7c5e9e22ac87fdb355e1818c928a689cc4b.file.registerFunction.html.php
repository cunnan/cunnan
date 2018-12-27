<?php /* Smarty version Smarty-3.1.16, created on 2017-02-17 15:41:29
         compiled from "D:\www\psd1611\14_Smarty\template\news\registerFunction.html" */ ?>
<?php /*%%SmartyHeaderCode:880558a6958e0fd958-32709238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '917ba7c5e9e22ac87fdb355e1818c928a689cc4b' => 
    array (
      0 => 'D:\\www\\psd1611\\14_Smarty\\template\\news\\registerFunction.html',
      1 => 1487317288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '880558a6958e0fd958-32709238',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58a6958e129977_14496423',
  'variables' => 
  array (
    'guojiArr' => 0,
    'v' => 0,
    'guoneiArr' => 0,
    'shehuiArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a6958e129977_14496423')) {function content_58a6958e129977_14496423($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
  <h3>国际</h3>
   <?php echo getNewsByFid(array('fid'=>1,'num'=>5,'length'=>7,'arrname'=>"guojiArr"),$_smarty_tpl);?>

   <table>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['guojiArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
   	<tr>
   		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
   	</tr>
   	<?php } ?>
   </table>
   <h3>国内</h3>
   <?php echo getNewsByFid(array('fid'=>2,'num'=>5,'length'=>7,'arrname'=>'guoneiArr'),$_smarty_tpl);?>

   <table>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['guoneiArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
   	<tr>
   		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
   	</tr>
   	<?php } ?>
   </table>
   <h3>社会</h3>
   <?php echo getNewsByFid(array('fid'=>3,'num'=>5,'length'=>7,'arrname'=>'shehuiArr'),$_smarty_tpl);?>

   <table>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shehuiArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
   	<tr>
   		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
   	</tr>
   	<?php } ?>
   </table>
  </body>
</html><?php }} ?>
