<?php 
/*
 * 3、考虑：将图片水印功能封装成自定义函数。
 * 要求大图片文件和水印图片文件可以任意指定。
 */
//将两张图片合并为一张图片
$filename = "dog.jpg"; //$dst 目标图片
$wetermark = "qq.png"; //$src 水印图片 源图片 小图片

$dst_img = imagecreatefromjpeg($filename);

$src_img = imagecreatefrompng($wetermark);

imagecopy($dst_img,$src_img,100,200,
          12,0,10,25);

//展示
//通知浏览器输出图片
header("Content-Type:image/png");
//GD库函数输出图片
imagepng($dst_img);

//释放内存
imagedestroy($dst_img);
imagedestroy($src_img);















