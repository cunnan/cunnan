<?php 
$filename = "export.php";
//echo filesize($filename);

//将filesize获取的文件大小（bytes）转换为人类易读的格式
echo getFileSize($filename);
function getFileSize($filename){
	$size = filesize($filename);
	$unit = ""; //用来记录文件的单位
	if($size>=pow(2,40)){
		$unit = "TB";
		$size = $size/pow(2,40);
	}else if($size>=pow(2,30)){
		$unit = "GB";
		$size = $size/pow(2,30);
	}else if($size>=pow(2,20)){
		$unit = "MB";
		$size = $size/pow(2,20);
	}else if($size>=pow(2,10)){
		$unit = "KB";
		$size = $size/pow(2,10);
	}else{
		$unit = "bytes";		
	}
	return $size.$unit;
}










