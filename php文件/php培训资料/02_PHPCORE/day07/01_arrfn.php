<?php
header('Content-Type:text/html;charset=utf-8');
$str = 'a|b|c|d';
$newarr = explode('|',$str);
echo '<pre>';
print_r($newarr);
echo '</pre>';
echo '<br/>';
$str = 'a|b|c|d';
$newarr = explode('|',$str,2);
echo '<pre>';
print_r($newarr);
echo '</pre>';
// 如果 limit 参数是负数，则返回除了最后的 -limit 个元素外的所有元素。
echo '<br/>';
$str = 'a|b|c|d';
$newarr = explode('|',$str,-2);
echo '<pre>';
print_r($newarr);
echo '</pre>';
echo '<br/>';
// 获得文件的扩展名(后缀)
$var = '45abc.jpg.html.png.gif';
// 方法一   substr  strrpos
//  $start 用    strrpos($var,'.')+1
echo substr($var,strrpos($var,'.')+1);
echo '<br/>';
// 方法二   explode    end 获得数组中最后一个值
$newarr = explode('.',$var);
echo  end($newarr);

echo '<hr/>';
$arr = array('a','b','c','d','e','f');
echo current($arr); //a
echo '<br/>';
echo  next($arr);//b
echo '<br/>';
echo  next($arr);//c
echo '<br/>';
echo current($arr);//c
echo '<br/>';
echo end($arr);//f
echo '<br/>';
echo prev($arr);//e
echo '<br/>';
echo reset($arr);//a
echo '<hr/>';
/* each: 返回数组中当前的键／值对并将数组
 * 指针向前移动一步 
   array each ( array &$array )
 * 
 */
$arr = array('a','b','c','d','e','f');
echo next($arr);//b
echo '<br/>';
echo next($arr);//c
/* echo '<pre>';
print_r(each($arr));
echo '</pre>'; */
echo '<br/>';
//  next :返回该值,获得下一个值  
//  each ：返回数组,获得当前值然后指针往下移动
echo current(each($arr));// c
echo '<br/>';
echo current(each($arr));// d
echo '<br/>';
// list:把数组中的值赋给一些变量 
$arr = array('one','two','three');
list($a,$b,$c) = $arr;
echo $a,'--',$b,'--',$c.'<br/>';
echo '<hr/>';//方法一
$arr = array(
		'userName'=>'tom',
		'age' =>18,
		'sex' =>'男',
		'salary' =>8888.88
);
foreach($arr as $k=>$v){
	echo $k.'='.$v.'<br/>';
}
//方法二 each  list  实现数组遍历
reset($arr);
while(list($k,$v)=each($arr)){
	echo $k.'='.$v.'<br/>';
}




















































