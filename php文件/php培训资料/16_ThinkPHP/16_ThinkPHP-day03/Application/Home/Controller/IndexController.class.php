<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){    
		$this->display();
    }
    public function test(){    	
    	$this->display();
    }
    public function lists(){    	  
    	$rowset = array(
    		array('id'=>1,'username'=>'张三','sex'=>0,'regTime'=>1487838431),
    		array('id'=>2,'username'=>'李四','sex'=>0,'regTime'=>1487838432),
    		array('id'=>3,'username'=>'王五','sex'=>1,'regTime'=>1487838433),
    		array('id'=>4,'username'=>'赵六','sex'=>1,'regTime'=>1487838434),
    		array('id'=>5,'username'=>'孙七','sex'=>1,'regTime'=>1487838435),
    	);
    	$this->assign('username','Tom');
    	$this->assign('rowset',$rowset); //一会现研究一下它的原理
    	
    	$this->display();
    }
	public function doTest(){
		$username = $_POST['username'];
		$password = $_POST['password'];		
		echo '用户名:' , $username , '--密码' , $password;		
	}
	public function edit(){			
		$id = $_GET['id'];		
		echo '你现在要编辑的用户是' , $id;
	}    
}





