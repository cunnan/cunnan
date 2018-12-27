<?php
header('Content-Type:text/html;charset=utf-8');
$a = 12;
echo $a + 9; //21
echo '<br/>';
echo $a + '9'; //21
echo '<br/>';
echo $a + '9abc';//21
echo '<br/>';
echo $a + 'abc9';//12