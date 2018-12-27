<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';
//目的：展现友情链接的列表，带有分页
//实例化数据库操作类
$db=Db::getInstance();
//总条数，每页的记录数
$pageSize=2;
$numArr=$db->select("friend","count(*) as num");
$num=$numArr[0]['num'];
//实例化分页类
$page=new Page($num,$pageSize);
//获取开始位置
$start=$page->getStart();
//获取当前页的数据，显示
$arr=$db->select("friend","*","","$start,$pageSize");

//显示分页结果
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
  <div>当前操作：管理友情链接</div>
  
  <table>
  	<tr>
  		<th>id</th>
  		<th>name</th>
  		<th>url</th>
  		<th>addtime</th>
  		<th>操作</th>
  	</tr>
  	<?php foreach($arr as $v){?>
  	<tr>
  		<td><?php echo $v['id']?></td>
  		<td><?php echo $v['fname']?></td>
  		<td><?php echo $v['url']?></td>
  		<td><?php echo date("Y-m-d H:i:s",$v['addtime'])?></td>
  		<td><a href="">修改</a>&nbsp;|&nbsp;<a href="">删除</a></td>
  	</tr>
  	<?php }?>
  </table>
  <div>
  	<?php echo $page->pages()?>
  </div>
  </body>
</html>










