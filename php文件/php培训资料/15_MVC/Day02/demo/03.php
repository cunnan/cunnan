<?php
header('Content-Type:text/html;charset=utf-8');
$array = array(
	0 => 'b',
	1 => 'users',
	2 => 'c',
	3 => 'addUser',
	4 => 'id',
	5 => '3',
	6 => 'pid',
	7 => '9'	
);

//转换成
for ($i=0;$i<count($array);$i+=2){
	$temp[$array[$i]] = $array[$i+1];
}

echo '<pre>';
print_r($temp);
echo '</pre>';


