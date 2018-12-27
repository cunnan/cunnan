<?php 
//mysql 函数库的封装
/*
 * 增 删 改 查
 */
class DB{
	public $server; //数据库的服务器名称
	public $username; //用户名
	public $password; //密码
	public $dbname; //数据库名称
	public $result; //mysql_query 查询的资源
	
	//定义构造方法
	function __construct($server,$username,$password,$dbname){
		$this->server = $server;
		$this->username = $username;
		$this->password = $password;
		$this->dbname = $dbname;
		//连接数据库
		$this->connect();
		//选择默认数据库
		$this->selectDB();		
	}
	
	//连接数据库
	function connect(){
		mysql_connect($this->server,$this->username,$this->password);
	}
	
	//选择默认数据库
	function selectDB(){		
		mysql_select_db($this->dbname);
	}
	
	//增
	function insert($tbname,$data){
		//$data = array("aname"=>"john06","pwd"=>"123");
		//对data进行拆分，分别获取字段（键名称）部分 值部分
		//从data中获取所有的键名称 
		$fields_array = array_keys($data); 
		//$fields_array = array("aname","pwd");
		//将$fields_array 转换成字符串
		$fields = implode(",",$fields_array);
		//获取$values
		$values = implode("','",$data);
		
		$query = "insert $tbname
				  ($fields)
				   value
				  ('".$values."')";
		$result = mysql_query($query);
		return $result;
	}	
	
	//delete
	//$tbname = "cms_admin"
	//$where = "id=4"
	function delete($tbname,$where=""){
		$query = "delete from $tbname";
		//$query = "delete from cms_admin"
		//添加where关键词与否，由$where参数是否为空决定
		if($where!=""){
			$query .= " where ".$where;
			//$query =  "delete from cms_admin where id=4"
		}
		//echo $query;exit;
		$result = mysql_query($query);
		return $result;
	}
	
	//改
	//$data = array("aname"=>"john10","pwd"=>"555");
	//$set = aname='john10',pwd='555' 
	function update($tbname,$data,$where="") {
		$sets = "";
		foreach($data as $key=>$value){
			//第一次循环不添加","
			if($sets!=""){
				$sets.=",";
			}
			$sets.= $key."='".$value."'";
			//$sets = aname='jo nmhn10'
			//$sets = aname='john10',
			//$sets = aname='john10',pwd='555'
		}
		
		$query = "update $tbname set $sets";
		if($where!=""){
			$query.= " where ".$where;
		}
		echo $query;
		$result = mysql_query($query);
		return $result;
	}
	
	
	//select
	function select($tbname,$fields,$where="",$limit="",$join=""){
		$query = "select $fields from $tbname";
		if($join!=""){
			$query.=$join;
		}
		if($where!=""){			
			$query.= " where ".$where;
		}
		//当limit条件不为空时，添加limit关键词
		if($limit!=""){
			$query.=" limit ".$limit;
		}	
		//echo $query;	
		$this->result = mysql_query($query);
		//拿到资源后 去获取结果						
	}
	
	//将获取结果封装为成员方法
	//思考如果在获取结果时指定获取结果的格式
	function getResult($fetch_style=MYSQL_ASSOC){ //MYSQL_BOTH
		                                     //MYSQL_ASSOC
		                                     //MYSQL_NUM
		//将结果以关联数组格式返回
		$res = array();		
		while($row=mysql_fetch_array($this->result,$fetch_style)){
			$res[] = $row;
		}
		return $res;
		
	}
	
	//获取结果集的行数
	function getNums(){
		return mysql_num_rows($this->result);
	}
	
}
$db = new DB("localhost","root","root","cms");
/*$password = md5("123");
$data = array("aname"=>"john07","pwd"=>$password);
var_dump($db->insert("cms_admin",$data));*/
//var_dump($db->delete("cms_admin","id=4"));
//测试update
//update($tbname,$data,$where)
//$data = array("aname"=>"john10","pwd"=>"555");
/*$data = array("pwd"=>"555");
var_dump($db->update("cms_admin",$data,"id=5"));*/
//select($tbname,$fields,$where="",$limit="")
$db->select("cms_admin","id,aname","id>5",5);
//获取查询的结果
var_dump($db->getResult(MYSQL_BOTH));
//查询结果集的行数
echo "<br/>";
echo $db->getNums();































