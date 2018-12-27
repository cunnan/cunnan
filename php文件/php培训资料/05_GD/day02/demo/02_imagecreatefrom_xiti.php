<?php 
//1、在现有图片上输出文字 hello
$filename = "dog.jpg";
//1、获取资源
$img = imagecreatefromjpeg($filename);
//2、画
$blue = imagecolorallocate($img,0,0,255);
//写字
imagestring($img,5,150,150,"hello",$blue);


//3、展示
//通知浏览器输出图片
header("Content-Type:image/png");
//GD库函数输出图片
imagepng($img);

//4、释放资源

imagedestroy($img);


























