<?php 
header("content-type:text/html;charset=utf-8");
session_start();

//获得session中的产品信息
$productList = $_SESSION["car"];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>我的购物车</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
  </head>
  <body>
    <center><h2>我的购物车</h2></center>
    <br><br>
    <table border="1" align="center" width="600">
      <tr>
        <td>编号</td>
        <td>名称</td>
        <td>单价</td>
        <td>数量</td>
        <td>操作</td>
      </tr>
<?php 
	foreach ($productList as $v)
	{
		echo "<tr>";
		echo "  <td>{$v["bookId"]}</td>";
		echo "  <td>{$v["bookName"]}</td>";
		echo "  <td>{$v["price"]}</td>";
		echo "  <td>{$v["bookCount"]}</td>";
		echo "  <td><input type='button' value='删除'></td>";
		echo "</tr>";
	}
?>
      <tr>
        <td colspan="5">
          <a href="index.php">继续购物</a>
        </td>
      </tr>
    </table>
  </body>
</html>








