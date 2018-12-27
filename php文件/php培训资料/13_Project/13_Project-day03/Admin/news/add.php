<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';
$db=Db::getInstance();
//获取第一级分类
$arrOne=$db->select("type","*","fid=0 and state<9");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
  <div>当前操作：添加文章</div>
  <form action="save.php" method="post">
  <table>
  	<tr>
  		<td>标题：</td>
  		<td><input type="text" name="title"/></td>
  	</tr>
  	<tr>
  		<td>内容：</td>
  		<td><textarea rows="8" cols="30" name="content"></textarea></td>
  	</tr>
  	<tr>
  		<td>分类：</td>
  		<td>
  		<select name="typeid">
  			<!-- 从数据库中获取分类，展现option -->
  			<?php
  			var_dump($arrOne);
  			foreach($arrOne as $v1){
  			?>
  			<optgroup label="<?php echo $v1['tname']?>">
  				<?php 
  				//获取当前分类的子
  				$arrTwo=$db->select("type","*","fid={$v1['id']} and state<9");
  				foreach($arrTwo as $v2){
  				?>
  				<option value="<?php echo $v2['id']?>"><?php echo $v2['tname']?></option>
  				<?php
  				}
  				?>
  			</optgroup>
  			<?php
  			}
  			?>
  		</select>
  		</td>
  	</tr>
  	<tr>
  		<td colspan="2"><input type="submit" value="提交"/></td>
  	</tr>
  </table>
  </form>
  
  
  
  
  
  
  
  
  
  </body>
</html>