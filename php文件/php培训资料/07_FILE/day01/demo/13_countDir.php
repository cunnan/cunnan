<?php 
header("Content-Type:text/html;charset=utf-8");
//统计目录下的文件和目录数
$pathname = 'test';
$file_num = 0; //用来计算目录下的文件数
$dir_num = 0;  //用来计算目录下的目录数
countDir($pathname);
echo "文件数:".$file_num;
echo "<br/>目录数:".$dir_num;
function countDir($pathname){
	 global $file_num,$dir_num;
	
     //1、打开目录
     //$pathname = /test
     $dir = opendir($pathname);

     //2、循环遍历目录
     while($filename = readdir($dir)){
     	  //忽略掉 "." 和 ".."
     	  if($filename!="."&&$filename!=".."){
     	  	    //拼装完整路径
     	  	    $filename = $pathname."/".$filename;
     	  	    if(is_dir($filename)){
     	  	    	//是目录
     	  	    	$dir_num++;	
     	  	    	//test/b  	    	
     	  	    	countDir($filename);
     	  	    }else{
     	  	    	//是文件
     	  	    	$file_num++;
     	  	    }
     	  }
     }
     //释放资源
     closedir($dir);
     
}


function countDir2($pathname){
	//$pathname = "test/b"
	global $file_num,$dir_num;
	
	
	//打开目录
	$dir = opendir($pathname);
	
	//循环读取目录下的内容
	while($filename = readdir($dir)){
		if($filename!="."&&$filename!=".."){
			//拼装目录
			$filename = $pathname."/".$filename;
			if(is_dir($filename)){
				$dir_num++;
			}else{
				$file_num++;
			}
		}		
	}
	
	//释放资源
	closedir($dir);
	
}





















