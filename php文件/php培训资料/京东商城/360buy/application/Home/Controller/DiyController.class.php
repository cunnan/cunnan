<?php
	namespace Home\Controller;
	use Think\Controller;
	
	class DiyController extends Controller
	{
		public function index()
		{
			$this->assign("pageName","Diy");
			$this->display();
		}
		public function diy()
		{
			$this->display();
		}
	}
?>