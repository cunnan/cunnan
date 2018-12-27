<?php 
//从现有图片上获取资源
$filename = "dog.jpg";
$img = imagecreatefromjpeg($filename);
//var_dump($img);
//1、在现有图片上输出文字 hello

//2、画
$green = imagecolorallocate($img,0,255,0);
//画线
imageline($img,30,0,30,300,$green);

//3、展示
//通知浏览器输出图片
header("Content-Type:image/png");
//GD库函数输出图片
imagepng($img);

//4、释放资源
imagedestroy($img);


























