<?php 
//6、作业： 将图片沿x轴进行翻转。
$filename = "monkey.jpg";
$filename = "dog.gif";
fzx($filename);
function fzx($filename){
	//获取源图片的信息
	list($width,$height,$type) = getimagesize($filename);
	 
	//$dst_img
	$dst_img = imagecreatetruecolor($width,$height);
	
	
	//获取filename的图片格式
	$type_array = array(1=>'gif',2=>'jpeg',3=>'png');
	$type_str = $type_array[$type];
	//拼装函数
	$fun = "imagecreatefrom".$type_str;
	//$src_img 获取要翻转的图片的资源
	$src_img = $fun($filename);
	
	for($i=0;$i<$height;$i++){
		$dst_y = $height-$i-1;
		imagecopy($dst_img,$src_img,
		          0,$dst_y,
		          0,$i,
		          $width,1);
	}
	
	//展示
	header("Content-Type:image/png");
	imagepng($dst_img);
	
	//释放内存
	imagedestroy($dst_img);
	imagedestroy($src_img);
}








