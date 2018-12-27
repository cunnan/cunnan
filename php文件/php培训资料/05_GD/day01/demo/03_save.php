<?php 
//保存图片
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

//4、保存（收藏）
//imagepng($img,"pixel.png");
//imagegif($img,"pixel.gif");
imagejpeg($img,"pixel.jpg");


//5、释放资源
imagedestroy($img);
























