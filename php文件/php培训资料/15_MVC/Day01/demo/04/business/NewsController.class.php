<?php
// 这个页面存储与新闻相关的业务逻辑
class NewsController {
	protected $_view;
	function __construct(){
		$this->_view=new Smarty();
	}
	function addNews() {
		$this->_view->display('templates/addNews.html');	
	}
	function listNews() {
		echo '所有新闻如下<br>';
		$this->_view->display('templates/c.html');
	}
	function modifyNews() {
		$this->_view->display('templates/b.html');
	}
}




