<?php  //it民工
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';//root base_url
// 实例化数据库操作类
$db=Db::getInstance();
// 获取总记录数
$countArr=$db->select("news","count(*) as num","state<9");
$num=$countArr[0]['num'];
// 规定每页的条数
$pageSize=2;
// 实例化分页类 Page
$page=new Page($num,$pageSize);
// 获取开始位置
$start=$page->getStart();
// 获取当前页的数据
$arr=$db->select("news as n","n.*,t.tname","n.state<9","$start,$pageSize","join type as t on n.typeid=t.id");
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
  <div>当前操作：管理文章</div>
  <table width="100%">
  	<tr>
  		<th>id</th>
  		<th>title</th>
  		<th>分类</th>
  		<th>addtime</th>
  		<th>状态值</th>
  		<th>管理</th>
  	</tr>
  	<?php foreach($arr as $v){?>
  	<tr>
  		<td><?php echo $v['id']?></td>
  		<td><?php echo $v['title']?></td>
  		<td><?php echo $v['tname']?></td>
  		<td><?php echo date("Y-m-d H:i",$v['addtime']);?></td>
  		<td>
  		<?php if($v['state']!=3){?>
  		<a href="change.php?id=<?php echo $v['id']?>&state=3">头部推荐</a>&nbsp;|&nbsp;
  		<?php }else{?>
  		<a href="change.php?id=<?php echo $v['id']?>&state=0" style="color:green;">头部取消</a>&nbsp;|&nbsp;
  		<?php }?>
  		<?php if($v['state']!=2){?>
  		<a href="change.php?id=<?php echo $v['id']?>&state=2">首屏推荐</a>&nbsp;|&nbsp;
  		<?php }else{?>
  		<a href="change.php?id=<?php echo $v['id']?>&state=0" style="color:green;">首屏取消</a>&nbsp;|&nbsp;
  		<?php }?>
  		<?php if($v['state']!=1){?>
  		<a href="change.php?id=<?php echo $v['id']?>&state=1">图片推荐</a>
  		<?php }else{?>
  		<a href="change.php?id=<?php echo $v['id']?>&state=0" style="color:green;">图片取消</a>
  		<?php }?>
  		</td>
  		<td><a href="update.php?id=<?php echo $v['id']?>">修改</a>&nbsp;|&nbsp;<a href="del.php?id=<?php echo $v['id']?>">删除</a></td>
  	</tr>
  	<?php }?>
  </table>
  <div><?php echo $page->pages();?></div>
  
  
  
  
  
  
  
  
  
  
  
  
  </body>
</html>