<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
  <div>
<h1>PSD1611后台管理系统</h1>
<div><?php echo substr('abcdef',0,3);?></div>
</div>
  <h1>添加文章</h1>
  <div style="text-align:right;"><a href="/psd1611/16_ThinkPHP/Admin/News/oper">列表</a></div>
  <form action="/psd1611/16_ThinkPHP/Admin/News/save" method="post">
  <table>
  	<tr>
  		<td>标题：</td>
  		<td><input type="text" name="title"/></td>
  	</tr>
  	<tr>
  		<td>分类：</td>
  		<td>
  		<select name="typeid">
  			<?php echo ($str); ?>
  		</select>
  		</td>
  	</tr>
  	<tr>
  		<td>内容：</td>
  		<td>
  		<textarea name="content"></textarea>
  		</td>
  	</tr>
  	<tr>
  		<td colspan="2"><input type="submit" value="添加"/></td>
  	</tr>
  </table>
  </form>
  </body>
</html>