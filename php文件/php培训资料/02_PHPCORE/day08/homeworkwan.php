<?php 
  $arr= array(
  	 0=> array('url'=>'pic1.png','title'=>'发现重庆美食','content'=>'介绍重庆美食，为大家精心推荐美食'),	
  	 1=> array('url'=>'pic2.jpg','title'=>'发现天津美食','content'=>'介绍天津美食，为大家精心推荐美食'),
  	 2=> array('url'=>'pic3.png','title'=>'发现北京美食','content'=>'介绍北京美食，为大家精心推荐美食'),
  	 3=> array('url'=>'pic4.png','title'=>'发现上海美食','content'=>'介绍上海美食，为大家精心推荐美食')
  		
  );
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
    <link rel="stylesheet" href="css/reset.css"/>
    <style>
       .wrap{
	      width:200px;
       	  margin:50px auto 0;
       }
       .wrap img{
	      width:56px;
       }
       .wrap h2{
	      font:14px/24px 微软雅黑;
       	  padding:0 0 6px 0;
       }
       .pic-txt{
	     width:200px;
       	 border-bottom:1px dotted #ccc;
       	 padding:8px 0;
       }
       .pic-txt div{
	      float:left;
       	  margin-right:10px;
       }
       
       .pic-txt h3{
	      font:12px/24px 微软雅黑;
       	  
       }
       .pic-txt p{
	      line-height:18px;
       } */
       .wrap .pic-txt:last-child{
	      border:0;
       }
    </style>
  </head>
  <body>
      <div class="wrap">
         <h2><a href="#">热门订阅</a></h2>
         <?php 
           foreach($arr as $v){
         ?>
         <div class="pic-txt">
            <div>
               <a href="#">
                  <img src="images/<?php echo $v['url']?>" alt="#"/>
               </a>
            </div>
            <h3><a href="#"><?php echo $v['title']?></a></h3>
            <p><?php echo $v['content']?>，...</p>
         </div>
        <?php 
          }
        ?> 
      </div>
  </body>
</html>