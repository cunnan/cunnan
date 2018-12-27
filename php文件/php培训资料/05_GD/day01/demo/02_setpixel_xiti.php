<?php 
//1、创建一个300*300画布，在画布上画100个随机出现的点。
//1、创建画布
$img = imagecreatetruecolor(300,300);
//2、画
//颜色
$blue = imagecolorallocate($img,0,0,255);

//填充画布
imagefill($img,0,0,$blue);
for($i=0;$i<100;$i++){
	$color = imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
	imagesetpixel($img,rand(1,299),rand(1,299),$color);
}

//4、输出
// 通知浏览器输出图片
header("Content-Type:image/gif");
// GD库函数输出图片
imagegif($img);

//5、释放资源
imagedestroy($img);
























