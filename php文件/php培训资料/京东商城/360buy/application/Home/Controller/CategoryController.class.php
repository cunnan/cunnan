<?php
	namespace Home\Controller;
	use Think\Controller;
	
	class CategoryController extends Controller
	{
		public function index()
		{
			$id = $_GET["id"];
			
			$this->assign("pageName","category{$id}");
			$this->display();
		}
	}
?>