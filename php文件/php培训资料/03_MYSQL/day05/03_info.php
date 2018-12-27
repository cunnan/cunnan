<?php 
   date_default_timezone_set('PRC');
   // 查询  cms_news 中的数据  现在到表格值
   //1. 连接MySQL
   $link=mysql_connect('localhost','root','root');
   //2. 打开 数据库 cms
   mysql_select_db('cms');
   //3.SQL 语句 查询语句
   $sql ="select id,title,addtime from cms_news";
   //4.执行SQL 语句  结果集
   $rs =mysql_query($sql);
   //5.通过循环将结果集一行一行转为二维数组
   while($row= mysql_fetch_assoc($rs)){
   	  $arr[] = $row;
   }
   //6. 释放结果集
   if($rs){
   	  mysql_free_result($rs);
   }
   //7.关闭数据库
   mysql_close($link);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
     <table border="1" align="center">
        <tr><th>编号</th><th>标题</th><th>发布时间</th></tr>
        <?php 
          foreach($arr as $v){
        ?>
        <tr>
           <td><?php echo $v['id']?></td>
           <td><?php echo $v['title']?></td>
           <td><?php echo date('Y-m-d H:i:s',$v['addtime'])?></td>
        </tr>
        <?php  	
          }
        ?>
     </table>
  </body>
</html>







