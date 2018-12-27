<?php 
/*
 * 5、将图片的旋转封装为自定义函数，要求被旋转的图片
 * 文件名称和旋转的角度可以任意指定。
 */
$filename = "monkey.jpg";
$angle = 30;
rotate($filename,$angle);
function rotate($filename,$angle){
	list($width,$height,$type) = getimagesize($filename);
	$type_array = array(1=>"gif",2=>"jpeg",3=>"png");
	$type_str = $type_array[$type];
	//拼装函数
	$fun = "imagecreatefrom".$type_str;
	//被旋转的图片资源
	$src_img = $fun($filename);
	//创建背景色
	$bg_color = imagecolorallocate($src_img,0,0,255);
	$dst_img = imagerotate($src_img,$angle,$bg_color);
	
	//展示
	header("Content-Type:image/gif");
	imagegif($dst_img);
	
	//释放资源
	imagedestroy($dst_img);
	imagedestroy($src_img);
}












