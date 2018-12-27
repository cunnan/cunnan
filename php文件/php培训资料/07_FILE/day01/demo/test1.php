<?php 
session_start();
//判断session下有没有保存uname
if($_SESSION['uname']==""){
	echo "no";
}else{
	echo "yes";
}