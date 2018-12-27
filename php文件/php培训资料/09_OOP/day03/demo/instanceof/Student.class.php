<?php
include "Person.class.php"; 
class Student extends Person{
	
}
$s = new Student;
//instanceof 判断一个类对象是否属于类本身
/*if($s instanceof Student){
	echo 'yes'; //yes
}else{
	echo 'no';
}*/
/*if($s instanceof Person){
	echo "yes"; //yes
}else{
	echo "no";
}*/
$p = new Person;
if($p instanceof Student){
	echo "yes";
}else{
	echo "no";
}











