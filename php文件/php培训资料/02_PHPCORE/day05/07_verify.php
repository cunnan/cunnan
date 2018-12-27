<?php
header('Content-Type:text/html;charset=utf-8');
// 4位随机整数验证码 颜色 :不同
$link ='';
$link.='<span style="color:rgb(255,0,0)">'
		.mt_rand(0,9).'</span>';
$link.='<span style="color:rgb(0,255,0)">'.mt_rand(0,9).'</span>';
$link.='<span style="color:rgb(255,0,255)">'.mt_rand(0,9).'</span>';
$link.='<span style="color:rgb(0,0,255)">'
		.mt_rand(0,9).'</span>';
echo $link;
echo '<hr/>';
// 4位随机整数验证码 颜色 :随机产生
$link ='';
for($i=1;$i<=4;$i++){
   $link.='<span style="color:rgb('
   	.mt_rand(0,255).','
   	.mt_rand(0,255).','
   	.mt_rand(0,255).')">'
   	.mt_rand(0,9).'</span>';	
}
echo $link;
echo '<hr/>';
//4位随机字符验证码 颜色 :随机产生
$link='';
$str ='abcdefghigklmnopqrstuvwxyzQWERTYUIOPLKJHGFDSAZXCVBNM0123456789';

for($i=1;$i<=4;$i++){
  $code = substr($str,mt_rand(0,
  		        strlen($str)-1),1);
  $link.='<span style="color:rgb('
  		.mt_rand(0,255).','
  		.mt_rand(0,255).','
  		.mt_rand(0,255).')">'
  		.$code.'</span>';	
}
echo $link;





































