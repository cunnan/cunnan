<?php
header('Content-Type:text/html;charset=utf-8');
$str ='
    <ul>
	   <li>one</li>
	   <li>two</li>
	   <li>three</li>
    </ul>
	  ';
echo $str;
echo '<hr/>';
// 用HereDOC实现
$var ='hello';
$link =<<<UL
   <ul>
	   <li>one</li>
	   <li>two</li>
	   <li>three</li>
	   <li>$var</li>
	   <li>fi\\ve</li>		
   </ul>
UL;
echo $link;
// 用NowDOC实现
$var ='hello';
$link =<<<'UL'
   <ul>
	   <li>one</li>
	   <li>two</li>
	   <li>three</li>
	   <li>$var</li>
	   <li>fi\\ve</li>
   </ul>
UL;
echo $link;







