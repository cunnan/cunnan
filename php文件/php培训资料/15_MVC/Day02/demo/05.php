<?php
header('Content-Type:text/html;charset=utf-8');
$date = '26/02/2017';
$pattern = '/((\d+)\/((\d+)\/(\d+)))/';
preg_match_all($pattern, $date,$matches);
print_r($matches);