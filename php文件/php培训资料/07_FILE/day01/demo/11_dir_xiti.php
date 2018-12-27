<?php 
header("Content-Type:text/html;charset=utf-8");
//遍历目录
//1、打开目录
//3、应用opendir一组函数循环读取出目录下的内容。

/*
 * 4、将上一题循环读取出的内容进行判断，分别判断出文件和目录。
      要求输出：文件：***
                        目录：***
 */
//1、打开目录
$pathname = "./test";
$dir = opendir($pathname);

//2、循环读取目录下的内容
while($filename = readdir($dir)){
	//过滤掉 . 和 ..
	if(!($filename=="."||$filename=="..")){
		//拼装好路径   //./test.
		$filename = $pathname."/".$filename;
		
		echo "<br/>".$filename;
		//判断读取到的内容究竟是文件还是目录
		if(is_dir($filename)){
			echo "<br/>目录：".$filename;
		}
		if(is_file($filename)){
			echo "<br/>文件：".$filename;
		}
	}
}

//关闭目录 释放资源
closedir($dir);























