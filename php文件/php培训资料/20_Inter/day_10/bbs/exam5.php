<?php
header("content-type:text/html;charset=utf-8");
//删除记录

$conn = new Mongo("localhost");
$conn->connect();
$collection = $conn->selectCollection("news","userInfo");

//删除记录
$where = array("sex"=>"女");
$result = $collection->remove($where);

var_dump($result);


$conn->close();









