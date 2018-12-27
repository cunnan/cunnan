<?php
require_once 'BaseController.class.php';
class IndexController  extends  BaseController{	
	function index() {
		$this->_view->display('templates/default.html');
	}
}
