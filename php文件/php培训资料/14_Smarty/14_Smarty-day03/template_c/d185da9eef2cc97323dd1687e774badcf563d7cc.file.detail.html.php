<?php /* Smarty version Smarty-3.1.16, created on 2017-02-17 16:04:31
         compiled from "D:\www\psd1611\14_Smarty\template\news\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:286558a55ffcada7a6-40213157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd185da9eef2cc97323dd1687e774badcf563d7cc' => 
    array (
      0 => 'D:\\www\\psd1611\\14_Smarty\\template\\news\\detail.html',
      1 => 1487318670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286558a55ffcada7a6-40213157',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58a55ffcb0a058_98750217',
  'variables' => 
  array (
    'guoneiArr' => 0,
    'v' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a55ffcb0a058_98750217')) {function content_58a55ffcb0a058_98750217($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
    <link href="<?php echo @constant('BASE_URL');?>
css/common.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo @constant('BASE_URL');?>
css/news.css" type="text/css" rel="stylesheet"/>
  </head>
  <body>
  <?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="content clear">
	  <div class="left">
	  	<h3>国内资讯</h3>
	  	<?php echo getNewsByFid(array('fid'=>2,'num'=>5,'length'=>7,'arrname'=>'guoneiArr'),$_smarty_tpl);?>

	  	<ul>
	  		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['guoneiArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	  		<li><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</li>
	  		<?php } ?>
	  	</ul>
	  	<h3>国际资讯</h3>
	  	<?php echo getNewsByFid(array('fid'=>1,'num'=>5,'length'=>7,'arrname'=>'guoneiArr'),$_smarty_tpl);?>

	  	<ul>
	  		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['guoneiArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	  		<li><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</li>
	  		<?php } ?>
	  	</ul>
	  </div>
	  <div class="right">
	  	<h1><?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>
</h1>
		<div>发布时间：<?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['arr']->value['addtime']);?>
</div>
		<hr/>
		<p><?php echo $_smarty_tpl->tpl_vars['arr']->value['content'];?>
</p>
	  </div>
  </div>
  
  </body>
</html><?php }} ?>
