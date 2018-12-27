<?php
class IndexController {	
	protected $_view;
	function __construct(){
		$this->_view=new Smarty();
	}
	function init() {
		$this->_view->display('templates/default.html');
	}
}
