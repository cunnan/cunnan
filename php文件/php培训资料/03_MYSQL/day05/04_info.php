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
          while($row= mysql_fetch_assoc($rs)){
        ?>
        <tr>
           <td><?php echo $row['id']?></td>
           <td><?php echo $row['title']?></td>
           <td><?php echo date('Y-m-d H:i:s',$row['addtime'])?></td>
        </tr>
        <?php  	
          }
          //6. 释放结果集
          if($rs){
          	mysql_free_result($rs);
          }
          //7.关闭数据库
          mysql_close($link);
        ?>
     </table>
  </body>
</html>







