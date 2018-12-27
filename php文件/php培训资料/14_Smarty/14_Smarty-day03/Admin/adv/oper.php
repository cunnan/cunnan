<?php  //it民工
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';//root base_url
// 实例化数据库操作类
$db=Db::getInstance();
// 获取总记录数
$countArr=$db->select("advinfo","count(*) as num");
$num=$countArr[0]['num'];
// 规定每页的条数
$pageSize=2;
// 实例化分页类 Page
$page=new Page($num,$pageSize);
// 获取开始位置
$start=$page->getStart();
// 获取当前页的数据
$arr=$db->select("advinfo as a","a.*,t.tname","","$start,$pageSize","join type as t on a.typeid=t.id");
// 显示列表
// 显示分页效果
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
  <div>当前操作：管理广告</div>
  <table width="100%">
  	<tr>
  		<th>id</th>
  		<th>title</th>
  		<th>图片</th>
  		<th>分类</th>
  		<th>url</th>
  		<th>管理</th>
  	</tr>
  	<?php foreach($arr as $v){?>
  	<tr>
  		<td><?php echo $v['id']?></td>
  		<td><?php echo $v['title']?></td>
  		<td><img width="80" src="<?php echo BASE_URL?>upload/<?php echo $v['imagename']?>"/></td>
  		<td><?php echo $v['tname']?></td>
  		<td><?php echo $v['url']?></td>
  		<td><a href="update.php?id=<?php echo $v['id']?>">修改</a>&nbsp;|&nbsp;<a href="del.php?id=<?php echo $v['id']?>">删除</a></td>
  	</tr>
  	<?php }?>
  </table>
  <div><?php $page->pages();?></div>
  
  
  
  
  
  
  
  
  
  
  
  
  </body>
</html>