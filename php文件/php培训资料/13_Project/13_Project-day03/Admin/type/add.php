<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';
$db=Db::getInstance();
$arr=$db->select("type","*","fid=0 and state<9");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
  <div>当前操作：添加分类</div>
  <hr/>
  <form action="save.php" method="post">
  <table>
  	<tr>
  		<td>名称：</td>
  		<td><input type="text" name="tname"/></td>
  	</tr>
  	<tr>
  		<td>父分类：</td>
  		<td><select name="fid">
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