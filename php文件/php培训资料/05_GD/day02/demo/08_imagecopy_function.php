<?php 
/*
 * 3、考虑：将图片水印功能封装成自定义函数。
 * 要求大图片文件和水印图片文件可以任意指定。
 */
$filename = "dog.jpg";
$waterMark = "qq.png";
waterMark($filename,$waterMark);
function waterMark($filename,$waterMark){
	//获取图片的信息
	list($width,$height,$type) = getimagesize($filename);
	list($width_w,$height_w,$type_w) = getimagesize($waterMark);
	//获取图片格式的字符串形式
	$type_array = array(1=>'gif',2=>"jpeg",3=>"png");
	//大图片的格式的字符串形式
	$type_str = $type_array[$type];
	//小图片的格式的字符串形式
	$tyep_w_str = $type_array[$type_w];
	
	//拼装函数
	$fun_str = "imagecreatefrom";
	//大图片的函数
	$fun = $fun_str.$type_str;
	//小图片的函数
	$fun_w = $fun_str.$tyep_w_str;
	
	//获取大图片的资源
	//$fun = imagecreatefromjpeg()
	$dst_img = $fun($filename);
	//小图片资源
	$src_img = $fun_w($waterMark);
	
	//$dst_x = 大图片的宽-（小图片的宽+希望空开的距离）
	$dst_x = $width-($width_w+20);
	//$dst_y = 大图片的高度-（小图片的高度+希望空开的距离）
	$dst_y = $height-($height_w+20);
		
	imagecopy($dst_img,$src_img,
	          $dst_x,$dst_y,
	          0,0,
	          $width_w,$height_w);
	
	//展示
	header("Content-Type:image/gif");
	imagegif($dst_img);
	
	//释放资源
	imagedestroy($dst_img);
	imagedestroy($src_img);
}



















