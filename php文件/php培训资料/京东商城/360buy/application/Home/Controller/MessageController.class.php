<?php
	namespace Home\Controller;
	use Think\Controller;
	
	class MessageController extends Controller
	{
		public function index()
		{
			$this->assign("pageName","Message");
			
			$this->display();
		}
	}
?>