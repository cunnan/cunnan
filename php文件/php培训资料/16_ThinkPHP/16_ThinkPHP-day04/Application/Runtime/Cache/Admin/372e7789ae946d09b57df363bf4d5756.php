<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
   <div>当前操作：管理产品&nbsp;<a href="/psd1611/16_ThinkPHP/Admin/Product/add">添加</a></div>
  <table>
  	<tr>
  		<th>id</th>
  		<th>title</th>
  		<th>price</th>
  		<th>image</th>
  		<th>操作</th>
  	</tr>
  	<?php if(is_array($arr)): foreach($arr as $key=>$v): ?><tr>
  		<td><?php echo ($v["id"]); ?></td>
  		<td><?php echo ($v["title"]); ?></td>
  		<td><?php echo ($v["price"]); ?></td>
  		<td><img width="100" src="/psd1611/16_ThinkPHP/Public/upload/<?php echo ($v["image"]); ?>"/></td>
  		<td><a href="/psd1611/16_ThinkPHP/Admin/Product/update/id/<?php echo ($v["id"]); ?>">修改</a></td>
  	</tr><?php endforeach; endif; ?>
  </table>
  </body>
</html>