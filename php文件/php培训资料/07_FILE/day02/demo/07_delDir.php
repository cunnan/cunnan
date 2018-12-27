<?php 
header("Content-Type:text/html;charset=utf-8");
//递归删除目录
//test
$pathname = 'test';
delDir($pathname);
function delDir($pathname){
	 if(file_exists($pathname)){
	 	if(is_file($pathname)){
	 		//若$pathname存在，且是文件
	 		unlink($pathname);
	 		exit;
	 	}
	 }else{
	 	echo "目标目录不存在";
	 	exit;
	 }
	 
	 //目录存在，且是目录
	 $dir = opendir($pathname);
	 //循环读取目录下的内容
	 while($filename = readdir($dir)){
	 	//过滤掉"."和".."
	 	if($filename!="."&&$filename!=".."){
	 		//拼装目录
	 		$filename = $pathname."/".$filename;
	 		echo $filename;
	 		echo "<br/>";
	 		//判断是目录还是文件
	 		if(is_dir($filename)){
	 			//是目录，此时不管
	 			delDir($filename);
	 		}else{
	 			//是文件
	 			unlink($filename);
	 		}
	 		
	 	}
	 }
	 
	 //退出循环
	 //关闭目录 释放内存./test
	 closedir($dir);
	 //删除空目录
	 rmdir($pathname);
	
}



















