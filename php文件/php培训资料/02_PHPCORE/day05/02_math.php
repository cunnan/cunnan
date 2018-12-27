<?php
header('Content-Type:text/html;charset=utf-8');
echo  floor(5.9);//5
echo '<br/>';
echo ceil(9.1); //10
echo '<br/>';
echo  round(4.78);//5
echo '<br/>';
echo  round(4.789,2);//4.79
echo '<br/>';
//4. max:最大值
echo max(6,1,8,18,22,5);
echo '<br/>';
//5. min:最小值
echo min(6,1,8,18,22,5);
echo '<br/>';
//6. abs:绝对值
echo abs(-28);
echo '<br/>';
//7. sqrt:开平方
echo sqrt(4); //2
echo '<br/>';
//8. pow:求次幂
echo pow(2,3); //8
echo '<hr/>';
// 9. rand:获得随机整数
//  10 mt_rand:获得更好的随机整数
echo rand();
echo '<br/>';
echo mt_rand();
echo '<br/>';
// 获得  随机 1-10的整数
echo rand(1,10);
echo '<br/>';
echo mt_rand(1,10);
echo '<br/>';
// 获得  随机四位整数
echo mt_rand(1000,9999);
echo '<br/>';
echo mt_rand(0,9).mt_rand(0,9)
    .mt_rand(0,9).mt_rand(0,9);






























