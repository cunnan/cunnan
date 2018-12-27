<?php
header('Content-Type:text/html;charset=utf-8');
$var = 'abcdefg';
echo  substr($var,3);// defg
echo '<br/>';
echo  substr($var,3,2);//de
echo '<br/>';
// c.如果$start,$length 是负值,位置倒数  
echo substr($var,-5,2);//cd
echo '<br/>';
echo substr($var,0,-3);//abcd
echo '<br/>';
echo substr($var,-5,-3);//cd
echo '<br/>';
echo substr($var,0,-1);//abcdef
echo '<br/>';
echo substr($var,9,3);//false
// strlen:获得字符串长度
// 获得 字符串中的随机一个字符,$start随机起始编号
//  mt_rand(0,strlen($str)-1) 作为$start随机起始编号
$str ='abcdefghigklmnopqrstuvwxy
		zQWERTYUIOPLKJHGFDSAZXCVBNM0123456789';
$code = substr($str,mt_rand(0,
		strlen($str)-1),1);
echo $code;
echo '<hr/>';
$var ='abcdefg';
echo strlen($var);
echo '<hr/>';
/*strtolower:将字符串转为小写
     strtoupper:将字符串转为大写
     ucfirst:将字符串首字母大写
     ucwords:将字符串中每个单词首字母大写
 * 
 */
$var ='helLO worLD';
echo $var;
echo '<br/>';
echo  strtolower($var);
echo '<br/>';
echo  strtoupper($var);
echo '<br/>';
echo  ucfirst($var);
echo '<br/>';
echo  ucwords($var);

























