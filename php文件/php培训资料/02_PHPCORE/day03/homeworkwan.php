<?php
header('Content-Type:text/html;charset=utf-8');
$test12 ='hello';
// 要求用 双引号输出 结果为 : hello12345的结果
echo "{$test12}12345";
echo '<br/>';
// 单引号双引号冲突使用 转义字符
echo "<h3 align=\"center\">标题字</h3>";
echo '<br/>';
// 数据类型转换
echo 3.7 + 'true' + false +'2null';
   // 3.7 + 0 +0 + 2 = 5.7
echo '<br/>';
echo 3.7 + 'e2' + '-1.2.3.4.5' + '1e3ok';
  // 3.7 +0 -1.2 +1000 =1002.5
echo '<br/>';
echo 'A',true,'true','B';//A1trueB
echo '<br/>';
echo 'A','9ab',9,'B'; //A9ab9B 
echo '<br/>';
if('e3'){  //条件 true 
       echo 'ok';
}else{
       echo 'error';
}
echo '<br/>';
if('false'){ // -->条件 true
	    echo 'ok';
}else{
        echo 'error';
}
echo '<hr/>';
// (3)查手册 
// strlen ： 获取字符串长度   int strlen ( string $string )
$str ='abcdefg';
echo strlen($str);
echo '<br/>';
// is_int |is_integer|is_long
// 检测变量是否是整数  
//bool is_int ( mixed $var ) 成功返回true，失败返回false
$float = 15.78;
$int = 8;
var_dump(is_int($float));
echo '<br/>';
var_dump(is_int($int));








 






















