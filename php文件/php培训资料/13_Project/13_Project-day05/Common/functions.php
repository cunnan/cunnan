<?php
//实现的提示跳转
function jump($message,$toUrl){
$content=<<<EOF
<script type="text/javascript">
alert("{$message}");
location.href="{$toUrl}";
</script>
EOF;
echo $content;
}
/*单文件和多文件(以数组命名和单独命名)上传的信息转为索引+关联的新二维数组
 @param
@return array
*/



function getNewArr(){
	foreach($_FILES as $val){
		if(is_string($val['name'])){
			//单文件或单独命名多文件 关联+关联二维数组的操作
			//$val 一维数组
			$newarr[] = $val;
		}else{
			//数组命名多文件 三维数组的操作
			//$val 二维数组
			foreach($val['name'] as $k=>$v){
				$newarr[$k]['name']=$v;
				$newarr[$k]['type']=$val['type'][$k];
				$newarr[$k]['tmp_name']=$val['tmp_name'][$k];
				$newarr[$k]['error']=$val['error'][$k];
				$newarr[$k]['size']=$val['size'][$k];
			}
		}
	}
	return $newarr;
}
/*单文件和多文件实现上传函数
 * 要求:1.限制文件类型(jpg,gif,png)
*     2.判断是否存在文件夹，如果不存在创建文件夹
* @param  array  $arrType = array('jpg','jpeg','gif','png') 可选参数
* @param  string $path='./' 默认值同级
*         mkdir 创建目录, file_exists:判断文件或目录是否存在
* @return  mixed
*  成功 array 返回重命名后的文件名称的数组
*  失败 false
*/

function uploadFile($path='./',$arrType=array('jpg','jpeg','gif','png')){
	if(!file_exists($path)){//不存在创建目录
		mkdir($path);
	}
	$arr = getNewArr();//索引+关联的新数组
	foreach($arr as $v){
		if($v['error']==0){
			$filename = $v['name'];
			$ext = exTension($filename);
			// 判断 $ext后缀 是否是数组 $arrType中的值
			if(in_array($ext,$arrType)){
				$filename = uuid().'.'.$ext;
				//存一个新的重名名后的数组
				$v['name']=$filename;
				$uploadArr[]=$v;
				move_uploaded_file($v['tmp_name'],$path.'/'.$filename);
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	return $uploadArr;
}
/*获得文件扩展名
 * @param  string $n
* @return string
*/
function exTension($n){
	return substr($n,strrpos($n,'.')+1);
}
/* 获得唯一标识
 * @param
* @return string
*/
function uuid(){
	return md5(microtime(true).mt_rand(1000,9999));
}