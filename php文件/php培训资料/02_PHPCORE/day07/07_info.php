<?php 
   $arr = array(
   	   0=>array('userName'=>'tom','age'=>18,'sex'=>'男','salary'=>8888.88),
	   1=>array('userName'=>'rose','age'=>20,'sex'=>'女','salary'=>9888.88),
	   2=>array('userName'=>'jerry','age'=>22,'sex'=>'男','salary'=>9998.88),
	   3=>array('userName'=>'john','age'=>17,'sex'=>'女','salary'=>7888.88),
   	   4=>array('userName'=>'alice','age'=>19,'sex'=>'女','salary'=>8788.11)
   );
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
      <table border="1">
         <tr>
            <th>姓名</th>
            <th>性别</th>
            <th>年龄</th>
            <th>薪水</th>
         </tr>
         <?php 
            foreach($arr as $v){ //$v 一维数组
               echo '<tr>';
               echo '<td>'.$v['userName'].'</td>';
               echo '<td>'.$v['sex'].'</td>';
               echo '<td>'.$v['age'].'</td>';
               echo '<td>'.$v['salary'].'</td>';
               echo '</tr>';
            }
         ?>
      </table>
  </body>
</html>








