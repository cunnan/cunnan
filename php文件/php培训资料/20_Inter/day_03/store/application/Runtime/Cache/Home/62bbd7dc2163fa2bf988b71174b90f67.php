<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>我的购物车</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/store/public/css/store.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/store/library/jquery/jquery-3.1.1.js"></script>
    <script type="text/javascript">
      //删除单个商品
      function delBook(carId){
    	  window.location = "/store/index.php/Act/delete/carId/"+carId;
      }
      //清空购物车
      function clearCar(){
    	  if(confirm("是否清空购物车？")){
    		  window.location = "/store/index.php/Act/clear";
    	  }
      }
      //通过ajax修改产品的数量
      function changeCount(carId,bookCount){
    	  $.ajax({
    		  "type":"post",
    		  "url":"/store/index.php/Act/change",
    		  "data":"carId="+carId+"&bookCount="+bookCount,
    		  "dataType":"json",
    		  "success":function(re){
    			  //将两个总价，放到页面中的指定位置
    			  $("#totalSpan").html(re.totalPrice);
    			  $("#td"+carId).html(re.price);
    		  }
    	  });
      }
    </script>
  </head>
  <body>
    <center><h2>我的购物车</h2></center>
    <br>
    <table border="1" align="center" width="600">
      <tr>
        <td>编号</td>
        <td>名称</td>
        <td>单价</td>
        <td>数量</td>
        <td>该商品总价</td>
        <td>操作</td>
      </tr>
      <?php if($carInfo == NULL): ?><tr>
        <td colspan="6" align="center" height="50">
          <i>购物车中暂时没有可以查看的商品</i>
        </td>
      </tr>
      <?php else: ?>
      <?php if(is_array($carInfo)): $i = 0; $__LIST__ = $carInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
        <td><?php echo ($v["bookId"]); ?></td>
        <td><?php echo ($v["bookName"]); ?></td>
        <td><?php echo ($v["price"]); ?></td>
        <td><input type="text" size="10" value="<?php echo ($v["bookCount"]); ?>" onblur="changeCount(<?php echo ($v["carId"]); ?>,this.value)"></td>
        <td id="td<?php echo ($v["carId"]); ?>"><?php echo ($v["price"] * $v["bookCount"]); ?></td>
        <td><input type="button" value="删除" onclick="delBook(<?php echo ($v["carId"]); ?>)"></td>
      </tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
      <tr>
        <td colspan="6" align="left">
          <a href="/store/index.php/Index/index">继续购物</a>
          &nbsp;&nbsp;&nbsp;所有商品总价：<span id="totalSpan"><?php echo (gettotalprice($carInfo)); ?></span>￥
          &nbsp;&nbsp;&nbsp;
          <a href="javascript:clearCar()">清空购物车</a>
          &nbsp;&nbsp;&nbsp;
          <a href="/store/index.php/Order/index">订单结算</a>
        </td>
      </tr>
    </table>
  </body>
</html>