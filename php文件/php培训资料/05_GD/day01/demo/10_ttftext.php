<?php
////输出文字
//1、创建画布
$img = imagecreatetruecolor(200,200);
//2、画
//创建颜色
$green = imagecolorallocate($img,0,255,0);
$blue = imagecolorallocate($img,0,0,255);
//填充画布背景色
imagefill($img,0,0,$green);

//6、在上一题的画布上输出中文。
//输出文字
imagettftext($img,20,0,100,100,$blue,
             "simfang.ttf","你好");




//输出图片 展示
//通知浏览器输出图片
header("Content-Type:image/png");
//gd库输出图片
imagepng($img);

//释放资源
imagedestroy($img);































