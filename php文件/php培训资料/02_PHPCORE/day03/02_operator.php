<?php
header('Content-Type:text/html;charset=utf-8');
echo -12;
echo '<br/>';
echo +12;
echo '<br/>';
echo 8 + 3;
echo '<br/>';
echo 8 -3;
echo '<br/>';
echo 8 * '3ab';
echo '<br/>';
echo 8 /3;
echo '<hr/>';
// % 求余数     被除数%除数 = 余数
echo  11 % 3;  // 2
echo '<br/>';
echo  33 % 50; // 33
echo '<br/>';
// (a)求余数,求的是整数余数,操作数向下取整 
echo  8.6 % 3.5; // 8%3 =2
echo '<br/>';
// (b)求余数符号与被除数一致
echo  -8.6%3.5;  // -2
echo '<br/>';
echo  -8.6%-3.5;  //-2
echo '<br/>';
echo  8.6%-3.5;  //2
echo '<br/>';
// (c)求浮点数余数 fmod函数
echo  fmod(8.6,3.5);//1.6

echo '<hr/>';
echo 13 % 3;//1
echo '<br/>';
echo 55 % 60;//55
echo '<br/>';
echo 9.9 % 4.9; // 9%4 =1
echo '<br/>';
echo -9.9 % 4.9; // -1
echo '<br/>';
echo -9.9 % -4.9; //-1
echo '<br/>';
echo 9.9 % -4.9; //1
echo '<br/>';





























