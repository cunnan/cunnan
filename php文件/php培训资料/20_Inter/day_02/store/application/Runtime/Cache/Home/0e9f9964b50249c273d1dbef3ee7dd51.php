<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>商城首页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/store/public/css/store.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript">
      function shopBook(bookId)
      {
    	  //获得产品的数量
    	  var bookCount = document.getElementById("txt"+bookId).value;
    	  //跳转到Act页面，进行购买商品
    	  window.location = "/store/index.php/Act/index/bookId/"+bookId+"/bookCount/"+bookCount;
      }
    </script>
  </head>
  <body>
    <center><h2>商城首页</h2></center>
    <br>
    <table border="1" align="center" width="600">
      <tr>
        <td>编号</td>
        <td>名称</td>
        <td>单价</td>
        <td>数量</td>
        <td>操作</td>
      </tr>
      <?php if(is_array($bookInfo)): $i = 0; $__LIST__ = $bookInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
        <td><?php echo ($v["bookId"]); ?></td>
        <td><?php echo ($v["bookName"]); ?></td>
        <td><?php echo ($v["price"]); ?></td>
        <td><input id="txt<?php echo ($v["bookId"]); ?>" type="text" size="10" value="1"></td>
        <td><input type="button" value="放入购物车" onclick="shopBook(<?php echo ($v["bookId"]); ?>)"></td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
  </body>
</html>