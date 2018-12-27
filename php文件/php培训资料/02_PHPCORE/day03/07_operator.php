<?php
header('Content-Type:text/html;charset=utf-8');
/*PHP是弱类型语言,变量会根据程序运行环境
    自动换行，例如 0,0.0,'0'自动转为布尔值
  false,为了避免自动转换产出的错误，需要
    用===全等于 和  !==不全等于解决
  (将0和false区分开,严格比较)  
 */
/* strpos :查找字符串首次出现的编号位置,编号从0
 * 格式:mixed strpos ( string $haystack ,
 *      mixed $needle [, int $offset = 0 ] )
        成功返回编号位置(int),失败返回false  
 */
$var = 'abcdefg';
echo strpos($var,'c');//2
echo '<br/>';
echo strpos($var,'a');//0
echo '<br/>';
echo strpos($var,'w');//false
echo '<br/>';

/* $str ='helloworld'; 
 * 判断  $str 字符串中是否有 字母h
 * 如果有字母h那输出 ok
 * 否则输出  error
 */
$str ='helloworld';
if(strpos($str,'h')!==false){//产生错误--> 编号0 自动转为false
	             // 将0和false区分开,严格比较
	             // 0!==  false  -->true
	             // 5!== false   -->true
	             // false!==false -->false
	echo 'ok';
}else{
	echo 'error';
}
echo '<br/>';
if(strpos($str,'h')===false){//产生错误--> 编号0 自动转为false
	      // 将0和false区分开,严格比较
	      // 0===  false  -->false
	      // 5=== false   -->false
	      // false===false -->true
	echo 'error';
}else{
	echo 'ok';
}


























