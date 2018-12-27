<?php
/* php5.3以上
 * __NAMESPACE__:获得命名空间的名称
    命名空间:解决函数或类名称冲突的问题  */
namespace a;
function var_dump(){
	echo 'hello<br/>';
}
var_dump(); // 命名空间下默认访问自定函数
echo '<br/>';
\a\var_dump();// 访问命名空间a下的自定义函数
echo '<br/>';
\var_dump(true); // 系统函数
echo '<br/>';
// __NAMESPACE__:获得命名空间的名称
$fn = __NAMESPACE__.'\var_dump'; //变量函数
$fn(); //调用函数
echo '<br/>';
//  use 命名空间下的类



















 
