<?php
header('Content-Type:text/html;charset=utf-8');
/* w3c 规定在浏览器中看到的特殊符号必须
     用HTML实体,PHP代码中也必须用HTML实体  */
/*  
 *  F>A B<D
 *  TOm & Jerry 
 *  he said "I'm fine"
 */
$str ='
		F&gt;A B&lt;D
        TOm &amp; Jerry 
        he said &quot;I&#39;m fine&quot
	  ';
echo $str;
/*在源代码中的特殊符号用转义字符,PHP中
  单引号和双引号冲突时必须用转义字符  */
echo '<a href="#">链接</a>';
echo '<br/>';
echo "<a href=\"#\">链接</a>";
echo '<br/>';
echo '<a href=\'#\'>链接</a>';









