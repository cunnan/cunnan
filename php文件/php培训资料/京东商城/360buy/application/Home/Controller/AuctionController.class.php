<?php
	namespace Home\Controller;
	use Think\Controller;
	
	class AuctionController extends Controller
	{
		public function index()
		{
			$this->assign("pageName","auction");
			$this->display();
		}
		public function view()
		{
			$this->assign("pageName","auction");
			$this->display();
		}
	}
?>