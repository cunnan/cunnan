<?php
header('Content-Type:text/html;charset=utf-8');
echo '当前文件的路径是:' , __FILE__ , '<br><br>';

echo 'Apache的主目录' , $_SERVER['DOCUMENT_ROOT'] , '<br><br>';

$path = str_replace('\\','/',substr(__FILE__,strlen($_SERVER['DOCUMENT_ROOT'])));

echo  $path;