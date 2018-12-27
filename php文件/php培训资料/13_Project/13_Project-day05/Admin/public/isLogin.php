<?php
if(!isset($_SESSION['user'])){
	//跳转
	header("location:".BASE_URL."Admin/login.html");
	exit();
}