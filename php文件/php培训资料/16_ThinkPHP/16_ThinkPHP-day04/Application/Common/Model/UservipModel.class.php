<?php
namespace Common\Model;
use Think\Model;
class UservipModel extends Model{
	protected $tableName="uservip";
	protected $patchValidate = true;
	protected $_validate=array(
			array('username','require','用户名不能为空',1),
			array('username','/^[a-z_][a-z0-9_]{3,19}$/i','用户名格式错误',1,'regex'),
			array('username','','用户名已经被使用',1,'unique'),
			
			array('password','require','密码不能为空',1),
			array('password','/^\S{6,20}$/i','密码格式错误',1,'regex'),
	
			array('repassword','password','两次密码不一致',1,'confirm'),
			
			array('email','email','邮箱格式错误',1),
			array('age','18,40','年龄不在范围内',1,'between'),
			array('phone','/^1[34578]\d{9}$/','电话格式错误',1,'regex')
			
			
			
			
	);
	protected $_auto=array(
			array('password','jiami',3,'function'),
			
			
			
			
			
			
			
			
	);
}
