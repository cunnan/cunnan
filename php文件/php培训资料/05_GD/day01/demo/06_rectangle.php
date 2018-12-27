<?php
//空心矩形
//1、创建画布
$img = imagecreatetruecolor(200,200);
//2、画
//创建颜色
$green = imagecolorallocate($img,0,255,0);
$red = imagecolorallocate($img,255,0,0);
//填充画布
imagefill($img,0,0,$green);
//画空心矩形
imagerectangle($img,50,50,100,100,$red);

//画实心的矩形
imagefilledrectangle($img,100,100,150,150,$red);

//输出 展示
//通知浏览器输出图片
header("Content-Type:image/png");
imagepng($img);

//释放内存
imagedestroy($img);












