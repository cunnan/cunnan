<?php
//线
//1、创建画布
$img = imagecreatetruecolor(200,200);
//2、画
//创建颜色
$green = imagecolorallocate($img,0,255,0);
$red = imagecolorallocate($img,255,0,0);
//填充画布
imagefill($img,0,0,$green);
//3、在一张200*200的画布上输出一个正十字。
//线
imageline($img,0,0,200,200,$red);

//3、展示
//通知浏览器输出图片
header("Content-Type:image/png");
//GD库函数输出图片
imagepng($img);

//4、释放资源
imagedestroy($img);
















