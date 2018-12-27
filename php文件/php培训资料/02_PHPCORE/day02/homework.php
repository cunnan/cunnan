<?php
header('Content-Type:text/html;charset=utf-8');
 /* 1. {}的使用
  *   $test12 ='hello';
  *   要求用 双引号输出 结果为 : hello12345的结果
  * 2. 单引号双引号冲突使用 转义字符
  *   要求:用双引号输出
  *      <h3 align="center">标题字</h3>
  * 3.数据类型转换
  *  (1)  echo 3.7 + 'true' + false +'2null';
  *       echo '<br/>';
  *       echo 3.7 + 'e2' + '-1.2.3.4.5' + '1e3ok';
  *   
  *  (2)
  *     echo 'A',true,'true','B';
  *     echo '<br/>';
  *     echo 'A','9ab',9,'B';
  *  (3)
  *     if('e3'){
  *        echo 'ok';
  *     }else{
  *        echo 'error';
  *     } 
  *     echo '<br/>';
  *     if('false'){
  *        echo 'ok';
  *     }else{
  *        echo 'error';
  *     } 
  *   
  *  (3)查手册 
  *     a. strlen:
  *     
  *     b. 
  *      is_int |is_integer|is_long
  *      is_float |is_double|is_real
  *      is_bool
  *      is_string
  *     
  *     
  *   
  *   
  *   
  *   
  */