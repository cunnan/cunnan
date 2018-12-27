<?php

function getUrl(){
	//获取url地址，包括文件名称和参数两部分
	$url = $_SERVER["REQUEST_URI"];
	//parse_url 将url地址拆分成数组
	$parse_array = parse_url($url);
	/*
	 * 其中下标为path的文件名称部分
	 * query 参数
	 */
	/*
	 * 对于$parse_array是否有下标query进行区分
	 * 若有下标，若没有下标则只需要$parse_array["path"]?
	 */
	$query = isset($parse_array["query"])?$parse_array["query"]:"";
	if($query!=""){
		//给了分页地址，有参数
		echo $query;
	}else{
	    //给了分页地址，没有参数
		$result_url = $parse_array["path"]."?";
	}
	return $result_url;
}
echo getUrl();
?>









