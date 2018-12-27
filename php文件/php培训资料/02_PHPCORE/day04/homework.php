<?php
header('Content-Type:text/html;charset=utf-8');
/* 1.条件分支语句,控制输出 
 *   要求:
 *     静态页面: reg.html
 *      表单元素
 *         用户名
 *         密码
 *         确认密码
 *         邮箱
 *     动态页面:reg.php
 *      (1)接受表单元素的信息
 *      (2)判断用户名合法性
 *           a.用户名长度不能为空
 *           b.用户名长度在 3-10之间
 *      (3)密码合法性
 *      (4)邮箱合法性
 *           a.邮箱长度不能为空
 *           b.邮箱必须存在@
 *  
 *  2. switch  
 *  $var = true;
 *  switch($var){
 *    case 0:
 *       echo 0;
 *       break;
 *    case 1:
 *       echo 1;
 *    case 2:
 *       echo 2;
      default:
         echo 3;
         break;
      case 4:
         echo 4;
 *  }
 *  
 *  
 *  
 *  
 *  
 *  
 *  
 */