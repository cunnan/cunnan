<?php 
/*
 * unset()
 * 功能：删除一个已经设置的变量
 * */ 
$a = 10;
unset($a);
//echo $a;
$fruit = array("fruit1"=>"apple","fruit2"=>"orange");
unset($fruit["fruit1"]);
echo $fruit["fruit2"];

