<?php 
class Page{
	//定有成员属性
	public $total; //用于保存总记录数
	public $pageSize; //用于保存总记录数
	public $totalPage; //定义总页数
	public $curPage;   //定义当前页
	public $url; //用来拼接的地址
	function getStart(){
		return ($this->curPage-1)*$this->pageSize;
	}
	//定义构造方法，给成员属性赋初值
	function __construct($total,$pageSize){
		$this->total = $total;
		$this->pageSize = $pageSize;
		//在类实例化时 计算总页数
		$this->totalPage = $this->getTotalPage();
		//获取当前页
		$this->curPage = $this->getCurPage();
		//获取当前网页请求的部分url地址
		$this->url = $this->getUrl();
	}
	//呈现分页效果
	function pages(){
		echo "共".$this->totalPage."页&nbsp;当前第".$this->curPage."页".
		     "&nbsp;".$this->flist().$this->mlist().$this->llist();
	}
	
	function getUrl(){
		//获取访问的地址
		$url = $_SERVER["REQUEST_URI"];
		
		//将访问的地址和参数进行拆分
		$parse_array = parse_url($url);
		//有没有参数
		$query = isset($parse_array["query"])?$parse_array["query"]:"";
		if($query!=""){
			//有参数
			//对参数部分进行判断，去掉p			
			//keyword=1&p=2
			parse_str($query,$query_array);
			//$query_array = array("keyword"=>1);
			unset($query_array["p"]);
			//去除掉url地址中的p参数，完成地址的拼接
			//根据是否有参数部分，确定地址最后的连接符号
			if(empty($query_array)){
				$result_url = $parse_array["path"]."?";
			}else{
				//echo http_build_query($query_array);exit;
				$result_url = $parse_array["path"]."?".http_build_query($query_array)."&"; 
			}	
		}else{
			$result_url = $parse_array["path"]."?";
		}
		return $result_url;
		
	}
	
	//共*页
	private function getTotalPage(){
		//总页数 = ceil(总记录数/每页显示记录数)
		$totalPage = ceil($this->total/$this->pageSize);
		return $totalPage;	
	}
	
	//获取当前页
	private function getCurPage(){
		//当用户写地址没有给p参数时，报错		
		$curPage = isset($_GET["p"])?$_GET["p"]:1;
		//限制当前页的取值范围
		//要求当前页最小为1 最大为总页数
		if($curPage<1){
			$curPage = 1;
		}else if($curPage>$this->totalPage&&$this->totalPage!=0){
			$curPage = $this->totalPage;
		}
		return $curPage;
	}
	
	//首页 上一页
	private function flist(){
		//上一页 = 当前页-1
		$prev = $this->curPage-1;	//0
		$lists = "";
		if($prev>0){		
			$lists = "<a href='".$this->url."p=1'>首页</a>&nbsp;
					 <a href='".$this->url."p=".$prev."'>上一页</a>";
		}
		return $lists;
	}
	
	//1 2 3 4 5 6 7
	private function mlist(){
		$num = 3;
		$lists = "";
		//1 2 3 
		for($i=$num;$i>=1;$i--){
			$n = $this->curPage - $i;
			if($n>=1){
				$lists.="&nbsp;<a href='".$this->url."p=".$n."'>$n</a>&nbsp;";
			}
		}
		//4
		$lists.="<span>".$this->curPage."</span>";
		
		// 5 6 7
		for($i=1;$i<=$num;$i++){
		    $n = $this->curPage+$i;
		    if($n<=$this->totalPage){
		    	$lists .="&nbsp;<a href='".$this->url."p=".$n."'>$n</a>&nbsp;";
		    }	
		} 
		return $lists;		 
	}
	
	
	private function llist(){
		//下一页 = 当前页+1
		$next = $this->curPage+1;
		/*
		 * $next = 9+1 = 10
		 * $next = 10+1 = 11
		 */
		$lists = "";
		if($next<=$this->totalPage){//10<11 11<11
		
			$lists = "<a href='".$this->url."p=".$next."'>下一页</a>&nbsp; 
				  <a href='".$this->url."p=".$this->totalPage."'>尾页</a>";
		}
		return $lists;
	}
	
}





















