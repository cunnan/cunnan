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
    <!-- 网站的头 -->
<div class="headDiv">
  <div class="headDiv1">www.360buy.com</div>
  <div class="headDiv2"><img src="/360buy/public/images/image6.gif"></div>
</div>
<div class="headDiv3">&nbsp;</div>

    <!-- 当前位置 -->
    <div class="locationDiv">&nbsp;: 分类管理 : 修改分类</div>
    <!-- 正文内容 -->
    <div class="mainDiv clear">
      <!-- 左侧树状列表 -->
      <div class="leftDiv"><script type=text/javascript src="/360buy/library/dtree/js/dtree.js"></script>
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
      <div class="rightDiv">
        <br><br><br><br>
        <table border="1" align="center" width="600" cellpadding="0" cellspacing="0">
          <tr class="modTypeDiv1">
            <td>选择修改的菜单</td>
            <td>修改菜单的父菜单</td>
            <td>修改菜单名称</td>
          </tr>
          <tr class="modTypeDiv2" style="background-color:#FFFFFF;">
            <td width="200">
              <select name="typeId" size="10">
                <option value="0">|-无</option>
                <option value="1">|--展销会专栏</option>
                <option value="10">|---啤酒</option>
                <option value="21">|----花河</option>
                <option value="22">|----雪花</option>
                <option value="23">|----百威</option>
                <option value="11">|---红酒</option>
                <option value="31">|----长城干红</option>
              </select>
            </td>
            <td width="200">
              <select name="parentId" size="10">
                <option value="0">|-无</option>
                <option value="1">|--展销会专栏</option>
                <option value="10">|---啤酒</option>
                <option value="21">|----花河</option>
                <option value="22">|----雪花</option>
                <option value="23">|----百威</option>
                <option value="11">|---红酒</option>
                <option value="31">|----长城干红</option>
              </select>
            </td>
            <td width="200"><input type="text" id="typeName" name="typeName" size="20"></td>
          </tr>
          <tr>
            <td colspan="3" align="center"  class="modTypeDiv2" style="background-color:#FFFFFF;">
              <input type="submit" value="添加">
              &nbsp;&nbsp;&nbsp;
              <input type="reset" value="重置">
              &nbsp;&nbsp;&nbsp;
              <input type="button" value="删除'选择修改的菜单'">
            </td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>