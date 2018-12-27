<?php 
//创建画布资源
$width = 200;
$height = 200;
//1、创建画布
$gd = imagecreatetruecolor($width,$height);
//var_dump($gd);
//2、画
//创建颜色
//创建红色
//1、创建一个300*300画布，在画布上画100个随机出现的点。
$red = imagecolorallocate($gd,255,0,0);
//创建绿色
$green = imagecolorallocate($gd,0,255,0);
//填充画布
imagefill($gd,0,0,$green);
//点
imagesetpixel($gd,100,100,$red);
//3、输出图片
//通知浏览器输出图片
header("Content-Type:image/png");
//GD库函数输出图片
imagepng($gd);

//4、释放资源
imagedestroy($gd);












