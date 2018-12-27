<?php 
$a = 10;

function test(){
	global $a;
	echo $a;
}
test();