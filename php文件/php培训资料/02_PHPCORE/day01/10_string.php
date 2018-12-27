<?php
header('Content-Type:text/html;charset=utf-8');
$userName ='tom';
echo '用户名称:',$userName;
echo '<br/>';
echo '用户名称:$userName';
echo '<br/>';
echo "用户名称:$userName";
echo '<hr/>';
/*b.双引号能解析所有转义字符,而单引号只能解析
  \' 和\\两个  */
echo 'this is a te\nst';
echo '<br/>';
echo "this is a te\nst";









