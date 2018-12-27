<?php
header("content-type:text/html;charset=utf-8");
//修改记录

$conn = new Mongo("localhost");
$conn->connect();
$collection = $conn->selectCollection("news","userInfo");

//修改记录
$where = array("userName"=>"张小三");
$data = array(
		"userName"=>"张小三",
		"age"=>30,
		"sex"=>"男",
		"address"=>"北京"
);
$result = $collection->update($where,$data);

var_dump($result);


$conn->close();









