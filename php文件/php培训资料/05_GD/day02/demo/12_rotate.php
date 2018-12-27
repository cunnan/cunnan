<?php 
//图片的旋转
$filename = "dog.jpg";
//源图片的资源，要被旋转的图片资源
/*
 * 5、将图片的旋转封装为自定义函数，要求被旋转的图片
 * 文件名称和旋转的角度可以任意指定。
 */
$src_img = imagecreatefromjpeg($filename);

$angle = 45;

$bg_color = imagecolorallocate($src_img,0,255,0);

$dst_img = imagerotate($src_img,$angle,$bg_color);


//展示
header("Content-Type:image/gif");
imagegif($dst_img);

//释放资源
imagedestroy($dst_img);
imagedestroy($src_img);

















