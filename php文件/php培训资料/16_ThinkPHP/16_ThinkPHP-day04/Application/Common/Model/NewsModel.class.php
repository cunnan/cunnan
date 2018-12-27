<?php
namespace Common\Model;
use Think\Model;
class NewsModel extends Model{
	protected $tableName="news";
	protected $_validate=array(
			//array('title','5,25','标题长度应该在5到25个字符之间',0,'length'),
			array('title','email','不符合邮箱格式'),
			
	);
}