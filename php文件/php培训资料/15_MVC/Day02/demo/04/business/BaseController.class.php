<?php
abstract class BaseController{
	protected $_view;
	protected $_path;
	protected $_params;
	function __construct(){
		$this->_view = new Smarty();
		$this->_initalize();
		$this->_path = $this->_getPath();
		$this->_params = $this->_getParams();		
		$this->_view->assign('path',$this->_path);		
	}
	protected function _getParams(){
		$pathinfo = substr($_SERVER['PATH_INFO'],1);
		$array = explode('/',$pathinfo);		
		for ($i=0;$i<count($array);$i+=2){
			$pathinfoArray[$array[$i]] = $array[$i+1];
		}
		return $pathinfoArray;		
	}
	protected function _getPath(){
		$path = dirname(dirname(str_replace('\\','/',substr(__FILE__,strlen($_SERVER['DOCUMENT_ROOT'])))));
		return $path;		
	}
	protected function _initalize(){
		
	}
}