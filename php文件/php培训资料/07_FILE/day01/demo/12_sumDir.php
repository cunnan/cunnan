<?php 
//写一个自定义函数，统计目录的大小
$pathname = "test";
echo sumDir($pathname);
function sumDir($pathname){
	$size = 0; //累加目录下文件的大小
	//1、打开目录
	$dir = opendir($pathname);
	
	//循环遍历目录，统计目录下文件的大小
	while($filename = readdir($dir)){
		//过滤掉 "."和".."
		if($filename!="."&&$filename!=".."){
			//拼装目录
			$filename = $pathname."/".$filename;
			if(is_dir($filename)){
				//是目录
				//$filename = "test/b" 98bytes
				$size+=sumDir($filename);
			}else{
				//是文件，统计文件的大小
				$size+=filesize($filename);	//196			
			}
		}		
	}
	//释放资源
	closedir($dir);
	//返回目录内所有文件的大小，既目录的大小
	return $size;
	
}

/*function sumDir2($pathname){
	 //$pathname = test/b
	 $size = 0; //用来累加test/b下的所有文件的大小
	 $dir = opendir($pathname);
	 
	 //循环遍历目录下的内容
	 while($filename = readdir($dir)){
	 	//过滤掉.和".."
	 	if($filename!="."&&$filename!=".."){
	 		//$filename = d.txt
	 		//拼装目录
	 		$filename = $pathname."/".$filename;
	 		//$filename = test/b/d.txt
	 		if(is_dir($filename)){
	 			
	 		}else{
	 			//是文件
	 			$size+=filesize($filename);
	 		}	 		
	 	} 	
	 }
	 //释放资源 
	 closedir($dir);
	 return $size;
	
	
}*/


























