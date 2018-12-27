<?php 
/*
 * 4、将图片缩放功能封装为自定义函数，要求被缩放的图片
 * 文件可以任意指定，缩放尺寸可以任由指定。
 */
$width = "200";
$height = "200";
$filename = 'qq.png';
thumb($width,$height,$filename);
function thumb($width,$height,$filename){
	//获取目标资源
	$dst_img = imagecreatetruecolor($width,$height);
	//获取源图片信息
	list($src_w,$src_h,$type)=getimagesize($filename);
	$type_array = array(1=>"gif",2=>"jpeg",3=>"png");
	//获取图片格式的字符串形式
	$type_str = $type_array[$type];
	//拼装函数
	$fun_str = "imagecreatefrom".$type_str;
	//获取源图片资源
	$src_img = $fun_str($filename);
	
	imagecopyresampled($dst_img,$src_img,
	                   0,0,
	                   0,0,
	                   $width,$height,
	                   $src_w,$src_h);
	
	//展示
	header("Content-Type:image/gif");
	imagegif($dst_img);
	
	//释放资源
	imagedestroy($dst_img);
	imagedestroy($src_img);
	
}




