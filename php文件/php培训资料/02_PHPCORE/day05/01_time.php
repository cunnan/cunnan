<?php
header('Content-Type:text/html;charset=utf-8');
date_default_timezone_set('PRC');
//  strtotime()
// 输出 1年 5个月 12天前的现在
$timestamp = strtotime('-1year -5months -12days');
echo date('Y-m-d H:i:s',$timestamp);
echo '<br/>';
// 将来时间  2017-1-27
echo date('Y-m-d H:i:s',strtotime('2017-1-27'));

echo '<br/>';
echo date('Y-m-d H:i:s',strtotime('2017-1-37'));
echo '<br/>';
// mktime()
// 参数    小时  分钟 秒  月 日 年
echo date('Y-m-d H:i:s',mktime(0,0,0,1,37,2017));
echo '<br/>';
// 实现下一个月
$timestamp =mktime(0,0,0,date('m')+1,date('d'),date('Y'));
echo date('Y-m-d H:i:s',$timestamp);
echo '<br/>';
echo microtime();
echo '<br/>';
echo microtime(true);












