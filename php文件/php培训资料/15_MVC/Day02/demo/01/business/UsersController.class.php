<?php
// 这个文件存储所有的与用户相关的业务逻辑
require_once 'BaseController.class.php';
class UsersController extends BaseController{
	protected $_db;
	//理论上的构造函数
	function _initalize(){
		$this->_db = new PDO ( 'mysql:host=localhost;dbname=mvc', 'root', 'root' ); 
	}
	function addUser() {	
			
		$this->_view->display ( 'templates/register.html' );
		// require_once 'templates/register.html';
	}
	function doAddUser() {		
		$username = $_POST ['username'];
		$password = $_POST ['password'];
		$sql = 'INSERT users(username,password) VALUES(:username,:password)';
		$stmt = $this->_db->prepare ( $sql );
		$stmt->bindParam ( ':username', $username );
		$stmt->bindParam ( ':password', $password );
		$stmt->execute ();	
		$this->_view->display ( 'templates/addUserSuccess.html' );
		// require_once 'templates/addUserSuccess.html';
	}
	function listUser() {
		// 从数据库中获取数据		
		$sql = 'SELECT id,username,sex FROM users';
		$stmt =$this->_db->prepare ( $sql );
		$stmt->execute ();
		//裸数据
		$rowset = $stmt->fetchAll ( PDO::FETCH_ASSOC );		
		$this->_view->assign ( 'rowset', $rowset );
		$this->_view->display ( 'templates/listUser.html' );
		// require_once 'templates/listUser.html';
	}
	function removeUser() {
		// 所有的预定义变量都是超全局作用域
		$id = $_GET ['id'];
		
		$sql = 'DELETE FROM users WHERE id=?';
		$stmt = $this->_db->prepare ( $sql );
		$stmt->bindValue ( 1, $id );
		$stmt->execute ();
		header ( 'location:index.php?b=users&c=listUser' );
	}
}




