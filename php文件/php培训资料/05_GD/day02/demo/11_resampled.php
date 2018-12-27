<?php 
//图片的剪切
$filename = "dog.jpg";//300*300

$dst_img = imagecreatetruecolor(100,100);
$src_img = imagecreatefromjpeg($filename);



imagecopyresampled($dst_img,$src_img,
                   0,0,
                   0,0,
                   100,100,
                   150,150);

//展示
header("Content-Type:image/gif");
imagegif($dst_img);

//释放资源
imagedestroy($dst_img);
imagedestroy($src_img);

















