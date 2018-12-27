<?php
header('Content-Type:text/html;charset=utf-8');
//其它类型转为布尔类型
/*下面情况转为 false:
        a.布尔值 false
        b.空字符串 false
        c.null 转为false
        d.整数0,浮点数的0.0,字符串'0' "0"转为false
        e.空数组 array() 转为false  */
/* 用双分支条件语句举例 
 * if(条件expr){ //  条件expr--自动转为布尔类型
 *   echo '如果条件expr为真执行的语句组';
 * }else{
 *   echo '如果条件expr为假执行的语句组';
 * }
 *  
 */
// 如果今天是星期一，那么输出 吃包子,否则吃饺子。
$day = 1;
if($day==1){
	echo '吃包子';
}else{
	echo '吃饺子';
}
echo '<hr/>';
if(''){ // 条件自动转为布尔类型
	echo '真';
}else{
	echo '假';
}
echo '<br/>';
if(false){
	echo '真';
}else{
	echo '假';
}
echo '<br/>';
if(null){
	echo '真';
}else{
	echo '假';
}
echo '<br/>';
if(0){
	echo '真';
}else{
	echo '假';
}
echo '<br/>';
if(0.0){
	echo '真';
}else{
	echo '假';
}
echo '<br/>';
if('0'){
	echo '真';
}else{
	echo '假';
}
echo '<br/>';
if(array()){
	echo '真';
}else{
	echo '假';
}
echo '<br/>';
if(000000000000){
	echo '真';
}else{
	echo '假';
}
echo '<br/>';
if(0.00000000000){
	echo '真';
}else{
	echo '假';
}
echo '<br/>';
if('0000'){ // true 
	echo '真';
}else{
	echo '假';
}
echo '<br/>';
if('0.0'){ // true
	echo '真';
}else{
	echo '假';
}

echo '<br/>';
if('5'){
	echo '真';
}else{
	echo '假';
}
echo '<br/>';
if('   '){
	echo '真';
}else{
	echo '假';
}
echo '<br/>';
if(1){
	echo '真';
}else{
	echo '假';
}
echo '<br/>';
if(05){  //  八进制 0-7  05-->true
	echo '真';
}else{
	echo '假';
}
echo '<br/>';
if(08){   // 八进制 0-7  08->0 ->false
	echo '真';
}else{
	echo '假';
}














