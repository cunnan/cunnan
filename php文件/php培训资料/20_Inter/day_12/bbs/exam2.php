<?php
header("content-type:text/html;charset=utf-8");
include_once 'vendor/autoload.php';
use voku\helper\AntiXSS;

$str = "你好大家好，<script type='text/javascript'>alert('大家好');</script>,社会主义好";

$xss = new AntiXSS();
$str = $xss->xss_clean($str);//去掉$str中的js代码


echo $str;