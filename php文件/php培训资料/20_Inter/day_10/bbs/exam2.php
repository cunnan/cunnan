<?php
header("content-type:text/html;charset=utf-8");
//条件查询

$conn = new Mongo("localhost");
$conn->connect();
$collection = $conn->selectCollection("news","userInfo");

//查询
$where = array("sex"=>"女");
$cursor = $collection->find($where);
while($cursor->hasNext())
{
	$row = $cursor->getNext();
	echo "{$row["userName"]}--{$row["age"]}--{$row["sex"]}--{$row["address"]}<br>";
}

$conn->close();









