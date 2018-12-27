<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="/360buy/public/css/admin.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/360buy/library/jquery/jquery-1.4.js"></script>
    <script type="text/javascript" src="/360buy/library/kindeditor/kindeditor.js"></script>
    <script type="text/javascript">
      var editor1;
      KindEditor.ready(function(e){
          editor1 = e.create("[name=remark]",{
              width:"600px",
              height:"100px",
              items:["source","undo","redo","|","bold","italic","underline","image"]
          });
      });
      var editor2;
      KindEditor.ready(function(e){
          editor2 = e.create("[name=attribute]",{
              width:"600px",
              height:"100px",
              items:["source","undo","redo","|","bold","italic","underline"]
          });
      });
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
    <div class="locationDiv">&nbsp;: 产品管理 : 修改产品</div>
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
        <br>
        <form name="frm" method="post" action="" enctype="multipart/form-data">
        <table class="addNewsTb" bgcolor="#DCDCDC" border="0" align="center" width="700">
          <tr>
            <td>商品名称：</td>
            <td><input type="text" name="goodsName" size="50" value="夏普61寸液晶电视"></td>
          </tr>
          <tr>
            <td>商品货号：</td>
            <td><input type="text" name="goodsCode" size="50" value="SD123455656"></td>
          </tr>
          <tr>
            <td>商品库存：</td>
            <td><input type="text" name="haveCount" size="50" value="100"></td>
          </tr>
          <tr>
            <td>商品品牌：</td>
            <td>
              <select name="brandId">
                <option value="1">联想</option>
                <option value="2">三星</option>
                <option value="3" selected>夏普</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>商品分类：</td>
            <td>
              <select name="typeId">
                <option value="1">数码产品</option>
                <option value="2" selected>家用电器</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>市场价：</td>
            <td><input type="text" name="oldPrice" size="50" value="6000"></td>
          </tr>
          <tr>
            <td>美智价：</td>
            <td><input type="text" name="price" size="50" value="5900"></td>
          </tr>
          <tr>
            <td>规格参数：</td>
            <td><textarea name="attribute">主体参数<br>产品品牌	夏普（SHARP）<br>产品型号	LCD-55DS6000A<br>产品颜色	黑色<br>产品类型	4K超清电视<br>能效等级	二级能效</textarea></td>
          </tr>
          <tr>
            <td>商品介绍：</td>
            <td>
              <textarea name="remark">
                &nbsp;凭质保证书及京东商城发票，可享受全国联保服务（奢侈品、钟表除外；奢侈品、钟表由京东联系保修，享受法定三包售后服务），与您亲临商场选购的商品享受相同的质量保证。京东商城还为您提供具有竞争力的商品价格和运费政策，请您放心购买！<br>
                &nbsp;注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！ 
              </textarea>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
              <input type="submit" value="修改" class="btn2">
              &nbsp;&nbsp;&nbsp;
              <input type="reset" value="取消" class="btn2">
            </td>
          </tr>
        </table>
        </form>
      </div>
    </div>
  </body>
</html>