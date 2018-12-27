<?php
header('Content-Type:text/html;charset=utf-8');
// 设置时区
date_default_timezone_set('Asia/Chongqing');
echo date('Y-m-d H:i:s');
echo '<br/>';
// 获得时区
echo date_default_timezone_get();
echo '<br/>';
// time：返回当前的 Unix 时间戳
echo time();
echo '<hr/>';
// 获得当前的系统时间
echo date('Y年m月d日H小时i分钟s秒',time());
echo '<br/>';
// 获得 3天后的现在
echo date('Y-m-d H:i:s',time() + 60*60*24*3);
echo '<br/>';
// (5) strtotime：将任何英文文本的日期时间描述解析为 Unix 时间戳
echo date('Y-m-d H:i:s',strtotime('+3days'));
echo '<br/>';
// 获得 3年 7个月 15天 35分钟后的现在
/*       Y: 4位的年(year)
         m: 2位的月(month)
         d: 2位的日(day)
         H: 2位的小时(hours)
         i: 2位的分钟(minutes)
         s: 2位的秒(seconds)
 * 
 */
echo date('Y-m-d H:i:s',strtotime('+3years +7months +15days +35minutes'));









