<?php
	namespace Home\Controller;
	use Think\Controller;
	
	class BrandController extends Controller
	{
		public function index()
		{
			$this->display();
		}
		//查看单个品牌
		public function brand()
		{
			$this->display();
		}
	}
?>