<?php 
//$fruit = array("apple","orange");
$url = array("keyword"=>1,"username"=>2);
unset($url["p"]);
var_dump($url);