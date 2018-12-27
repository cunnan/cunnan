<?php
header('Content-Type:text/html;charset=utf-8');
//PHP支持动态包含文件
$n = mt_rand(1, 3);
require_once 'func/' . $n . '.php';
