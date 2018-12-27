<?php
header("content-type:text/html;charset=utf-8");
//查询所有记录

$conn = new Mongo("localhost");
$conn->connect();
//选择指定库下的指定集合
$collection = $conn->selectCollection("news","userInfo");

//查询所有记录
$cursor = $collection->find();
//获得所有记录
while($cursor->hasNext())
{
	//获得该记录
	$row = $cursor->getNext();
	echo "{$row["userName"]}--{$row["age"]}--{$row["sex"]}--{$row["address"]}<br>";
}

$conn->close();








