<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';
$db=Db::getInstance();
$arr=$db->select("type","*","fid=0 and state<9");
//根据id，获取id对应的分类记录
$id=$_GET['id'];
$typeArr=$db->select('type','*',"id=$id");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
  <div>当前操作：修改分类</div>
  <hr/>
  <form action="usave.php?id=<?php echo $id?>" method="post">
  <table>
  	<tr>
  		<td>名称：</td>
  		<td><input value="<?php echo $typeArr[0]['tname']?>" type="text" name="tname"/></td>
  	</tr>
  	<tr>
  		<td>父分类：</td>
  		<td><select id="s1" name="fid">
  		<option value="0">顶级</option>
  		<?php foreach($arr as $v){?>
  		<option value="<?php echo $v['id']?>"><?php echo $v['tname']?></option>
  		<?php }?>
  		</select></td>
  	</tr>
  	<tr>
  		<td colspan="2"><input type="submit" value="提交"/></td>
  	</tr>
  </table>
  </form>
  </body>
</html>
<script type="text/javascript">
document.getElementById('s1').value='<?php echo $typeArr[0]['fid']?>';







</script>