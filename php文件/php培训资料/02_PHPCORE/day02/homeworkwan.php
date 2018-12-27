<?php
header('Content-Type:text/html;charset=utf-8');
$a = 12;
$b = 19;
$B = 30;
$b = 11;
$c = $a + $b;//23
echo $a,$b,$c;//12,11,23
echo '<hr/>';

$product = '灯泡';
$price = 27.35;
$useYear = 3;
$enery = true;
$useYear = 7;
echo $product,'<br/>',$price,'<br/>',$useYear,'<br/>',$enery;
echo '<br/>';
var_dump($product,$price,$useYear,$enery);

echo '<hr/>';
$a = 12.5;
$b = &$a;
$b = 22;
$c = $a +$b;
echo $c;//44























