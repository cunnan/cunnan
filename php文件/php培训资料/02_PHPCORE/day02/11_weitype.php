<?php
header('Content-Type:text/html;charset=utf-8');
/*例如: pow:求次幂 
    number pow ( number $base , number $exp )
 */
echo pow(2,3); //8
echo '<br/>';
echo pow(2.5,3);// 15.625

echo '<hr/>';
//  gettype(mixed $var)
$float =14.78;
$bool = true;
$str = 'ok';
echo gettype($float);
echo '<br/>';
echo gettype($bool);
echo '<br/>';
echo gettype($str);
echo '<br/>';














