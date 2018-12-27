<?php
$conn=new PDO("mysql:host=127.0.0.1;dbname=test","root","root");
$conn->query("set names utf8");
$arr=array("高中","大专","本科","研究生","博士");
for($j=0;$j<300000;$j++){
	$str="qwertyuiopasdfghjklzxcvbnm";
	$name="";
	for($i=0;$i<4;$i++){
		$name.=$str[mt_rand(0,25)];
	}
	$classId=mt_rand(1,100);
	$sql="insert into student(name,age,sex,card,education,introduce,classid) values('{$name}',".mt_rand(18,35).",".rand(1,3).",'".mt_rand(10000,99999).mt_rand(10000,99999).mt_rand(10000,99999)."','".$arr[rand(0,4)]."','I am a teacher.you are a student.',$classId)";
	$conn->query($sql);
}
echo $j;
?>