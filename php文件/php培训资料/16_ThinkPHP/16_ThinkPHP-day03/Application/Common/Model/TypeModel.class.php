<?php
namespace Common\Model;
use Think\Model;
class TypeModel extends Model{
	function showOption(){
		//拼接option
		$optionHtml="";
		//查询第一级分类  select * from type where fid=0 and state<9
		$arr=$this->where("fid=0 and state<9")
			 	  ->select();
		foreach($arr as $v){
			$optionHtml.="<optgroup label='{$v['tname']}'>";
			//查询当前分类的子类
			$arrSon=$this->where("fid={$v['id']} and state<9")->select();
			foreach($arrSon as $sv){
				$optionHtml.="<option value='{$sv['id']}'>{$sv['tname']}</option>";
			}
			$optionHtml.="</optgroup>";
		}
		return $optionHtml;
	}
}