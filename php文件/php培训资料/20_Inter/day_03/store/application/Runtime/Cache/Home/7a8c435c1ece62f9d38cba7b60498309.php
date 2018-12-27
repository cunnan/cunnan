<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>订单结算</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/store/public/css/store.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <center><h2>订单结算</h2></center>
    <br>
    <form name="frm" method="post" action="/store/index.php/Order/order">
    <table border="1" align="center">
      <tr>
        <td>订单编号：</td>
        <td><input type="text" name="orderId" size="30" value="<?php echo ($orderId); ?>" readOnly></td>
      </tr>
      <tr>
        <td>订单总价：</td>
        <td><input type="text" name="totalPrice" size="30" value="<?php echo ($totalPrice); ?>" readOnly></td>
      </tr>
      <tr>
        <td>收货人：</td>
        <td><input type="text" name="accpter" size="30"></td>
      </tr>
      <tr>
        <td>联系电话：</td>
        <td><input type="text" name="tel" size="30"></td>
      </tr>
      <tr>
        <td>送货地址：</td>
        <td><input type="text" name="address" size="50"></td>
      </tr>
      <tr>
        <td>付款方式：</td>
        <td>
          <input type="radio" name="isPay" value="0" checked>货到付款
          <input type="radio" name="isPay" value="1">支付宝
          <input type="radio" name="isPay" value="1">微信支付
        </td>
      </tr>
      <tr>
        <td>订单描述：</td>
        <td><textarea name="remark" cols="40" rows="3"></textarea></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="提交">
          &nbsp;&nbsp;&nbsp;
          <input type="reset" value="重置">
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>