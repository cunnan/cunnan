<?php 
//目录的复制
//将 test目录复制到 test_new
$oldpath = "test";
$newpath = "test_new";
copyDir($oldpath,$newpath);
function copyDir($oldpath,$newpath){
	//判断目标目录是否存在
	if(file_exists($newpath)){
		//说明目标路径存在
		//判断目标路径是否是一个文件
		if(is_file($newpath)){
			echo "目录路径是文件，无法拷贝";
			exit;
		}
	}else{
		//目标路径不存在，创建新目录
		mkdir($newpath);
	}
	
	//拷贝
	//打开旧目录
	$dir = opendir($oldpath);
	//循环遍历目录
	while($filename = readdir($dir)){
		//过滤掉 "."和".."
		if(!($filename=="."||$filename=="..")){
			//拼装路径				
			$oldfilename = $oldpath."/".$filename;					
			$newfilename = $newpath."/".$filename;
			if(is_dir($oldfilename)){
				copyDir($oldfilename,$newfilename);
			}else{
				//是文件
				echo "oldfilename=".$oldfilename;
				echo "<br/>";
				echo "newfilename=".$newfilename;
				echo "<hr/>";						
				copy($oldfilename,$newfilename);
			}		
			
		}
		
	}	
	closedir($dir);
}










