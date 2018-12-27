<?php
header('Content-Type:text/html;charset=utf-8');
// 接受上传信息 $_FILES
// 单文件上传 :关联+关联的二维数组
echo '<pre>';
print_r($_FILES);
echo '</pre>';
/* 
// 上传文件名称 
echo $_FILES['pic']['name'];
// 上传文件大小
echo $_FILES['pic']['size']; */
// 简单单文件上传
// 1.判断上传文件报错信息等于0 代表成功
if($_FILES['pic']['error']==0){
  //2.上传文件的重命名,为了避免文件冲突
  // 2.1 获得文件的名称
  $filename = $_FILES['pic']['name'];
  // 2.2 获得文件的扩展名
  $ext = substr($filename,strrpos
  		($filename,'.')+1);
  // 2.3 给文件重命名(变化唯一标识) 时间是变化的: time  microtime
  $filename =md5(microtime(true).
  		mt_rand(1000,9999)).'.'.$ext;
  //echo $filename;
  //3.上传函数:将上传文件的临时位置移动到目标位置
 move_uploaded_file($_FILES['pic']['tmp_name']
  ,'upload/'.$filename);
}














































