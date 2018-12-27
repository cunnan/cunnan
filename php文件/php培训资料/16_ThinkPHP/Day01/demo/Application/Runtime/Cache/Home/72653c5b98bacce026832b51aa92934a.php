<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
  	<h1 align="center">你好！<?php echo ($username); ?></h1>
	<table width="500" align="center" cellpadding="10" cellspacing="0" border="1">
		<tr>
			<td>序号</td>
			<td>姓名</td>
			<td>性别</td>
			<td>注册时间</td>
			<td>操作</td>
		</tr>
		<?php if(is_array($rowset)): foreach($rowset as $key=>$row): ?><tr>
			<td><?php echo ($row["id"]); ?></td>
			<td><?php echo ($row["username"]); ?></td>
			<td><?php echo ($row['sex'] ? "男" : "女"); ?></td>
			<td><?php echo (date("Y-m-d H:i:s",$row['regTime'])); ?></td>
			<td><a href="/psd1611/16_ThinkPHP/Day01/demo/home/index/edit/id/<?php echo ($row["id"]); ?>/pid/5">编辑</a></td>
		</tr><?php endforeach; endif; ?>
	</table>   
  </body>
</html>