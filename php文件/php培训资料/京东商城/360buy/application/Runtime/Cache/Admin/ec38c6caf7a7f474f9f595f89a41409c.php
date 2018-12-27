<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="/360buy/public/css/admin.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/360buy/library/jquery/jquery-1.4.js"></script>
  </head>
  <body>
    <!-- 网站的头 -->
    <script type="text/javascript">
  $(document).ready(function(){
	  $("#menuDiv1,#menuDiv2,#menuDiv3,#menuDiv4,#menuDiv5").hover(function(){
		  $(this).css("background-color","#D4D0C8");
		  $(this).find("div").show();
	  },function(){
		  $(this).css("background-color","#E4E9EC");
		  $(this).find("div").hide();
	  });
  });
  //退出后台
  function logout()
  {
	  if(confirm("是否退出后台管理系统?"))
	  {
		  window.location = "index.html?act=logout";
	  }
  }
</script>
<div class="headDiv">
  <div class="headDiv1">www.360buy.com</div>
  <div class="headDiv2"><img src="/360buy/public/images/image6.gif"></div>
</div>
<div class="headDiv3">&nbsp;</div>
<!-- 导航菜单 -->
<div class="menuDiv">
  <div id="menuDiv1"><a href="#" onclick="logout()">重新登陆</a></div>
  <div id="menuDiv3"><a href="#">分类管理</a><br>
    <div>
      <a href="/360buy/admin.php/AddType/index">添加分类</a><br>
      <a href="/360buy/admin.php/ModType/index">修改分类</a>
    </div>
  </div>
  <div id="menuDiv3"><a href="#">产品管理</a><br>
    <div>
      <a href="/360buy/admin.php/AddProduct/index">添加产品</a><br>
      <a href="/360buy/admin.php/ModProduct/index">修改产品</a>
    </div>
  </div>
  <div id="menuDiv2"><a href="#">订单管理</a><br>
    <div>
      <a href="/360buy/admin.php/Order/index">查看订单</a>
    </div>
  </div>
  <div id="menuDiv5"><a href="/360buy/admin.php/Index/index">返回首页</a></div>
</div>
    <!-- 当前位置 -->
    <div class="locationDiv">&nbsp;: 后台管理 : 管理首页</div>
    <!-- 正文内容 -->
    <div class="mainDiv clear">
      <!-- 左侧树状列表 -->
      <div class="leftDiv"><script type=text/javascript src="/360buy/library/dtree/js/dtree.js"></script>
<script  type=text/javascript> 
  function hello()
  {
    d = new dTree('d','/360buy/library/dtree/');

    d.add(0,-1,'后台管理','');

    d.add(1,0,'重新登陆','javascript:logout()');

    d.add(2,0,'分类管理','');
    d.add(21,2,'添加分类','/360buy/admin.php/AddType/index');
    d.add(22,2,'修改分类','/360buy/admin.php/ModType/index');

    d.add(3,0,'产品管理','');
    d.add(31,3,'添加产品','/360buy/admin.php/AddProduct/index');
    d.add(32,3,'修改产品','/360buy/admin.php/ModProduct/index');

    d.add(4,0,'订单管理','');
    d.add(41,4,'查看订单','/360buy/admin.php/Order/index');
    
    d.add(5,0,'设置管理员','');
    d.add(51,5,'添加管理员','/360buy/admin.php/User/index');
    d.add(52,5,'修改管理员','/360buy/admin.php/User/update');

    d.add(6,0,'返回首页','/360buy/admin.php/Index/index');

    document.write(d);
  }

  hello();
</script></div>
      <!-- 右侧页面内容 -->
      <div class="rightDiv">
        <div class="welcomeDiv1">欢迎登陆京东商城管理系统</div>
        <div class="welcomeDiv2">您的权限是：您是系统管理员</div>
      </div>
    </div>
  </body>
</html>