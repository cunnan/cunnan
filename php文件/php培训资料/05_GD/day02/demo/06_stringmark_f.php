<?php 
//水印文字
//将文字水印功能封装成自定义函数。要求图片文件可以任意
//指定。
//$filename = 'monkey.jpg';
//$filename = "dog.gif";
$filename = "dog.jpg";
stringMark($filename);
function stringMark($filename){
	//获取图片信息
	$fileinfo = getimagesize($filename);
	//获取图片的宽
	$width = $fileinfo[0];
	//获取图片的高
	$height = $fileinfo[1];
	//获取图片类型
	$type = $fileinfo[2];
	$type_array = array(1=>"gif",2=>"jpeg",3=>"png");
	//获取图片格式的字符串形式
	$type_str = $type_array[$type];
	
	//拼装函数
	$fun_str = "imagecreatefrom".$type_str;
	
	//获取资源
	$img = $fun_str($filename);
	
	//画
	//创建颜色
	$color = imagecolorallocate($img,0,255,0);
	$font = 5;
	$string = "localhost";
	//x= 图片的宽度-（文字的宽度+希望空开的距离）
	$x = $width - (imagefontwidth($font)*strlen($string)+10);
	//y = 图片的高度 - （文字的高度+希望空开的距离）
	$y = $height - (imagefontheight($font)+10);	
	
	imagestring($img,$font,$x,$y,$string,$color);
	
	//输出
	//通知浏览器输出图片
	header("Content-Type:image/png");
	//GD库输出图片
	imagepng($img);
	
	//释放内存
	imagedestroy($img);	
	
}








