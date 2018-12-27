<?php
header('Content-Type:text/html;charset=utf-8');
$var = true; //  true ==1 -->true
switch($var){
   case 0:
       echo 0;
       break;
   case 1:
	   echo 1;
   case 2:
	   echo 2;
   default:
	   echo 3;
	   break;
   case 4:
	   echo 4;
}



