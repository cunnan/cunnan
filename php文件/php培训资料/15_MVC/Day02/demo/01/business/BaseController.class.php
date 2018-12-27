<?php
abstract class BaseController{
	protected $_view;
	function __construct(){
		$this->_view = new Smarty();
		$this->_initalize();
	}
	protected function _initalize(){
		
	}
}