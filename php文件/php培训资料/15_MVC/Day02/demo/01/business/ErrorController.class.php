<?php
require_once 'BaseController.class.php';
class ErrorController extends BaseController{
	function index(){
		echo '亲,您访问的页面不存在';
	}
}