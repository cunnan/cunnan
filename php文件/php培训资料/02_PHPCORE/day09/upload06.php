<?php
header('Content-Type:text/html;charset=utf-8');
require 'inc/common.function.php';
require 'inc/upload2.function.php';
// 调用上传函数,返回重命名后的文件名称的数组
$arrType = array('jpg','jpeg','png','gif','txt','doc');
$uploadArr = uploadFile('aaa',$arrType);//调用函数
echo '<pre>';
print_r($uploadArr);
echo '</pre>';
//  最后 会将 重命名后的文件名称存入数据