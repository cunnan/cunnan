<?php 
   $arr = array(
   	    array('url'=>'1.jpg','title'=>'卡伊芙','price'=>256.78),
   		array('url'=>'2.jpg','title'=>'名兔','price'=>123.78),
   		array('url'=>'3.jpg','title'=>'阿什兰','price'=>298.00)
   		
   );
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
  </head>
  <body>
      <!-- 
          <ul>
              <li>
                  <img src="images/1.jpg"/>
                  <h3>卡伊芙</h3>
                  <p>￥256.78</p>
              </li>
          
          </ul>
      
       -->
       <ul>
          <?php 
            foreach($arr as $v){//$v一维数组
          ?>  	
          <li>
             <img src="images/<?php echo$v['url']?>"  alt=""/>
             <h3><?php echo $v['title']?></h3>
             <p>￥<?php echo $v['price']?></p>
          </li>
          <?php
            }
          
          ?>
       
       </ul>
       
       
       
  </body>
</html>








