<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
    <style type="text/css">
	.page{
		height:50px;
		line-height:50px;
	}
	.page .num,span{
		padding:3px 5px;
		border:1px solid #ccc;
		background:#f2f2f2;
		margin:0 5px;
		text-decoration:none;
	}
	.page .current{
		border:1px solid orange;
		background:#fedcba;
	}
	</style>
  </head>
  <body>
  <div>
<h1>PSD1611后台管理系统</h1>
<div><?php echo substr('abcdef',0,3);?></div>
</div>
  <h1>文章列表</h1>
  <div style="text-align:right;"><a href="/psd1611/16_ThinkPHP/Admin/News/add">添加</a></div>
  <form action="/psd1611/16_ThinkPHP/Admin/News/oper" method="get">
  	分类：
  	<select name="typeid" id="suibian">
  	<?php echo ($optStr); ?>
  	</select>
  	&nbsp;
  	<input type="submit" value="查询"/>
  </form>
  <table width="100%" border=1>
  	<tr>
  		<th>id</th>
  		<th>title</th>
  		<th>tname</th>
  		<th>addtime</th>
  		<td>操作</td>
  	</tr>
  	<?php if(is_array($arr)): foreach($arr as $k=>$v): if($k % 2 == 0): ?><tr bgcolor="#abcdef">
  	<?php else: ?>
  	<tr bgcolor="#fedcba"><?php endif; ?>
  		<td><?php echo ($v["id"]); ?></td>
  		<td><?php echo ($v["title"]); ?></td>
  		<td><?php echo ($v["tname"]); ?></td>
  		<td><?php echo (date('Y-m-d H:i:s',$v["addtime"])); ?></td>
  		<td><a href="/psd1611/16_ThinkPHP/Admin/News/update/id/<?php echo ($v["id"]); ?>">修改</a>&nbsp;|&nbsp;<a href="/psd1611/16_ThinkPHP/Admin/News/del/id/<?php echo ($v["id"]); ?>">删除</a></td>
  	</tr><?php endforeach; endif; ?>
  	
  	
  	
  	
  	
  </table>
  <div class="page"><?php echo ($pageStr); ?></div>
  </body>
</html>
<script type="text/javascript">
document.getElementById("suibian").value=<?php echo ($_GET['typeid']); ?>;
</script>