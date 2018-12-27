<?php
header('Content-Type:text/html;charset=utf-8');
/*__LINE__:获得当前文件的行号
      __FILE__:获得当前文件所在绝对路径
      __DIR__: 获得当前文件所在目录的绝对路径
      __FUNCTION__:获得当前的函数名称
      __CLASS__:获得当前的类名称
      __METHOD__:获得当前的方法名称
      __NAMESPACE__:获得命名空间的名称
                   命名空间:解决函数或类名称冲突的问题  */


echo  __LINE__;
echo '<br/>';
echo  __FILE__;
echo '<br/>';
echo  __DIR__;
echo '<br/>';
/* 递归阶乘算法 
 * @param int $n
 * @return mixed
 */
function isJie($n){
   $fnName = __FUNCTION__;
   if($n<=1){
   	  return 1;
   }	
   return $n*$fnName($n-1);//效率高
}
echo isJie(5);










