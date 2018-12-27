<?php 
$codes = "01234"; //5
//获取字符串的长度

//echo strlen($codes); //5
//exit;
//从上面的字符串中随机截取一位
//substr($str,$start[,$length]);
echo substr($codes,rand(0,strlen($codes)-1),1);