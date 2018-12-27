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
  <div>当前操作：添加管理</div>
  <form action="save.php" method="post" enctype="multipart/form-data">
  <table>
  	<tr>
  		<td>标题：</td>
  		<td><input type="text" name="title"/></td>
  	</tr>
  	<tr>
  		<td>图片：</td>
  		<td><input type="file" name="upload"/></td>
  	</tr>
  	<tr>
  		<td>url：</td>
  		<td><input type="text" name="url"/></td>
  	</tr>
  	<tr>
  		<td>分类：</td>
  		<td>
  		<select name="typeid">
  			<!-- 从数据库中获取分类，展现option -->
  			<?php
  			foreach($arrOne as $v1){
  			?>
  			
  				<option value="<?php echo $v1['id']?>"><?php echo $v1['tname']?></option>
  				
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