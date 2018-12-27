<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="/360buy/public/css/admin.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/360buy/library/jquery/jquery-1.4.js"></script>
    <script type="text/javascript">
      function checkAdd()
      {
    	  $("#userTd").html("");
    	  $("#pwdTd").html("");
    	  $("#checkPwdTd").html("");
    	  $("#userTypeTd").html("");
          if(document.frm.userName.value == "")
          {
              $("#userTd").html("请输入用户名！");
              document.frm.userName.focus();
              return false;
          }
          else if(document.frm.password.value == "")
          {
              $("#pwdTd").html("请输入密码！");
              document.frm.password.focus();
              return false;
          }
          else if(document.frm.checkPwd.value != document.frm.password.value)
          {
              $("#checkPwdTd").html("两次输入的密码不一致！");
              document.frm.checkPwd.focus();
              return false;
          }
          else if(document.frm.userType.value == "")
          {
              $("#userTypeTd").html("请输入用户类型！");
              document.frm.userType.focus();
              return false;
          }
      }
    </script>
  </head>
  <body>
    <!-- 网站的头 -->
    <!-- 网站的头 -->
<div class="headDiv">
  <div class="headDiv1">www.360buy.com</div>
  <div class="headDiv2"><img src="/360buy/public/images/image6.gif"></div>
</div>
<div class="headDiv3">&nbsp;</div>

    <!-- 当前位置 -->
    <div class="locationDiv">&nbsp;: 设置管理员 : 添加管理员</div>
    <!-- 正文内容 -->
    <div class="mainDiv clear">
      <!-- 左侧树状列表 -->
      <div class="leftDiv" style="height:700px;"><script type=text/javascript src="/360buy/library/dtree/js/dtree.js"></script>
<script  type=text/javascript> 
  //退出后台
  function logout()
  {
	  if(confirm("是否退出后台管理系统?"))
	  {
		  window.location = "";
	  }
  }
  function hello()
  {
    d = new dTree('d','/360buy/library/dtree/');

    d.add(0,-1,'后台管理','');

    d.add(1,0,'重新登陆','javascript:logout()');

    d.add(2,0,'分类管理','');
    d.add(21,2,'添加分类','/360buy/admin.php/AddType/index');
    d.add(22,2,'修改分类','/360buy/admin.php/ModType/index');
    
    d.add(3,0,'品牌管理','');
    d.add(31,3,'添加品牌','/360buy/admin.php/AddBrand/index');
    d.add(32,3,'修改品牌','/360buy/admin.php/ModBrand/index');

    d.add(4,0,'产品管理','');
    d.add(41,4,'添加产品','/360buy/admin.php/AddProduct/index');
    d.add(42,4,'修改产品','/360buy/admin.php/ModProduct/index');

    d.add(5,0,'订单管理','');
    d.add(51,5,'查看订单','/360buy/admin.php/Order/index');
    
    d.add(6,0,'设置管理员','');
    d.add(61,6,'添加管理员','/360buy/admin.php/User/index');
    d.add(62,6,'修改管理员','/360buy/admin.php/User/update');

    d.add(7,0,'返回首页','/360buy/admin.php/Index/index');

    document.write(d);
  }

  hello();
</script></div>
      <!-- 右侧页面内容 -->
      <div class="rightDiv" style="height:700px;">
        <br><br><br><br>
        <form name="frm" method="post" action="" onsubmit="return checkAdd()">
        <table border="0" align="center" width="470" bgcolor="#6599FF">
          <tr>
            <td align="left" width="100">用户名</td>
            <td width="170"><input type="text" name="userName" size="20"></td>
            <td id="userTd" style="color:red;" width="170" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">密码</td>
            <td><input type="password" name="password" size="20"></td>
            <td id="pwdTd" style="color:red;" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">确认密码</td>
            <td><input type="password" name="checkPwd" size="20"></td>
            <td id="checkPwdTd" style="color:red;" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">用户类型</td>
            <td><input type="text" name="userType" size="20"></td>
            <td id="userTypeTd" style="color:red;" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">备注</td>
            <td><input type="text" name="remark" size="20"></td>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="center">
              <input type="submit" value="添加" class="btn1">
              &nbsp;&nbsp;&nbsp;
              <input type="reset" value="取消" class="btn1">
            </td>
            <td>&nbsp;</td>
          </tr>
        </table>
        </form>
      </div>
    </div>
  </body>
</html>