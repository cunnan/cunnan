<?php
$conn=new PDO("mysql:host=127.0.0.1;dbname=test","root","root");
$conn->query("set names utf8");
for($j=0;$j<100;$j++){
	$name="php".($j+1500);
	@$conn->query("insert into class(name) values('{$name}')");
}
echo $j;
?>