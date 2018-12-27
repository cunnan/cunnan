<?php 
header("Content-Type:text/html;charset=utf-8");
$filename = "export.php";
//获取文件的创建时间
echo "文件的创建时间:".date("Y-m-d H:i:s",filectime($filename));

echo "<br/>文件的修改时间:".date("Y-m-d H:i:s",filemtime($filename));


echo "<br/>文件的访问时间:".date("Y-m-d H:i:s",fileatime($filename));



