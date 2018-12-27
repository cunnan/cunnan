<?php 
/*
 * 制作验证码
      - 画布（浅色、颜色随机）
      - 干扰（随机出现线、点）
      - 写字
      - 输出 展示
      - 释放资源
 */
//1、画布（浅色、颜色随机）
$width = 80;
$height = 30;
$img = imagecreatetruecolor($width,$height);
//背景色
$bgColor = imagecolorallocate($img,rand(200,255),rand(200,255),rand(200,255));
//填充画布
imagefill($img,0,0,$bgColor);

//- 干扰（随机出现线、点）
//随机出现10条线
for($i=1;$i<=10;$i++){
	$color = imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200));
	imageline($img,rand(1,79),rand(1,29),rand(1,79),rand(1,29),$color);
}
//100个随机出现的点
for($i=1;$i<=100;$i++){
	$color = imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200));
	imagesetpixel($img,rand(1,79),rand(1,29),$color);
}

//- 写字
//验证码文字库
$codes = "abcdefghijklmnopqrstuvwxyz0123456789";
//验证码长度
$length = 4;
for($i=0;$i<$length;$i++){
	/*
	 * 从codes字符串中随机截取1位，截取验证码长度次数
	 */
	$code = substr($codes,rand(0,strlen($codes)-1),1);
	$font = 5;
	//文字输出的x轴坐标位置
	$x = ($width/$length)*$i+5;
	$y = rand(5,10);
	$color = imagecolorallocate($img,rand(0,100),rand(0,100),rand(0,100));
	imagestring($img,$font,$x,$y,$code,$color);
	
}





// - 输出 展示
//通知浏览器输出图片
header("Content-Type:image/png");
//GD库函数输出图片
imagepng($img);


//- 释放资源
imagedestroy($img);



















