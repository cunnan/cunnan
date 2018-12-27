<?php
header('Content-Type:text/html;charset=utf-8');
/* 1. ++(自增,递增) --(自减,递减)运算符
 * $a = '7z';
 * $b = null;
 * $c = true;
 * $d = 6;
 * $a++;
 * $b++;
 * $c++;
 * $b--;
 * $c--;
 * $d = $a +$c +$b++;
 * $b++; 
 * echo $a,$b,$c,$d;
 * 
 * 2.用 .=  输出字符串（赋值给变量$link 整体输出）
 *  $a = 'apple';
 *  $b = 'red';
 *  $c = 'fruits';
 *  输出  形容 
 *   <dl>
 *      <dt>$a</dt>
 *      <dd>$b</dd>
 *      <dd>$c</dd>
 *   </dl> 
 * 3.比较运算符
 * var_dump(
 *   'good' >'gooc',
 *   '123' >'5true',
 *   'true'>'2e3'
 * );
 * var_dump(
 *   false >='null',
 *   false >='1abc',
 *   false >=''
 * );
 * var_dump(
 *   '5false' >= 5,
 *   'true2' >= 1e2,
 *   '-1e2' >= 10
 * );
 * 4. 短路问题
 * $a = 1;
 * $b = 2;
 * if($a || $b++){
 *   $a++;
 *   $b++;
 * }
 * echo $a,$b;
 * echo '<br/>';
 * $a = 0;
 * $b = 2;
 * if($a || $b++){
 *   $a++;
 *   $b++;
 * }
 * echo $a,$b; 
 */






