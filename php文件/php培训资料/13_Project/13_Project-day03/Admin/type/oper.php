<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';
//从表type中获取所有的记录
$db=Db::getInstance();
$arrOne=$db->select("type","*","fid=0 and state<9");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
  <div>当前操作：管理分类</div>
  <hr/>
  
  <table width="100%">
  	<tr>
  		<th>id</th>
  		<th>tname</th>
  		<th>操作</th>
  	</tr>
  	<?php foreach($arrOne as $v1){?>
  	<tr>
  		<td><?php echo $v1['id']?></td>
  		<td><?php echo $v1['tname']?></td>
  		<td><a href="update.php?id=<?php echo $v1['id']?>">修改</a>&nbsp;|&nbsp;<a href="del.php?id=<?php echo $v1['id']?>">删除</a></td>
  	</tr>
  	<?php 
	//马上呈现当前的子
	$arrTwo=$db->select("type","*","fid={$v1['id']} and state<9");
	foreach($arrTwo as $v2){
	?>
	<tr>
  		<td><?php echo $v2['id']?></td>
  		<td>--<?php echo $v2['tname']?></td>
  		<td><a href="update.php?id=<?php echo $v2['id']?>">修改</a>&nbsp;|&nbsp;<a href="del.php?id=<?php echo $v2['id']?>">删除</a></td>
  	</tr>
	<?php
	}
	}?>
  </table>
  
  
  
  
  
  
  
  
  
  
  </body>
</html>