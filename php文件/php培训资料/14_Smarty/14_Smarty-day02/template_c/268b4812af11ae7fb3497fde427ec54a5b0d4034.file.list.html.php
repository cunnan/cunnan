<?php /* Smarty version Smarty-3.1.16, created on 2017-02-17 15:56:46
         compiled from "D:\www\psd1611\14_Smarty\template\news\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2511058a56a4bde04e4-52609845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '268b4812af11ae7fb3497fde427ec54a5b0d4034' => 
    array (
      0 => 'D:\\www\\psd1611\\14_Smarty\\template\\news\\list.html',
      1 => 1487318205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2511058a56a4bde04e4-52609845',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58a56a4be12c72_06313553',
  'variables' => 
  array (
    'guoneiArr' => 0,
    'v' => 0,
    'arr' => 0,
    'pageStr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a56a4be12c72_06313553')) {function content_58a56a4be12c72_06313553($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
    <link type="text/css" rel="stylesheet" href="<?php echo @constant('BASE_URL');?>
css/common.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo @constant('BASE_URL');?>
css/news.css"/>
  </head>
  <body>
  
  <?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="content clear">
	  <div class="left">
	  	<div>
	  		<h3>国内文章</h3>
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
	  	</div>
	  	<div>
	  		<h3>国际文章</h3>
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
	  	<div>
	  		<h3>社会文章</h3>
	  		<?php echo getNewsByFid(array('fid'=>3,'num'=>5,'length'=>7,'arrname'=>'guoneiArr'),$_smarty_tpl);?>

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
	  </div>
	  <div class="right">
		  <div>当前位置：首页 > 文章列表</div>
		  <ul>
		  	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		  	<li><a href='detail.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['title'],0,7,'UTF-8');?>
<?php if (mb_strlen($_smarty_tpl->tpl_vars['v']->value['title'])>7) {?>...<?php }?></a></li>
		  	<?php } ?>
		  </ul>
		  <div><?php echo $_smarty_tpl->tpl_vars['pageStr']->value;?>
</div>
	  </div>
  </div>
  
  <?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </body>
</html><?php }} ?>
