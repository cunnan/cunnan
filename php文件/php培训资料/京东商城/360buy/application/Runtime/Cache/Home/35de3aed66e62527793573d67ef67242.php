<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>购物流程_京东网上商城-综合网购首选</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/360buy/public/themes/jindong/stye1024.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/360buy/public/js/shopping_flow.js"></script>
    <script type="text/javascript">
      var flow_no_payment = "您必须选定一个支付方式。";
      var flow_no_shipping = "您必须选定一个配送方式。";
      var process_request = "正在处理您的请求...";
      var username_empty = "- 用户名不能为空。";
      var username_shorter = "- 用户名长度不能少于 3 个字符。";
      var username_invalid = "- 用户名只能是由字母数字以及下划线组成。";
      var password_empty = "- 登录密码不能为空。";
      var password_shorter = "- 登录密码不能少于 6 个字符。";
      var confirm_password_invalid = "- 两次输入密码不一致";
      var email_empty = "- Email 为空";
      var email_invalid = "- Email 不是合法的地址";
      var agreement = "- 您没有接受协议";
      var msn_invalid = "- msn地址不是一个有效的邮件地址";
      var qq_invalid = "- QQ号码不是一个有效的号码";
      var home_phone_invalid = "- 家庭电话不是一个有效号码";
      var office_phone_invalid = "- 办公电话不是一个有效号码";
      var mobile_phone_invalid = "- 手机号码不是一个有效号码";
      var msg_un_blank = "* 用户名不能为空";
      var msg_un_length = "* 用户名最长不得超过7个汉字";
      var msg_un_format = "* 用户名含有非法字符";
      var msg_un_registered = "* 用户名已经存在,请重新输入";
      var msg_can_rg = "* 可以注册";
      var msg_email_blank = "* 邮件地址不能为空";
      var msg_email_registered = "* 邮箱已存在,请重新输入";
      var msg_email_format = "* 邮件地址不合法";
      var msg_blank = "不能为空";
      var no_select_question = "- 您没有完成密码提示问题的操作";
      var passwd_balnk = "- 密码中不能包含空格";
      var username_exist = "用户名 %s 已经存在";
      var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
      var btn_buy = "购买";
      var is_cancel = "取消";
      var select_spe = "请选择商品属性";
    </script>
  </head>
  <body>
    <div id="container">
      
      <Script language="JavaScript">
function show_menu(obj_s,obj){
	var  s_id = document.getElementById(obj_s);
	var  sc_id = document.getElementById(obj);
	     s_id.style.display = "";
	     //sc_id.className = "ahv";
}
     	
