<?php 
//水印文字
$filename = 'monkey.jpg';
//$filename = 'dog.gif';
//$filename = "qq.png";
//获取图片文件的宽度和高度
$fileinfo = getimagesize($filename);
//图片的宽
$width = $fileinfo[0];
//图片的高
$height = $fileinfo[1];
//图片的类型
/*
 *  1 gif
    2 jpeg
    3 png  
 */
/*
 * 2、考虑：将文字水印功能封装成自定义函数。
 * 要求图片文件可以任意指定。

 */
//图片格式的对应关系写成数组
$type_array = array(1=>"gif",2=>"jpeg",3=>"png");
$type = $fileinfo[2];//2
//获取图片格式的字符串形式
$type_str = $type_array[$type];

//函数的公共部分
$fun_str = "imagecreatefrom";
//拼装函数
$fun = $fun_str.$type_str;

//1、获取资源
$img = $fun($filename);
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









