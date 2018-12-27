<?php
header('Content-Type:text/html;charset=utf-8');
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
 * @param
 * @return  mixed
 *  成功 array 返回重命名后的文件名称的数组
 *  失败 false
 */
function uploadFile(){
	$arr = getNewArr();//索引+关联的新数组
	foreach($arr as $v){
		if($v['error']==0){
			$filename = $v['name'];
			$ext = exTension($filename);
			$filename = uuid().'.'.$ext;
			//存一个新的重名名后的数组
			$v['name']=$filename;
			$uploadArr[]=$v;
			move_uploaded_file($v['tmp_name'],'upload/'.$filename);
		}else{
			return false;
		}
	}
	return $uploadArr;
}



