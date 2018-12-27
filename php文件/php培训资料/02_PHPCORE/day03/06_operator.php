<?php
header('Content-Type:text/html;charset=utf-8');
/*> >= < <= ==(等于) != <>(不等于)
 ===全等于 !==不全等于
 ===全等于 :值和类型都相等才为真，否则为假
 !==不全等于:值和类型都相等才为假,否则为真
*/

var_dump(
   'a' >'a', // false
   'a' >='a', // true
   'a' <'a', //false
   'a' <='a', //true
   'a' =='a', // true
   'a' !='a',  //false
   'a' <>'a',  //false
   'a' ==='a',  // true
   'a' !=='a',   // false
   '' ==null,    //true  == 值相等
   '' ===null, // false ===值等类型不等  （ 值和类型都相等才为真）
   '' !==null,  //true
         /*！== 不全等于
          *只有一种为假  值和类型都相等
          *为真情况
          *   值等类型不等
          *   值不等类型等
          *   值不等类型不等 
          */
    ''==false, //true  ==值等
    ''===false,//false ===值等类型不等
    ''!==false,//true
    'a'!=='b', //true
    'a'!== 1  // true		  
);
echo '<hr/>';
/*(a)字符串或null 跟字符串的比较,null转为
           空字符串;数值之间或字母之间按数值和字母按
           位比较;数值跟字母比较按位的ASCII值比较 
 */
var_dump(
  'ok'>'oz', //	k>z false
  '50'>'1e2', // 50>100  false
  '99ok' >'ab',// 9>a  ASCII 57>97 false
  '50'>'100ab', // 按位比较 5>1 ASCII 53>49 true	
  '-60'>'20', // -60>20 false
  '' > null,  // false
  'hello' >'helno' // l>n --> false
);		
echo '<hr/>';
/*(b)布尔类型或null 跟其他类型比较,按布尔值比较
   null 布尔值false, true > false  
 */
var_dump(
  true > '0', //true    true>false
  true > '0.0',//false   true>true
  true > '000', //false  true>true
  true > 'false',//false  true>true
  true > 0.00000,//true   true>false
  true > 'null',// false  true>true
  true > null, // true   true>false
  0==false,  // true   ==值等
  0 === false,//false 将0和false区分开  false === 值等类型不等
  0!==false, //true 将0和false区分开
  5!==false,  //true
  false!==false //false
);		
echo '<hr/>';
//数值或字符串跟数值比较,转为数值类型比较
var_dump(
 35 > 1e2, //false 35>100
 '3.5.7.7' > 3.5, //false   3.5>3.5
 'true9' >1, //false 0>1
 '5ok'  >3   //true    5>3  
);
		
		
		







