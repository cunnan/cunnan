<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
    <script type="text/javascript" src="/psd1611/16_ThinkPHP/Public/js/jquery.js"></script>
    <script type="text/javascript">
    function delImage(id,imagename){
    	$.ajax({
    		url:'/psd1611/16_ThinkPHP/Admin/Product/delimage',
    		data:'id='+id+"&imagename="+imagename,
    		type:'post',
    		dataType:'json',
    		success:function(re){
    			if(re.status==1){
    				$("#image_"+id).remove();
    			}else{
    				alert("图片删除失败");
    			}
    		}
    	})
    }
    </script>
  </head>
  <body>
  <div>当前操作：修改产品&nbsp;<a href="/psd1611/16_ThinkPHP/Admin/Product/oper">列表</a></div>
  <form enctype="multipart/form-data" action="/psd1611/16_ThinkPHP/Admin/Product/usave" method="post">
  <table>
  	<tr>
  		<td>标题：</td>
  		<td><input value="<?php echo ($arr["title"]); ?>" type="text" name="title"/></td>
  	</tr>
  	<tr>
  		<td>价格：</td>
  		<td><input value="<?php echo ($arr["price"]); ?>" type="text" name="price"/></td>
  	</tr>
  	<tr>
  		<td>图片：</td>
  		<td>
  		<table>
  			<?php if(is_array($imageArr)): foreach($imageArr as $key=>$v): ?><tr id="image_<?php echo ($v["id"]); ?>">
  				<td><img src="/psd1611/16_ThinkPHP/Public/upload/<?php echo ($v["imagename"]); ?>" width="100"/></td>
  				<td><a href="javascript:delImage(<?php echo ($v["id"]); ?>,'<?php echo ($v["imagename"]); ?>')">删除</a></td>
  			</tr><?php endforeach; endif; ?>
  		</table>
  		<input multiple='multiple' type="file" name="upload[]"/></td>
  	</tr>
  	<tr>
  		<td colspan="2"><input type="hidden" name="id" value="<?php echo ($arr["id"]); ?>"/><input type="submit" value="提交"/></td>
  	</tr>
  </table>
  
  </form>
  </body>
</html>