function hide_menu(obj_h,obj){
	var  h_id = document.getElementById(obj_h);
	var  hc_id = document.getElementById(obj);
	     h_id.style.display = "none";
	     //hc_id.className = "alk";
}
window.onload = function()
{
  //fixpng();
}
function checkSearchForm()
{
    if(document.getElementById('keyword').value)
    {
        return true;
    }
    else
    {
		   alert("请输入搜索关键词！");
        return false;
    }
}
</Script>
      <div id="globalHeader">
        <ul id="top_nav_ul">
          <div id=navigation1_03 style=" float:right;">
          <dl>
            <dt style="POSITION: relative; z-index:999999999">
              <a style="float:right; background:url(/360buy/public/themes/jindong/images/biao.gif) 55px center no-repeat; padding-right:23px;display:block; line-height:29px;"  class=alk 
              onmouseover="show_menu('float_menu2','c_fship_c')"
              onmouseout="hide_menu('float_menu2','c_fship_c')"
              href="#"  target=_self>客服中心</a>
              <div id=float_menu2 onMouseOver="show_menu('float_menu2','c_fship_c')" style="border: #ccc 1px solid; border-top:none;DISPLaY: none; Z-INDEX: 20; LEFT: 0px; top:0; WIdtH:70px; padding:0 0 5px 8px;POSITION: absolute;" 
              onmouseout="hide_menu('float_menu2','c_fship_c')">
                <ul class=cship_list>
			      <li style="padding-bottom:7px; padding-top:5px;"><a target="_blank" href="user.php">客服中心</a> </li>
			      <li><a target="_blank" href="/360buy/index.php/User/index">会员后台</a> </li>
			      <li><a target="_blank" href="/360buy/index.php/User/order">我的订单</a> </li>
			      <li><a target="_blank" href="/360buy/index.php/User/message">我的留言</a> </li>
                </ul>
              </div>
            </dt>
            <dd></dd>
          </dl>
          </div>
          <div style="float:right; _padding-top:9px; background: url(/360buy/public/themes/jindong/images/nav_bg2.gif) 0 top no-repeat; height:29px; padding-left:28px;">
            <a href="/360buy/index.php/Promotion/index"  >今日特价</a> <img style="vertical-align:middle" src="/360buy/public/themes/jindong/images/nav_li.gif">
            <a href="#"  >极品源码</a> <img style="vertical-align:middle" src="/360buy/public/themes/jindong/images/nav_li.gif">
            <a href="/360buy/index.php/Cart/index"  >查看购物车</a> <img style="vertical-align:middle" src="/360buy/public/themes/jindong/images/nav_li.gif">
            <a href="/360buy/index.php/Quotation/index"  >报价单</a> <img style="vertical-align:middle" src="/360buy/public/themes/jindong/images/nav_li.gif">
          </div>
          <div  style="float:right; color:#acacac; padding-right:15px;">
            <script type="text/javascript" src="/360buy/public/js/transport.js"></script>
            <script type="text/javascript" src="/360buy/public/js/utils.js"></script>
            <font id="ECS_MEMBERZONE">您好，欢迎您光临万联商城！
              <a href="/360buy/index.php/Login/index">[请登录]</a>
              <span>，新用户？</span>
              <a style="color:#ff6600" href="/360buy/index.php/Register/index">[免费注册]</a>
            </font>
          </div>
        </ul>
        <p id="logo"><img style="float:left" src="/360buy/public/themes/jindong/images/logo.gif"/></a></p>
      </div>
      <div id="globalNav">
        <ul>
          <?php if($pageName == index): ?><li><a href="/360buy/index.php/Index/index" class="cur">首页</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Index/index">首页</a></li><?php endif; ?>
          <?php if($pageName == category1): ?><li><a href="/360buy/index.php/Category/index/id/1" class="cur">服饰鞋帽</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Category/index/id/1"  >服饰鞋帽</a></li><?php endif; ?>
          <?php if($pageName == auction): ?><li><a href="/360buy/index.php/Auction/index" target="_blank" class="cur">夺宝岛</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Auction/index" target="_blank"  >夺宝岛</a></li><?php endif; ?>
          <?php if($pageName == Diy): ?><li><a href="/360buy/index.php/Diy/index" class="cur">装机大师</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Diy/index">装机大师</a></li><?php endif; ?>
          <?php if($pageName == Message): ?><li><a href="/360buy/index.php/Message/index" class="cur">留言板</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Message/index">留言板</a></li><?php endif; ?>
          <?php if($pageName == category2): ?><li><a href="/360buy/index.php/Category/index/id/2" class="cur">汽车用品</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Category/index/id/2"  >汽车用品</a></li><?php endif; ?>
          <?php if($pageName == category3): ?><li><a href="/360buy/index.php/Category/index/id/3" class="cur">展销会专栏</a></li>
          <?php else: ?>
          <li><a href="/360buy/index.php/Category/index/id/3"  >展销会专栏</a></li><?php endif; ?>
        </ul>
      </div>
      <div id="globalSearch">
        <img style="position:absolute; left:0;" src="/360buy/public/themes/jindong/images/search_box_l.gif">
        <img  style="position:absolute; right:0;" src="/360buy/public/themes/jindong/images/search_box_r.gif">
        <form id="searchForm" name="searchForm" method="post" action="/360buy/index.php/Search/index" onSubmit="return checkSearchForm()" style="background:#99CC00; padding-left:13px;">
          <div class="search_left">
            <input style="float:left;" name="keywords" type="text" id="keyword" value="请输入商品关键字" onclick="javascript:this.value='';this.style.color='#333333';" />
            <input type="image" src="/360buy/public/themes/jindong/images/search.gif" style="float:left" />
            <span class="key2">热门搜索 ：
              <a target="_blank" style=" color:#ffcccc" href="/360buy/index.php/Search/index">品牌日用品</a>
              <a target="_blank" style=" color:#ffcccc" href="/360buy/index.php/Search/index">品牌服装</a>
            </span>
          </div>
          <div class="search_right">
            <div class="buy_car_bg clearfix" id="ECS_CaRTINFO" >
              <a href="/360buy/index.php/Cart/index">
                <span>购物车中有<b>0</b>件商品</span>
                <ul class="car_ul">
                <a href="#" style="color:#999; padding-left:30px;">您的购物车暂无商品 赶快选择心爱的商品吧</a>
                </ul>
              </a>
            </div>
            <a href="/360buy/index.php/Cart/flow"><img src="/360buy/public/themes/jindong/images/qujiesuan.gif"></a>
          </div>
        </form>
      </div>
      
      <div class="p_w" style="clear:both; overflow:hidden"></div>
      <div id="urHere" class="globalModule">
        <h3><a href=".">首页</a> <code>&gt;</code> 购物流程</h3>
      </div>
      <div class="blank"></div>
      <div style="width:80%; margin:0 AUTO">
        <form action="/360buy/index.php/Cart/ordersuccess" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
          <div class="flowBox_title">
            <dl></dl><dt>订单详情</dt><dd></dd>
          </div>
          <div class="flowBox dingdan_all">
            <h6><span>商品列表</span><a href="/360buy/index.php/Cart/index" class="f6">修改</a></h6>
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#aacded">
              <tr>
                <th bgcolor="#ffffff">商品名称</th>
                <th bgcolor="#ffffff">属性</th>
                <th bgcolor="#ffffff">美智价</th>
                <th bgcolor="#ffffff">购买数量</th>
                <th bgcolor="#ffffff">小计</th>
              </tr>
              <tr>
                <td bgcolor="#ffffff">
                  <a href="/360buy/index.php/Goods/index" target="_blank" class="f6">华为（HUAWEI）C8600 经典机器 直降70元！超值特价！</a>
                </td>
                <td bgcolor="#ffffff"></td>
                <td bgcolor="#ffffff" align="center" style=" font-weight:bold; color:#F00">￥11111111.00元</td>
                <td bgcolor="#ffffff" align="center">1</td>
                <td bgcolor="#ffffff" align="right">￥11111111.00元</td>
              </tr>
              <tr>
                <td bgcolor="#ffffff">
                  <a href="/360buy/index.php/Goods/index" target="_blank" class="f6">华为（HUAWEI）C8600 经典机器 直降70元！超值特价！</a>
                </td>
                <td bgcolor="#ffffff"></td>
                <td bgcolor="#ffffff" align="center" style=" font-weight:bold; color:#F00">￥11111111.00元</td>
                <td bgcolor="#ffffff" align="center">1</td>
                <td bgcolor="#ffffff" align="right">￥11111111.00元</td>
              </tr>
              <tr>
                <td bgcolor="#ffffff">
                  <a href="/360buy/index.php/Goods/index" target="_blank" class="f6">华为（HUAWEI）C8600 经典机器 直降70元！超值特价！</a>
                </td>
                <td bgcolor="#ffffff"></td>
                <td bgcolor="#ffffff" align="center" style=" font-weight:bold; color:#F00">￥11111111.00元</td>
                <td bgcolor="#ffffff" align="center">1</td>
                <td bgcolor="#ffffff" align="right">￥11111111.00元</td>
              </tr>
              <tr>
                <td bgcolor="#ffffff" colspan="7" align="right" style=" color:#FF0000; font-weight:bold">购物金额小计 ￥11111111.00元</td>
              </tr>
            </table>
            <div class="blank"></div>
            <h6><span>收货人信息</span><a href="/360buy/index.php/Cart/flow" class="f6">修改</a></h6>
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#aacded">
              <tr>
                <td bgcolor="#ebf4fb">收货人姓名:</td>
                <td bgcolor="#ffffff">张三</td>
                <td bgcolor="#ebf4fb">电子邮件地址:</td>
                <td bgcolor="#ffffff">123@yahoo.com.cn</td>
              </tr>
              <tr>
                <td bgcolor="#ebf4fb">详细地址:</td>
                <td bgcolor="#ffffff">北京 </td>
                <td bgcolor="#ebf4fb">邮政编码:</td>
                <td bgcolor="#ffffff">10030</td>
              </tr>
              <tr>
                <td bgcolor="#ebf4fb">电话:</td>
                <td bgcolor="#ffffff">123456 </td>
                <td bgcolor="#ebf4fb">手机:</td>
                <td bgcolor="#ffffff">13580000000</td>
              </tr>
              <tr>
                <td bgcolor="#ebf4fb">标志建筑:</td>
                <td bgcolor="#ffffff"> </td>
                <td bgcolor="#ebf4fb">最佳送货时间:</td>
                <td bgcolor="#ffffff"></td>
              </tr>
            </table>
            <div class="blank"></div>
            <h6><span>配送方式</span></h6>
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#aacded" id="shippingTable">
              <tr>
                <th bgcolor="#ffffff" width="5%">&nbsp;</th>
                <th bgcolor="#ffffff" width="25%">名称</th>
                <th bgcolor="#ffffff">订购描述</th>
                <th bgcolor="#ffffff" width="15%">费用</th>
                <th bgcolor="#ffffff" width="15%">免费额度</th>
                <th bgcolor="#ffffff" width="15%">保价费用</th>
              </tr>
              <tr>
                <td bgcolor="#ffffff" valign="top"><input name="shipping" type="radio" value="13"  supportCod="0" insure="0" onclick="selectShipping(this)" /></td>
                <td bgcolor="#ffffff" valign="top"><strong>EMS 国内邮政特快专递</strong></td>
                <td bgcolor="#ffffff" valign="top">EMS 国内邮政特快专递描述内容</td>
                <td bgcolor="#ffffff" align="right" valign="top">￥0.00元</td>
                <td bgcolor="#ffffff" align="right" valign="top">￥4000.00元</td>
                <td bgcolor="#ffffff" align="right" valign="top">不支持保价</td>
              </tr>
              <tr>
                <td colspan="6" bgcolor="#ffffff" align="right">
                  <label for="ECS_NEEDINSURE">
                    <input name="need_insure" id="ECS_NEEDINSURE" type="checkbox"  onclick="selectInsure(this.checked)" value="1"  disabled="true"  />配送是否需要保价 
                  </label>
                </td>
              </tr>
            </table>
            <div class="blank"></div>
            <h6><span>支付方式</span></h6>
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#aacded" id="paymentTable">
              <tr>
                <th width="5%" bgcolor="#ffffff">&nbsp;</th>
                <th width="20%" bgcolor="#ffffff">名称</th>
                <th bgcolor="#ffffff">订购描述</th>
                <th bgcolor="#ffffff" width="15%">手续费</th>
              </tr>
              <tr>
                <td valign="top" bgcolor="#ffffff"><input type="radio" name="payment" value="1"  isCod="0" onclick="selectPayment(this)" /></td>
                <td valign="top" bgcolor="#ffffff"><strong>余额支付</strong></td>
                <td valign="top" bgcolor="#ffffff">使用帐户余额支付。只有会员才能使用，通过设置信用额度，可以透支。</td>
                <td align="right" bgcolor="#ffffff" valign="top">￥0.00元</td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#ffffff"><input type="radio" name="payment" value="3"  isCod="1" onclick="selectPayment(this)" disabled="true"/></td>
                <td valign="top" bgcolor="#ffffff"><strong>货到付款</strong></td>
                <td valign="top" bgcolor="#ffffff">开通城市： 新疆特区喀什市&nbsp;&nbsp;&nbsp;货到付款区域：新疆特区喀什市</td>
                <td align="right" bgcolor="#ffffff" valign="top"><span id="ECS_CODFEE">￥0.00元</span></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#ffffff"><input type="radio" name="payment" value="6"  isCod="0" onclick="selectPayment(this)" /></td>
                <td valign="top" bgcolor="#ffffff"><strong>支付宝</strong></td>
                <td valign="top" bgcolor="#ffffff">支付宝网站(www.alipay.com) 是国内先进的网上支付平台。<br/>ECShop联合支付宝推出优惠套餐：无预付/年费，单笔费率1.5%，无流量限制。<br/><a href="https://www.alipay.com/himalayas/practicality_profile_edit.htm?market_type=from_agent_contract&customer_external_id=C4335319945672464113" target="_blank"><font color="red">立即在线申请</font></a></td>
                <td align="right" bgcolor="#ffffff" valign="top">￥5.00元</td>
              </tr>
            </table>
            <div class="blank"></div>
            <h6><span>商品包装</span></h6>
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#aacded" id="packTable">
              <tr>
                <th width="5%" scope="col" bgcolor="#ffffff">&nbsp;</th>
                <th width="35%" scope="col" bgcolor="#ffffff">名称</th>
                <th width="22%" scope="col" bgcolor="#ffffff">价格</th>
                <th width="22%" scope="col" bgcolor="#ffffff">免费额度</th>
                <th scope="col" bgcolor="#ffffff">图片</th>
              </tr>
              <tr>
                <td valign="top" bgcolor="#ffffff"><input type="radio" name="pack" value="0" checked="true" onclick="selectPack(this)" /></td>
                <td valign="top" bgcolor="#ffffff"><strong>不要包装</strong></td>
                <td valign="top" bgcolor="#ffffff">&nbsp;</td>
                <td valign="top" bgcolor="#ffffff">&nbsp;</td>
                <td valign="top" bgcolor="#ffffff">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#ffffff"><input type="radio" name="pack" value="1"  onclick="selectPack(this)" /></td>
                <td valign="top" bgcolor="#ffffff"><strong>精品包装</strong></td>
                <td valign="top" bgcolor="#ffffff" align="right">￥5.00元</td>
                <td valign="top" bgcolor="#ffffff" align="right">￥800.00元</td>
                <td valign="top" bgcolor="#ffffff" align="center">
                  <a href="data/packimg/1242108360911825791.jpg" target="_blank" class="f6">查看</a>
                </td>
              </tr>
            </table>
            <div class="blank"></div>
            <h6><span>祝福贺卡</span></h6>
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#aacded" id="cardTable">
              <tr>
                <th bgcolor="#ffffff" width="5%" scope="col">&nbsp;</th>
                <th bgcolor="#ffffff" width="35%" scope="col">名称</th>
                <th bgcolor="#ffffff" width="22%" scope="col">价格</th>
                <th bgcolor="#ffffff" width="22%" scope="col">免费额度</th>
                <th bgcolor="#ffffff" scope="col">图片</th>
              </tr>
              <tr>
                <td bgcolor="#ffffff" valign="top"><input type="radio" name="card" value="0" checked="true" onclick="selectCard(this)" /></td>
                <td bgcolor="#ffffff" valign="top"><strong>不要贺卡</strong></td>
                <td bgcolor="#ffffff" valign="top">&nbsp;</td>
                <td bgcolor="#ffffff" valign="top">&nbsp;</td>
                <td bgcolor="#ffffff" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#ffffff"><input type="radio" name="card" value="1"  onclick="selectCard(this)"  /></td>
                <td valign="top" bgcolor="#ffffff"><strong>祝福贺卡</strong></td>
                <td valign="top" align="right" bgcolor="#ffffff">￥5.00元</td>
                <td valign="top" align="right" bgcolor="#ffffff">￥1000.00元</td>
                <td valign="top" align="center" bgcolor="#ffffff">
                  <a href="data/cardimg/1242108754847457261.jpg" target="_blank" class="f6">查看</a>
                </td>
              </tr>
              <tr>
                <td bgcolor="#ffffff"></td>
                <td bgcolor="#ffffff" valign="top"><strong>祝福语:</strong></td>
                <td bgcolor="#ffffff" colspan="3"><textarea name="card_message" cols="60" rows="3" style="width:auto; border:1px solid #ccc;"></textarea></td>
              </tr>
            </table>
            <div class="blank"></div>
            <h6><span>其它信息</span></h6>
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#aacded">
              <tr>
                <td bgcolor="#ebf4fb"><strong>使用红包:</strong></td>
                <td bgcolor="#ffffff">选择已有红包 
                  <select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS" style="border:1px solid #ccc;">
                    <option value="0" selected>请选择</option>
                  </select>或者输入红包序列号 
                  <input name="bonus_sn" type="text" class="inputBg" size="15" value=""/>
                  <input name="validate_bonus" type="button"  value="验证红包" onclick="validateBonus(document.forms['theForm'].elements['bonus_sn'].value)" style="vertical-align:middle;" />
                </td>
              </tr>
              <tr>
                <td bgcolor="#ebf4fb">
                  <strong>开发票:</strong>
                  <input name="need_inv" type="checkbox"  class="input" id="ECS_NEEDINV" onclick="changeNeedInv()" value="1"  />
                </td>
                <td bgcolor="#ffffff">发票类型
                  <select name="inv_type" id="ECS_INVTYPE" disabled="true" onchange="changeNeedInv()" style="border:1px solid #ccc;">
                    <option value="1">1 [7%]</option>
                    <option value="2">2 [10%]</option>
                  </select>发票抬头
                  <input name="inv_payee" type="text"  class="input" id="ECS_INVPAYEE" size="20" disabled="true" value="" onblur="changeNeedInv()" />发票内容
                  <select name="inv_content" id="ECS_INVCONTENT" disabled="true"  onchange="changeNeedInv()" style="border:1px solid #ccc;">
                    <option value="办公用品">办公用品</option>
                    <option value="服饰">服饰</option>
                    <option value="日常用品">日常用品</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#ebf4fb"><strong>订单附言:</strong></td>
                <td bgcolor="#ffffff"><textarea name="postscript" cols="80" rows="3" id="postscript" style="border:1px solid #ccc;"></textarea></td>
              </tr>
              <tr>
                <td bgcolor="#ebf4fb"><strong>缺货处理:</strong></td>
                <td bgcolor="#ffffff">
                  <label>
                    <input name="how_oos" type="radio" value="0" checked onclick="changeOOS(this)" />等待所有商品备齐后再发
                  </label>
                  <label>
                    <input name="how_oos" type="radio" value="1"  onclick="changeOOS(this)" />取消订单
                  </label>
                  <label>
                    <input name="how_oos" type="radio" value="2"  onclick="changeOOS(this)" />和我们协商
                  </label>
                </td>
              </tr>
            </table>
            <div class="blank"></div>
            <h6><span>费用总计</span></h6>
            <div id="ECS_ORDERTOTAL">
              <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" class="tableList f0_table" style="color:#FF0000">
                <tr>
                  <td align="right" bgcolor="#ffffff">该订单完成后，您将获得            <font class="f4_b">11111111</font> 积分            ，以及价值               <font class="f4_b">￥0.00元</font>的红包。</td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff">商品总价: <font class="f4_b">￥11111111.00元</font></td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff"> 应付款金额: <font class="f4_b">￥11111111.00元</font></td>
                </tr>
              </table>
            </div>
            <div align="center" style="margin:8px auto;">
              <input type="image" src="/360buy/public/themes/jindong/images/bnt_subOrder.gif" />
            </div>
          </div>
        </form>
      </div>
      <div class="blank"></div>
      <div class="blank"></div>
      
          <div id="globalHelp" class="globalModule">
     <div class="clearfix">
       <dl>
         <dt>
           <img src="/360buy/public/themes/jindong/images/help_1.gif" />
           <a href='article_cat.php?id=5' title="购物指南">购物指南</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=9" title="购物流程">购物流程</a></dd>
         <dd><a href="article.php?id=10" title="会员介绍">会员介绍</a></dd>
         <dd><a href="article.php?id=36" title="常见问题">常见问题</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="/360buy/public/themes/jindong/images/help_2.gif" />
           <a href='article_cat.php?id=7' title="配送方式">配送方式</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=15" title="快递运输">快递运输</a></dd>
         <dd><a href="article.php?id=16" title="特快专递(EMS)">特快专递(EMS)</a></dd>
         <dd><a href="article.php?id=43" title="上门自提">上门自提</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="/360buy/public/themes/jindong/images/help_3.gif" />
           <a href='article_cat.php?id=10' title="支付方式">支付方式</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=18" title="货到付款">货到付款</a></dd>
         <dd><a href="article.php?id=19" title="在线支付">在线支付</a></dd>
         <dd><a href="article.php?id=20" title="银行转账">银行转账</a></dd>
         <dd><a href="article.php?id=37" title="分期付款">分期付款</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="/360buy/public/themes/jindong/images/help_4.gif" />
           <a href='article_cat.php?id=8' title="售后服务">售后服务</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=21" title="退换货原则">退换货原则</a></dd>
         <dd><a href="article.php?id=22" title="退换货流程">退换货流程</a></dd>
         <dd><a href="article.php?id=23" title="价格保护">价格保护</a></dd>
         <dd><a href="article.php?id=38" title="退款说明">退款说明</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="/360buy/public/themes/jindong/images/help_5.gif" />
           <a href='article_cat.php?id=9' title="特色服务">特色服务</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=24" title="商品拍卖">商品拍卖</a></dd>
         <dd><a href="article.php?id=25" title="DIY装机">DIY装机</a></dd>
         <dd><a href="article.php?id=26" title="上门服务">上门服务</a></dd>
         <dd><a href="article.php?id=39" title="上门装机">上门装机</a></dd>
         <dd><a href="article.php?id=40" title="香港代购">香港代购</a></dd>
       </dl>
     </div>
     <div class="blank"></div>
     <div class="blank"></div>
     <div class="serve clearfix">
       <ul  class="line"><img src="/360buy/public/themes/jindong/images/serve_1.gif"></ul>
       <ul  class="line"><img src="/360buy/public/themes/jindong/images/serve_2.gif"></ul>
       <ul  class="line"><img src="/360buy/public/themes/jindong/images/serve_3.gif"></ul>
       <ul ><img src="/360buy/public/themes/jindong/images/serve_4.gif"></ul>
     </div>
   </div>
   <div class="blank"></div>
   <div id="globalFooter">
     <p id="footerNav">
       <a href="article.php?id=1" >关于我们</a>
       |
       <a href="article.php?id=2" >联系我们</a>
       |
       <a href="article.php?id=3" >广告服务</a>
       |
       <a href="http://jetli.taobao.com/" >品牌加盟</a>
       |
       <a href="wholesale.php" >批发方案</a>
       |
       <a href="myship.php" >配送方式</a>
       |
       <script type="text/javascript" src="/360buy/public/js/dialog3.js"></script>
     </p>
     <p id="copyright">&copy; 2005-2012 京东网上商城 版权所有，并保留所有权利。</p>
     <p id="address"></p>
     <p id="phone"></p>
     <p id="imlist">
       <img src="/360buy/public/images/pa.gif" alt="QQ" /> <a href="#" target="_blank">393769718</a>
       <img src="/360buy/public/images/T1B7m_XeXuXXaHNz_X-16-16.gif" alt="淘宝旺旺" /><a href="#" target="_blank"> tddt8</a>
     </p>
     <p id="qureyInfo">共执行 12 个查询，用时 0.017868 秒，在线 3 人，Gzip 已禁用，占用内存 3.160 MB<img src="" alt="" style="width:0px;height:0px;" /></p>
     <div align="center" ></div>
     <div class="blank"></div>
     <div style="text-align:center">
       <a href="#"><img src="/360buy/public/themes/jindong/images/fot_1.gif"></a>
       <a href="#"><img src="/360buy/public/themes/jindong/images/fot_2.gif"></a>
       <a href="#"><img src="/360buy/public/themes/jindong/images/fot_3.gif"></a>
     </div>
   </div>

    </div>
  </body>
</html>