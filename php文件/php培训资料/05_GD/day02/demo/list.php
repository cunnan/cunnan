<?php 
$filename = "dog.jpg";
list($width,$heigth,$type)= getimagesize($filename);
echo $width;
echo "<br/>";
echo $type;
