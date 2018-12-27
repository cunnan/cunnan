<?php 
/*
 * 4、将图片缩放功能封装为自定义函数，要求被缩放的图片
 * 文件可以任意指定，缩放尺寸可以任由指定。
 */
//将源图片进行缩放
//创建空白的画布，画布的尺寸就是缩放的目标尺寸
$dst_img = imagecreatetruecolor(500,500);

//$filename = "dog.jpg";
$filename = "qq.png";
$src_img = imagecreatefrompng($filename);
$white=imagecolorallocate($dst_img,255,255,255);
imagefill($dst_img,0,0,$white);

imagecopyresampled($dst_img,$src_img,
                   100,100,
                   0,0,
                   300,300,
                   22,25);

//展示
header("Content-Type:image/gif");
imagegif($dst_img);

//释放资源
imagedestroy($dst_img);
imagedestroy($src_img);

















