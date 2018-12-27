<?php
header("content-type:text/html;charset=utf-8");
//添加记录

$conn = new Mongo("localhost");
$conn->connect();
$collection = $conn->selectCollection("news","userInfo");

//添加记录
$data = array(
	"userName"=>"张小三",
	"age"=>10,
	"sex"=>"男",
	"address"=>"河北"
);
$result = $collection->insert($data);

var_dump($result);


$conn->close();









