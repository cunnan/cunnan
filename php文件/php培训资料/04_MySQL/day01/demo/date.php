<?php 
/* date(string $format[,int $timestamp])
 * 功能：将时间戳转换成date指定的时间格式输出
 * 参数：
 * format  格式
 * timestamp 时间戳 （1970-01-01 秒）
 * 
 */
/*
 * 改php.ini 
 * date.timezone =PRC
 * 去掉前面的分号。
 * 重启apache
 * 
 */
echo date("Y-m-d",1482733105);











