<?php 
//图片的翻转 沿y轴翻转
//6、作业： 将图片沿x轴进行翻转。
$filename = "dog.jpg";
fz($filename);
function fz($filename){
	//获取源图片的信息
	list($width,$height,$type) = getimagesize($filename);
	//$dst_img 图片翻转后的资源
    //创建一个和源图片一样大小的画布
	$dst_img = imagecreatetruecolor($width,$height);
	//$src_img 从现有图片上获取资源
	//获取图片的格式
	$type_array = array(1=>"gif",2=>"jpeg",3=>"png");
	$type_str = $type_array[$type];
	//拼装函数
	$fun = "imagecreatefrom".$type_str;
	$src_img = $fun($filename);
	
	//翻转过程
	for($i=0;$i<$width;$i++){
		$dst_x = $width-$i-1;
		$dst_y = 0;
		$src_x = $i;
		$src_y = 0;
		imagecopy($dst_img,$src_img,
		          $dst_x,$dst_y,
		          $src_x,$src_y,
		          1,$height);
	}
	
	//展示
	header("Content-Type:image/gif");
	imagegif($dst_img);
	
	//释放资源
	imagedestroy($dst_img);
	imagedestroy($src_img);	
	
}















