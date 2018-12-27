<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）_笔记本_电脑整机_电脑产品_京东网上商城-综合网购首选</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/360buy/public/themes/jindong/stye1024.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/360buy/public/themes/jindong/js/action.js"></script>
    <script type="text/javascript" src="/360buy/public/themes/jindong/js/mzp-packed-me.js"></script>
    <style type="text/css">
	<!--
	.age_box a{float: left; height:22px; line-height:22px; width:92px; background:url(/360buy/public/themes/jindong/images/biao6.gif) 0 center no-repeat; padding-left:10px;font-family:Arial, Helvetica, sans-serif;color:#333333}
	-->
	</style>
    <script type="text/javascript">
	function $id(element) {
	  return document.getElementById(element);
	}
	//切屏--是按钮，_v是内容平台，_h是内容库
	function reg(str){
	  var bt=$id(str+"_b").getElementsByTagName("h2");
	  for(var i=0;i<bt.length;i++){
	    bt[i].subj=str;
	    bt[i].pai=i;
	    bt[i].style.cursor="pointer";
	    bt[i].onclick=function(){
	      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
	      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
	        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
	        var ison=j==this.pai;
	        _bt.className=(ison?"":"h2bg");
	      }
	    }
	  }
	  $id(str+"_h").className="none";
	  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
	}
	function submitTag(frm)
    {
      try
      {
        var tag = frm.elements['tag'].value;
        var idx = frm.elements['goods_id'].value;

        if (tag.length > 0 && parseInt(idx) > 0)
        {
          Ajax.call('user.php?act=add_tag', "id=" + idx + "&tag=" + tag, submitTagResponse, "POST", "JSON");
        }
      }
      catch (e) {alert(e);}

      return false;
    }

    function submitTagResponse(result)
    {
      var div = document.getElementById('ECS_TAGS');

      if (result.error > 0)
      {
        alert(result.message);
      }
      else
      {
        try
        {
          div.innerHTML = '';
          var tags = result.content;

          for (i = 0; i < tags.length; i++)
          {
            div.innerHTML += '<a href="search.php?keywords='+tags[i].word+'">' +tags[i].word + '[' + tags[i].count + ']<\/a>&nbsp;&nbsp; ';
          }
        }
        catch (e) {alert(e);}
      }
    }
    var cmt_empty_username = "请输入您的用户名称";
    var cmt_empty_email = "请输入您的电子邮件地址";
    var cmt_error_email = "电子邮件地址格式不正确";
    var cmt_empty_content = "您没有输入评论的内容";
    var captcha_not_null = "验证码不能为空!";
    var cmt_invalid_comments = "无效的评论内容!";

    /**
     * 提交评论信息
    */
    function submitComment(frm)
    {
      var cmt = new Object;

      //cmt.username        = frm.elements['username'].value;
      cmt.email           = frm.elements['email'].value;
      cmt.content         = frm.elements['content'].value;
      cmt.type            = frm.elements['cmt_type'].value;
      cmt.id              = frm.elements['id'].value;
      cmt.enabled_captcha = frm.elements['enabled_captcha'] ? frm.elements['enabled_captcha'].value : '0';
      cmt.captcha         = frm.elements['captcha'] ? frm.elements['captcha'].value : '';
      cmt.rank            = 0;

      for (i = 0; i < frm.elements['comment_rank'].length; i++)
      {
        if (frm.elements['comment_rank'][i].checked)
        {
           cmt.rank = frm.elements['comment_rank'][i].value;
         }
      }


      if (cmt.email.length > 0)
      {
         if (!(Utils.isEmail(cmt.email)))
         {
            alert(cmt_error_email);
            return false;
          }
       }
       else
       {
            alert(cmt_empty_email);
            return false;
       }

       if (cmt.content.length == 0)
       {
          alert(cmt_empty_content);
          return false;
       }

       if (cmt.enabled_captcha > 0 && cmt.captcha.length == 0 )
       {
          alert(captcha_not_null);
          return false;
       }

       Ajax.call('comment.php', 'cmt=' + cmt.toJSONString(), commentResponse, 'POST', 'JSON');
       return false;
    }

    /**
     * 处理提交评论的反馈信息
    */
      function commentResponse(result)
      {
        if (result.message)
        {
          alert(result.message);
        }

        if (result.error == 0)
        {
          var layer = document.getElementById('ECS_COMMENT');

          if (layer)
          {
            layer.innerHTML = result.content;
          }
        }
      }
      var goods_id = 4710;
      var goodsattr_style = 1;
      var gmt_end_time = 0;
      var day = "天";
      var hour = "小时";
      var minute = "分钟";
      var second = "秒";
      var end = "结束";
      var goodsId = 4710;
      var now_time = 1338246681;
      onload = function(){
        changePrice();
        //fixpng();
        try {onload_leftTime();}
        catch (e) {}
      }
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
        <h3><a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=16">电脑产品</a> <code>&gt;</code> <a href="category.php?id=34">电脑整机</a> <code>&gt;</code> <a href="category.php?id=117">笔记本</a> <code>&gt;</code> 联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）</h3>
      </div>
      <div class="blank"></div>
      <div id="globalLeft">
        
        
        <div class="globalModule1">
          <h3 class="h32"><b>商品分类</b> <a target="_blank" href="/360buy/index.php/Search/index">全部分类>></a></h3>
          <div class="my_left_category">
            <div class="blank" style="height:0; _display:none"></div>
            <h2> <a target="_blank" href="category.php?id=355"> 展销会专栏</a></h2>
            <div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
              <h3>
                <div class="xianzhi"><a target="_blank" href="category.php?id=360">休闲食品</a> <span class="des">- </span></div>
              </h3>
              <div class="h3_cat">
                <div class="shadow">
                  <div class="shadow_border">
                    <ul>
                      <li><a target="_blank" href="category.php?id=365">恰恰系列</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
              <h3>
                <div class="xianzhi"><a target="_blank" href="category.php?id=360">休闲食品</a> <span class="des">- </span></div>
              </h3>
              <div class="h3_cat">
                <div class="shadow">
                  <div class="shadow_border">
                    <ul>
                      <li><a target="_blank" href="category.php?id=365">恰恰系列</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
              <h3>
                <div class="xianzhi"><a target="_blank" href="category.php?id=360">休闲食品</a> <span class="des">- </span></div>
              </h3>
              <div class="h3_cat">
                <div class="shadow">
                  <div class="shadow_border">
                    <ul>
                      <li><a target="_blank" href="category.php?id=365">恰恰系列</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <h2> <a target="_blank" href="category.php?id=17"> 手机数码</a></h2>
            <div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
              <h3>
                <div class="xianzhi"><a target="_blank" href="category.php?id=32">手机通讯</a> <span class="des">-  GSM手机  CDMA手机   双模手机  3G手机  双卡手机   对讲机</span></div>
              </h3>
              <div class="h3_cat">
                <div class="shadow">
                  <div class="shadow_border">
                    <ul>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
              <h3>
                <div class="xianzhi"><a target="_blank" href="category.php?id=32">手机通讯</a> <span class="des">-  GSM手机  CDMA手机   双模手机  3G手机  双卡手机   对讲机</span></div>
              </h3>
              <div class="h3_cat">
                <div class="shadow">
                  <div class="shadow_border">
                    <ul>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
              <h3>
                <div class="xianzhi"><a target="_blank" href="category.php?id=32">手机通讯</a> <span class="des">-  GSM手机  CDMA手机   双模手机  3G手机  双卡手机   对讲机</span></div>
              </h3>
              <div class="h3_cat">
                <div class="shadow">
                  <div class="shadow_border">
                    <ul>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                      <li><a target="_blank" href="#">GSM手机</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="blank"></div>
          </div>
        </div>
        <div class="blank"></div>
        <div class="blank"></div>
        <div class="box" id='history_div'>
          <div id="globalHistory" class="globalModule" >
            <h3 class="h3_3" style="border-bottom:1px dotted #efefef"><div id="list_t_l"><div id="list_t_r"><b style="color:#333">最近浏览过的商品</b></div></div></h3>
            <div id="global_box" >
              <ul id="history_list" class="boxCenterList">
                <ul class="clearfix">
                  <li class="goodsimg"><a href="/360buy/index.php/Goods/index" target="_blank"><img src="/360buy/public/images/201001/thumb_img/4710_thumb_G_1262426233316.jpg" alt="联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）" class="B_blue" /></a></li>
                  <li><a  class="name2" href="/360buy/index.php/Goods/index" target="_blank" title="联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）">联想（Lenovo）Y450A-TSI ...</a><font class="f1">￥5099元</font><br /></li>
                </ul>
                <ul class="clearfix">
                  <li class="goodsimg"><a href="/360buy/index.php/Goods/index" target="_blank"><img src="/360buy/public/images/201001/thumb_img/4710_thumb_G_1262426233316.jpg" alt="联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）" class="B_blue" /></a></li>
                  <li><a  class="name2" href="/360buy/index.php/Goods/index" target="_blank" title="联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）">联想（Lenovo）Y450A-TSI ...</a><font class="f1">￥5099元</font><br /></li>
                </ul>
                <ul class="clearfix">
                  <li class="goodsimg"><a href="/360buy/index.php/Goods/index" target="_blank"><img src="/360buy/public/images/201001/thumb_img/4710_thumb_G_1262426233316.jpg" alt="联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）" class="B_blue" /></a></li>
                  <li><a  class="name2" href="/360buy/index.php/Goods/index" target="_blank" title="联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）">联想（Lenovo）Y450A-TSI ...</a><font class="f1">￥5099元</font><br /></li>
                </ul>
                <ul id="clear_history">
                  <a onclick="clear_history()">[清空]</a>
                </ul>
              </ul>
            </div>
          </div>
        </div>
		<script type="text/javascript">
		if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
		{
		    document.getElementById('history_div').style.display='none';
		}
		else
		{
		    document.getElementById('history_div').style.display='block';
		}
		function clear_history()
		{
		Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
		}
		function clear_history_Response(res)
		{
		document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
		}
		</script>
		<div class="blank"></div>
		<div id="globalPromotion" class="globalModule">
		  <h3><div id="list_t_l"><div id="list_t_r"><b>购买此商品的人还购买</b></div></div></h3>
		  <div id="global_box">
		    <div class="itemGrid">
		      <div class="item" style="background: url(/360buy/public/themes/jindong/images/line_1.gif) repeat-x 0 bottom; padding:10px; width:190px; text-align:left;">
		        <a href="/360buy/index.php/Goods/index" target="_blank"><img style="width:50px; height:38px; float:left; margin-right:10px;" src="/360buy/public/images/201001/thumb_img/4713_thumb_G_1262436272956.jpg" alt="美的（midea）净化器KJ10F-NM" /></a>
		        <p class="name"><a href="/360buy/index.php/Goods/index" target="_blank" title="美的（midea）净化器KJ10F-NM">美的（midea）净化器KJ10F-NM</a></p>
		        <p class="price">美智价：<span class="goodsPrice">￥379元</span></p>
		      </div>
		      <div class="item" style="background: url(/360buy/public/themes/jindong/images/line_1.gif) repeat-x 0 bottom; padding:10px; width:190px; text-align:left;">
		        <a href="/360buy/index.php/Goods/index" target="_blank"><img style="width:50px; height:38px; float:left; margin-right:10px;" src="/360buy/public/images/201001/thumb_img/4713_thumb_G_1262436272956.jpg" alt="美的（midea）净化器KJ10F-NM" /></a>
		        <p class="name"><a href="/360buy/index.php/Goods/index" target="_blank" title="美的（midea）净化器KJ10F-NM">美的（midea）净化器KJ10F-NM</a></p>
		        <p class="price">美智价：<span class="goodsPrice">￥379元</span></p>
		      </div>
		      <div class="item" style="background: url(/360buy/public/themes/jindong/images/line_1.gif) repeat-x 0 bottom; padding:10px; width:190px; text-align:left;">
		        <a href="/360buy/index.php/Goods/index" target="_blank"><img style="width:50px; height:38px; float:left; margin-right:10px;" src="/360buy/public/images/201001/thumb_img/4713_thumb_G_1262436272956.jpg" alt="美的（midea）净化器KJ10F-NM" /></a>
		        <p class="name"><a href="/360buy/index.php/Goods/index" target="_blank" title="美的（midea）净化器KJ10F-NM">美的（midea）净化器KJ10F-NM</a></p>
		        <p class="price">美智价：<span class="goodsPrice">￥379元</span></p>
		      </div>
		    </div>
		  </div>
		</div>
      </div>
      <div id="globalBigRight">
        <h2 class="name" style="text-align:center; font-size:16px; font-family:宋体; margin-bottom:8px; font-weight:bold; position: relative">联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）      <span style="color:#F00">赠联想09款单肩包+鼠标!货量紧俏！</span>
          <div class="up_down">
            <a href="/360buy/index.php/Goods/index"><img alt="prev" src="/360buy/public/themes/jindong/images/up.gif" /></a>
          </div>
        </h2>
        <div id="itemAllInfo" class="globalModule">
          <div id="goodsInfo">
            <div id="itemPic">
              <a target="_blank" href="/360buy/public/images/201001/goods_img/4710_P_1262426233036.jpg" onclick="window.open('gallery.php?id=4710'); return false;" id="zoom1" class="MagicZoom MagicThumb" rel="zoom-width: 550px; zoom-height: 350px; zoom-position:right">
                <img src="/360buy/public/images/201001/goods_img/4710_G_1262426233567.jpg" style="width:350px; height:350px;" />
              </a>
              <div class="blank5"></div>
              <div class="clearfix">
                <span onmouseover="moveLeft()" onmousedown="clickLeft()" onmouseup="moveLeft()" onmouseout="scrollStop()"></span>
                <div class="gallery">
                  <div id="demo">
                    <div id="demo1" style="float:left">
                      <ul>
                        <li>
                          <a  href="/360buy/public/images/201001/goods_img/4710_P_1262426233036.jpg" rel="zoom1" rev="/360buy/public/images/201001/goods_img/4710_P_1262426233036.jpg" title="">
                            <img src="/360buy/public/images/201001/thumb_img/4710_thumb_P_1262426233252.jpg" alt="联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）" class="B_red" />
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div id="demo2" style="display:inline; overflow:visible;"></div>
                  </div>
                </div>
                <span onmouseover="moveRight()" onmousedown="clickRight()" onmouseup="moveRight()" onmouseout="scrollStop()" class="spanR"></span>
                <script>
			      function $(id){  
			        return (document.getElementById) ? document.getElementById(id): document.all[id]
			      }
			      
			      var boxwidth=150;//跟图片的实际尺寸相符
			      
			      var box=$("demo");
			      var obox=$("demo1");
			      var dulbox=$("demo2");
			      obox.style.width=obox.getElementsByTagName("li").length*boxwidth+'px';
			      dulbox.style.width=obox.getElementsByTagName("li").length*boxwidth+'px';
			      box.style.width=obox.getElementsByTagName("li").length*boxwidth*3+'px';
			      var canroll = false;
			      if (obox.getElementsByTagName("li").length >= 4) {
			        canroll = true;
			        dulbox.innerHTML=obox.innerHTML;
			      }
			      var step=5;temp=1;speed=50;
			      var awidth=obox.offsetWidth;
			      var mData=0;
			      var isStop = 1;
			      var dir = 1;
			      
			      function s(){
			        if (!canroll) return;
			        if (dir) {
			      if((awidth+mData)>=0)
			      {
			      mData=mData-step;
			      }
			      else
			      {
			      mData=-step;
			      }
			      } else {
			        if(mData>=0)
			        {
			        mData=-awidth;
			        }
			        else
			        {
			        mData+=step;
			        }
			      }
			      
			      obox.style.marginLeft=mData+"px";
			      
			      if (isStop) return;
			      
			      setTimeout(s,speed)
			      }
			      
			      
			      function moveLeft() {
			          var wasStop = isStop;
			          dir = 1;
			          speed = 50;
			          isStop=0;
			          if (wasStop) {
			            setTimeout(s,speed);
			          }
			      }
			      
			      function moveRight() {
			          var wasStop = isStop;
			          dir = 0;
			          speed = 50;
			          isStop=0;
			          if (wasStop) {
			            setTimeout(s,speed);
			          }
			      }
			      
			      function scrollStop() {
			        isStop=1;
			      }
			      
			      function clickLeft() {
			          var wasStop = isStop;
			          dir = 1;
			          speed = 25;
			          isStop=0;
			          if (wasStop) {
			            setTimeout(s,speed);
			          }
			      }
			      
			      function clickRight() {
			          var wasStop = isStop;
			          dir = 0;
			          speed = 25;
			          isStop=0;
			          if (wasStop) {
			            setTimeout(s,speed);
			          }
			      }
			     </script>
			   </div>
			   <div class="b_zoom v_m"><a href="javascript:;" onclick="window.open('gallery.php?id=4710'); return false;"><img src="/360buy/public/themes/jindong/images/zoom.gif" /> 点击查看大图</a></div>
			 </div>
		   </div>
		   <div id="itemInfoList">
		     <form action="javascript:addToCart(4710)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
		       <ul class="line" >
		         <li style="color:#999;">商品货号：SC004710</li>
		         <li>商品品牌：<a href="brand.php?id=236" >Lenovo（联想)</a></li>
		         <li>市 场 价：<span class="marketPrice">￥6119元</span></li>
		         <li>美 智 价：<span class="goodsPrice" id="ECS_SHOPPRICE">￥5099元</span></li>
		         <li>用户评价：<img src="/360buy/public/themes/jindong/images/stars5.gif" alt="comment rank 5" /></li>
		         <li>商品库存：有货</li>
		         <li>购买数量：<input name="number" type="text" id="number" value="1" size="4" onblur="changePrice()" style="border:1px solid #ccc; width:40px; height:18px; vertical-align:middle; padding-left:3px; "/></li>
		         <li>商品总价： <font id="ECS_GOODS_AMOUNT" class="goodsPrice"></font></li>
		       </ul>
		       <div style="clear:both"></div>
		       <ul>
		         <li id="itemBtnList">
		           <a href="/360buy/index.php/Action/index"><img src="/360buy/public/themes/jindong/images/btn_addcart.gif" alt="" /></a>
		           <a href="javascript:collect(4710)"><img src="/360buy/public/themes/jindong/images/btn_addfav.gif" alt="" /></a><a href="user.php?act=affiliate&amp;goodsid=4710"><img src="/360buy/public/themes/jindong/images/tuijian.gif" alt="" /></a>
		         </li>
		       </ul>
		     </form>
		   </div>
		 </div>
		 <div id="goods_right">
		   <div class="tab_box">
		     <div id="com_b" class="tab_title" style="padding: 0; height:27px; background:none; border-bottom:2px solid #be0000">
		       <h2>商品介绍</h2>
		       <h2 class="h2bg">规格参数</h2>
		       <h2 class="h2bg">商品标记</h2>
		     </div>
		     <div  id="com_v" class="boxCenterList RelaArticle"></div>
		     <div id="com_h" class="padd_box">
		     <blockquote>
		       <div>
		         <p>IdeaPad 新品以 <strong>全新时尚的家族</strong><strong>Family ID</strong><strong>设计</strong><strong>＋</strong><strong>尖端科技的娱乐应用设计</strong><strong>＋</strong><strong>体贴入微的人性关怀设计</strong>，在娱乐体验、多媒体享乐方面保持一贯的创新意识，给用户带来影音娱乐的时尚精品。</p>
		       </div>
		       <div><span style="font-size: 9pt; font-family: 宋体; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; mso-ansi-language: EN-US; mso-fareast-language: ZH-CN; mso-bidi-language: AR-SA; mso-font-kerning: 1.0pt">联想</span><span lang="EN-US" style="font-size: 9pt; font-family: Arial; mso-fareast-font-family: 宋体; mso-ansi-language: EN-US; mso-fareast-language: ZH-CN; mso-bidi-language: AR-SA; mso-font-kerning: 1.0pt">IdeaPad Y450</span><span style="font-size: 9pt; font-family: 宋体; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; mso-ansi-language: EN-US; mso-fareast-language: ZH-CN; mso-bidi-language: AR-SA; mso-font-kerning: 1.0pt">是主流</span><span lang="EN-US" style="font-size: 9pt; font-family: Arial; mso-fareast-font-family: 宋体; mso-ansi-language: EN-US; mso-fareast-language: ZH-CN; mso-bidi-language: AR-SA; mso-font-kerning: 1.0pt">14&rdquo;</span><span style="font-size: 9pt; font-family: 宋体; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; mso-ansi-language: EN-US; mso-fareast-language: ZH-CN; mso-bidi-language: AR-SA; mso-font-kerning: 1.0pt">轻薄笔记本的杰出代表，搭载英特尔</span><span lang="EN-US" style="font-size: 9pt; font-family: Arial; mso-fareast-font-family: 宋体; mso-ansi-language: EN-US; mso-fareast-language: ZH-CN; mso-bidi-language: AR-SA; mso-font-kerning: 1.0pt">MV</span><span style="font-size: 9pt; font-family: 宋体; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; mso-ansi-language: EN-US; mso-fareast-language: ZH-CN; mso-bidi-language: AR-SA; mso-font-kerning: 1.0pt">移动计算平台，采用</span><span lang="EN-US" style="font-size: 9pt; font-family: Arial; mso-fareast-font-family: 宋体; mso-ansi-language: EN-US; mso-fareast-language: ZH-CN; mso-bidi-language: AR-SA; mso-font-kerning: 1.0pt">14&rdquo; 16:9</span><span style="font-size: 9pt; font-family: 宋体; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; mso-ansi-language: EN-US; mso-fareast-language: ZH-CN; mso-bidi-language: AR-SA; mso-font-kerning: 1.0pt">黄金比例</span><span lang="EN-US" style="font-size: 9pt; font-family: Arial; mso-fareast-font-family: 宋体; mso-ansi-language: EN-US; mso-fareast-language: ZH-CN; mso-bidi-language: AR-SA; mso-font-kerning: 1.0pt">LED</span><span style="font-size: 9pt; font-family: 宋体; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; mso-ansi-language: EN-US; mso-fareast-language: ZH-CN; mso-bidi-language: AR-SA; mso-font-kerning: 1.0pt">背光液晶屏，不但整合了强大的影音、娱乐功能，同时带给用户耳目一新的操控乐趣。时尚外观强劲性能，满足用户对于时尚外观与丰富多媒体娱乐需求，是时尚性、便携性和娱乐性完美结合的产品，真正贴身娱乐伙伴。</span></div>
		       <p>
		         <table cellspacing="0" cellpadding="0" width="100%" border="0">
		           <tbody>
		             <tr valign="top">
		               <td align="left" width="100"><br />
		                 <img height="80" alt="" width="100" src="/360buy/public/images/201001/goods_img/4730_P_1262451940968.jpg" />
		               </td>
		               <td align="left" style="padding-right: 10px">
		                 <strong>
		                   <p><br />&nbsp;</p>
		                   <p><strong><br /><br />时尚潮流的Family ID &mdash;&mdash;流行风尚 个性潮流</strong></p>
		                 </strong>
		                 <br />
		                 <span lang="EN-US" style="font-size: 9pt; font-family: Arial; mso-fareast-font-family: 宋体; mso-ansi-language: EN-US; mso-fareast-language: ZH-CN; mso-bidi-language: AR-SA; mso-font-kerning: 1.0pt">从城市印象中衍生的六棱形图案错落于棕黑色机身之上，一抹闪亮的橙色勾勒出精致的轮廓,如此浑然一体的设计，尽现Handbag魅力。表面采用尖端材料处理工艺，皮质触感，彰显潮流与品位。掌托处色彩自由选择，钢琴白时尚而靓丽，金属灰沉稳而淡定。灵动的ideapad发光logo, 点亮此刻灵感。<font color="#ff0000"><font size="2">（</font><font size="2">注：名称所注颜色是指笔记本掌托和键盘的颜色。）</font></font></span>
		               </td>
		             </tr>
		           </tbody>
		         </table>
		         <br />
		         <table cellspacing="0" cellpadding="0" width="100%" border="0">
		           <tbody>
		             <tr valign="top">
		               <td align="left" width="100"><br />
		                 <img height="80" alt="" width="100" src="/360buy/public/images/201001/goods_img/4730_P_1262451940968.jpg" />
		               </td>
		               <td align="left" style="padding-right: 10px">
		                 <strong>
		                   <p><br />&nbsp;</p>
		                   <p><strong><br /><br />时尚潮流的Family ID &mdash;&mdash;流行风尚 个性潮流</strong></p>
		                 </strong>
		                 <br />
		                 <span lang="EN-US" style="font-size: 9pt; font-family: Arial; mso-fareast-font-family: 宋体; mso-ansi-language: EN-US; mso-fareast-language: ZH-CN; mso-bidi-language: AR-SA; mso-font-kerning: 1.0pt">从城市印象中衍生的六棱形图案错落于棕黑色机身之上，一抹闪亮的橙色勾勒出精致的轮廓,如此浑然一体的设计，尽现Handbag魅力。表面采用尖端材料处理工艺，皮质触感，彰显潮流与品位。掌托处色彩自由选择，钢琴白时尚而靓丽，金属灰沉稳而淡定。灵动的ideapad发光logo, 点亮此刻灵感。<font color="#ff0000"><font size="2">（</font><font size="2">注：名称所注颜色是指笔记本掌托和键盘的颜色。）</font></font></span>
		               </td>
		             </tr>
		           </tbody>
		         </table>
		         <br />
		         <table cellspacing="0" cellpadding="0" width="100%" border="0">
		           <tbody>
		             <tr valign="top">
		               <td align="left" width="100"><br />
		                 <img height="80" alt="" width="100" src="/360buy/public/images/201001/goods_img/4730_P_1262451940968.jpg" />
		               </td>
		               <td align="left" style="padding-right: 10px">
		                 <strong>
		                   <p><br />&nbsp;</p>
		                   <p><strong><br /><br />时尚潮流的Family ID &mdash;&mdash;流行风尚 个性潮流</strong></p>
		                 </strong>
		                 <br />
		                 <span lang="EN-US" style="font-size: 9pt; font-family: Arial; mso-fareast-font-family: 宋体; mso-ansi-language: EN-US; mso-fareast-language: ZH-CN; mso-bidi-language: AR-SA; mso-font-kerning: 1.0pt">从城市印象中衍生的六棱形图案错落于棕黑色机身之上，一抹闪亮的橙色勾勒出精致的轮廓,如此浑然一体的设计，尽现Handbag魅力。表面采用尖端材料处理工艺，皮质触感，彰显潮流与品位。掌托处色彩自由选择，钢琴白时尚而靓丽，金属灰沉稳而淡定。灵动的ideapad发光logo, 点亮此刻灵感。<font color="#ff0000"><font size="2">（</font><font size="2">注：名称所注颜色是指笔记本掌托和键盘的颜色。）</font></font></span>
		               </td>
		             </tr>
		           </tbody>
		         </table>
		         <br />
		         <table cellspacing="0" cellpadding="0" width="100%" border="0">
		           <tbody></tbody>
		         </table>
		       </p>
		       <p>
		         <table cellspacing="0" cellpadding="0" width="100%" border="0" style="padding-right: 10px; padding-left: 10px">
		           <tbody>
		             <tr>
		               <td>
		                 <div style="padding-bottom: 12px; padding-top: 5px"><font size="4"><strong>体贴人性完美体验</strong><strong>――</strong><strong>丰富多彩的人性化易用设计</strong></font></div>
		               </td>
		             </tr>
		             <tr>
		               <td>&nbsp;</td>
		             </tr>
		             <tr>
		               <td>
		                 <table cellspacing="0" cellpadding="0" border="0">
		                   <tbody>
		                     <tr>
		                       <td valign="top" align="left" width="97"><img height="81" alt="" width="87" src="/360buy/public/images/201001/goods_img/4730_P_1262451940968.jpg" /></td>
		                       <td valign="top"><strong><strong>Multi-Touch触控板－精彩体验 指尖触控</strong> </strong>
		                         <br />采用Multi-Touch鼠标触控板，支持多点触控技术，通过手势画圈动作可实现诸如网页浏览等翻页滚屏功能，通过两根手指的分离或靠拢可实现图片浏览的放大或缩小，感受全线的操控体验。
		                       </td>
		                     </tr>
		                   </tbody>
		                 </table>
		               </td>
		             </tr>
		             <tr>
		               <td>
		                 <table cellspacing="0" cellpadding="0" width="100%" border="0">
		                   <tbody>
		                     <tr>
		                       <td colspan="3"><img height="10" alt="" width="1" oldoldclass="display-img" src="ImgUpload/20091117/20091117155050470998.gif" /></td>
		                     </tr>
		                     <tr>
		                       <td width="39"><img height="1" alt="" width="39" src="ImgUpload/20091117/20091117155050923997.gif" /></td>
		                       <td bgcolor="#c7d3df"><img height="1" alt="" width="1" oldoldclass="display-img" src="ImgUpload/20091117/20091117155050470998.gif" /></td>
		                       <td width="39"><img height="1" alt="" width="39" src="ImgUpload/20091117/20091117155051610995.gif" /></td>
		                     </tr>
		                     <tr>
		                       <td colspan="3"><img height="10" alt="" width="1" oldoldclass="display-img" src="ImgUpload/20091117/20091117155050470998.gif" /></td>
		                     </tr>
		                   </tbody>
		                 </table>
		               </td>
		             </tr>
		             <tr>
		               <td>
		                 <table cellspacing="0" cellpadding="0" border="0">
		                   <tbody>
		                     <tr>
		                       <td valign="top" align="left" width="97"><img height="81" alt="" width="87" src="/360buy/public/images/201001/goods_img/4730_P_1262451940968.jpg" /></td>
		                       <td valign="top"><strong><strong>Multi-Touch触控板－精彩体验 指尖触控</strong> </strong>
		                         <br />采用Multi-Touch鼠标触控板，支持多点触控技术，通过手势画圈动作可实现诸如网页浏览等翻页滚屏功能，通过两根手指的分离或靠拢可实现图片浏览的放大或缩小，感受全线的操控体验。
		                       </td>
		                     </tr>
		                   </tbody>
		                 </table>
		               </td>
		             </tr>
		             <tr>
		               <td>
		                 <table cellspacing="0" cellpadding="0" width="100%" border="0">
		                   <tbody>
		                     <tr>
		                       <td colspan="3"><img height="10" alt="" width="1" oldoldclass="display-img" src="ImgUpload/20091117/20091117155050470998.gif" /></td>
		                     </tr>
		                     <tr>
		                       <td width="39"><img height="1" alt="" width="39" src="ImgUpload/20091117/20091117155050923997.gif" /></td>
		                       <td bgcolor="#c7d3df"><img height="1" alt="" width="1" oldoldclass="display-img" src="ImgUpload/20091117/20091117155050470998.gif" /></td>
		                       <td width="39"><img height="1" alt="" width="39" src="ImgUpload/20091117/20091117155051610995.gif" /></td>
		                     </tr>
		                     <tr>
		                       <td colspan="3"><img height="10" alt="" width="1" oldoldclass="display-img" src="ImgUpload/20091117/20091117155050470998.gif" /></td>
		                     </tr>
		                   </tbody>
		                 </table>
		               </td>
		             </tr>
		             <tr>
		               <td>
		                 <table cellspacing="0" cellpadding="0" border="0">
		                   <tbody>
		                     <tr>
		                       <td valign="top" align="left" width="97"><img height="81" alt="" width="87" src="/360buy/public/images/201001/goods_img/4730_P_1262451940968.jpg" /></td>
		                       <td valign="top"><strong><strong>Multi-Touch触控板－精彩体验 指尖触控</strong> </strong>
		                         <br />采用Multi-Touch鼠标触控板，支持多点触控技术，通过手势画圈动作可实现诸如网页浏览等翻页滚屏功能，通过两根手指的分离或靠拢可实现图片浏览的放大或缩小，感受全线的操控体验。
		                       </td>
		                     </tr>
		                   </tbody>
		                 </table>
		               </td>
		             </tr>
		             <tr>
		               <td>
		                 <table cellspacing="0" cellpadding="0" width="100%" border="0">
		                   <tbody>
		                     <tr>
		                       <td colspan="3"><img height="10" alt="" width="1" oldoldclass="display-img" src="ImgUpload/20091117/20091117155050470998.gif" /></td>
		                     </tr>
		                     <tr>
		                       <td width="39"><img height="1" alt="" width="39" src="ImgUpload/20091117/20091117155050923997.gif" /></td>
		                       <td bgcolor="#c7d3df"><img height="1" alt="" width="1" oldoldclass="display-img" src="ImgUpload/20091117/20091117155050470998.gif" /></td>
		                       <td width="39"><img height="1" alt="" width="39" src="ImgUpload/20091117/20091117155051610995.gif" /></td>
		                     </tr>
		                     <tr>
		                       <td colspan="3"><img height="10" alt="" width="1" oldoldclass="display-img" src="ImgUpload/20091117/20091117155050470998.gif" /></td>
		                     </tr>
		                   </tbody>
		                 </table>
		               </td>
		             </tr>
		           </tbody>
		         </table>
		         <br />
		         &nbsp;
		       </p>
		     </blockquote>
		     <blockquote>
		       <table class="shuxin_tab" width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#cccccc">
		       </table>
		     </blockquote>
		     <blockquote>
		       <form name="tagForm" action="javascript:;" onsubmit="return submitTag(this)" id="tagForm">
		         <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">&nbsp;
		         </table>
		         <p id="ECS_TAGS"></p>
		         <p>
		           <input type="text" name="tag" id="tag" class="textInput" />
		           <input type="submit" value="添加我的标记" />
		           <input type="hidden" name="goods_id" value="4710" />
		         </p>
		       </form>
		     </blockquote>
		   </div>
		 </div>
		 <script type="text/javascript">reg("com");</script>
		 <div style="clear:both"></div>
		 <div id="ECS_COMMENT" class="globalModule tab_box">
		   <div id="globalComments">
		     <div class="tab_title"><h3>用户评论</h3></div>
		     <div id="globalComments" class="com_v">
		       <table border="0" width="100%">
		         <tr>
		           <th width="500"><img src="/360buy/public/themes/jindong/images/biao3.gif" /> 匿名用户<span class="textTime">( 2012-05-29 15:09:03 )</span></th>
		           <td><img src="/360buy/public/themes/jindong/images/biao5.gif" />给出 <img src="/360buy/public/themes/jindong/images/stars5.gif" alt="" /> 评价</td>
		         </tr>
		         <tr>
		           <td colspan="2" class="commentsContent" style="padding-left:41px;">用几年就得了，还想用多久啊</td>
		         </tr>
		         <tr>
		           <td colspan="2" class="commentsLine"><img src="/360buy/public/themes/jindong/images/1px.gif"></td>
		         </tr>
		         <tr>
		           <th width="500"><img src="/360buy/public/themes/jindong/images/biao3.gif" /> 匿名用户<span class="textTime">( 2012-05-29 15:09:03 )</span></th>
		           <td><img src="/360buy/public/themes/jindong/images/biao5.gif" />给出 <img src="/360buy/public/themes/jindong/images/stars5.gif" alt="" /> 评价</td>
		         </tr>
		         <tr>
		           <td colspan="2" class="commentsContent" style="padding-left:41px;">用几年就得了，还想用多久啊</td>
		         </tr>
		         <tr>
		           <td colspan="2" class="commentsLine"><img src="/360buy/public/themes/jindong/images/1px.gif"></td>
		         </tr>
		         <tr>
		           <th width="500"><img src="/360buy/public/themes/jindong/images/biao3.gif" /> 匿名用户<span class="textTime">( 2012-05-29 15:09:03 )</span></th>
		           <td><img src="/360buy/public/themes/jindong/images/biao5.gif" />给出 <img src="/360buy/public/themes/jindong/images/stars5.gif" alt="" /> 评价</td>
		         </tr>
		         <tr>
		           <td colspan="2" class="commentsContent" style="padding-left:41px;">用几年就得了，还想用多久啊</td>
		         </tr>
		         <tr>
		           <td colspan="2" class="commentsLine"><img src="/360buy/public/themes/jindong/images/1px.gif"></td>
		         </tr>
		       </table>
		       <div id="pager" class="clearfix">
		         <span style="float:left">总计 2 个记录，共 1 页。</span>
		         <span style="float:right"><a href="javascript:gotoPage(1,4710,0)">第一页</a> <a href="javascript:;">上一页</a> <a href="javascript:;">下一页</a> <a href="javascript:;">最末页</a> </span>
		       </div>
		       <div style="clear:both"></div>
		     </div>
		     <div class="tab_title"><h3>我要评论</h3></div>
		     <div class="com_v">
		       <form action="javascript:;" onsubmit="submitComment(this)" method="post" name="commentForm" id="commentForm">
		         <table border="0">
		           <tr>
		             <th>用户名</th>
		             <td>匿名用户</td>
		             <td rowspan="4" valign="top">
		               <textarea name="content" cols="45" rows="5"></textarea>
		             </td>
		           </tr>
		           <tr>
		             <th>电子邮件地址</th>
		             <td><input name="email" type="text" id="email" size="30" maxlength="100" value="" class="textInput" /></td>
		           </tr>
		           <tr>
		             <th>评价等级</th>
		             <td>
		               <input name="comment_rank" type="radio" value="1" id="comment_rank1" /> <label for="comment_rank1">1</label>
		               <input name="comment_rank" type="radio" value="2" id="comment_rank2" /> <label for="comment_rank2">2</label>
		               <input name="comment_rank" type="radio" value="3" id="comment_rank3" /> <label for="comment_rank3">3</label>
		               <input name="comment_rank" type="radio" value="4" id="comment_rank4" /> <label for="comment_rank4">4</label>
		               <input name="comment_rank" type="radio" value="5" checked="checked" id="comment_rank5" /> <label for="comment_rank5">5</label>
		             </td>
		           </tr>
		           <tr>
		             <th>验证码</th>
		             <td>
		               <input type="text" size="8" name="captcha" class="textInput vAlign" />
		               <img src="" alt="captcha" style="cursor:pointer;" onClick="this.src='captcha.php?'+Math.random()" class="vAlign" />
		             </td>
		           </tr>
		           <tr>
		             <th>&nbsp;</th>
		             <td></td>
		             <td>
		               <input type="hidden" name="cmt_type" value="0" />
		               <input type="hidden" name="id" value="4710" />
		               <input type="image" src="/360buy/public/themes/jindong/images/button_08.jpg" />
		             </td>
		           </tr>
		         </table>
		       </form>
		     </div>
		   </div>
		 </div>
	   </div>
	 </div>
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
   <div id="tag_box" style="z-index:9999; position:absolute;top:100px; right:5px;"></div>
 </body>
</html>