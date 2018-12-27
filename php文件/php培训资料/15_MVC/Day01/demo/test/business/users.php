<?php

//这个文件存储所有的与用户相关的业务逻辑
function addUser(){	
	require_once 'templates/register.html';
}
function doAddUser(){	
	$pdo = new PDO('mysql:host=localhost;dbname=mvc','root','root');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = 'INSERT users(username,password) VALUES(:username,:password)';
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':username', $username);
	$stmt->bindParam(':password', $password);
	$stmt->execute();

	require_once 'templates/addUserSuccess.html';
}

function listUser(){
	//从数据库中获取数据
	$pdo = new PDO('mysql:host=localhost;dbname=mvc','root','root');
	$sql = 'SELECT id,username,sex FROM users';
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$rowset = $stmt->fetchAll(PDO::FETCH_ASSOC);	
	require_once 'templates/listUser.html';
}

function removeUser(){
	//所有的预定义变量都是超全局作用域	
	$id = $_GET['id'];
	$pdo = new PDO('mysql:host=localhost;dbname=mvc','root','root');
	$sql = 'DELETE FROM users WHERE id=?';
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(1, $id);
	$stmt->execute();
	header('location:index.php?b=users&c=listUser');
}









