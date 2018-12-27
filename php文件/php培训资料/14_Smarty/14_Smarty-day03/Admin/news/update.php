<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';
$db=Db::getInstance();
//获取第一级分类
$arrOne=$db->select("type","*","fid=0 and state<9");
//根据文章id，获取文章记录
$id=$_GET['id'];
$arr=$db->select("news","*","id=$id");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
  <div>当前操作：修改文章</div>
  <form action="usave.php" method="post" enctype="multipart/form-data">
  <table>
  	<tr>
  		<td>标题：</td>
  		<td><input value="<?php echo $arr[0]['title']?>" type="text" name="title"/></td>
  	</tr>
  	<tr>
  		<td>图片：</td>
  		<td><input type="file" name="upload"/></td>
  	</tr>
  	<tr>
  		<td>内容：</td>
  		<td><textarea rows="8" cols="30" name="content"><?php echo $arr[0]['content']?></textarea></td>
  	</tr>
  	<tr>
  		<td>分类：</td>
  		<td>
  		<select name="typeid" id="typeid">
  			<!-- 从数据库中获取分类，展现option -->
  			<?php
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
  		<td colspan="2"><input type="hidden" name="id"  value="<?php echo $arr[0]['id']?>"/><input type="submit" value="提交"/></td>
  	</tr>
  </table>
  </form>
  
  
  
  
  
  
  
  
  
  </body>
</html>
<script type="text/javascript">
document.getElementById("typeid").value='<?php echo $arr[0]['typeid']?>';
</script>



