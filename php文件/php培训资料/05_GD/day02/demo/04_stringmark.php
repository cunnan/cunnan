<?php 
//水印文字
//$filename = 'monkey.jpg';
$filename = 'dog.gif';
//获取图片文件的宽度和高度
$fileinfo = getimagesize($filename);
//图片的宽
$width = $fileinfo[0];
//图片的高
$height = $fileinfo[1];

//var_dump($fileinfo);exit;
//1、获取资源
$img = imagecreatefromjpeg($filename);
//2、创建颜色
$color = imagecolorallocate($img,0,255,0);
//水印文字
$font = 5;
$string = "hello monkey";
//x =  图片的宽-（文字的宽度+希望空开的距离）
$x = $width-(imagefontwidth($font)*strlen($string)+10);
//y = 图片的高度-（文字的高度+希望空开的距离）
$y = $height - (imagefontheight($font)+10);

imagestring($img,$font,$x,$y,$string,$color);

//展示
//通知浏览器输出图片
header("Content-Type:image/png");
imagepng($img);

//释放内存
imagedestroy($img);









