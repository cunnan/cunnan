<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBliC "-//W3C//dtD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/dtD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
  <head>
    <title>京东网上商城-综合网购首选</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
	<!--
	.age_box a{float: left; height:22px; line-height:22px; width:70px; background:url(/php/360buy/public/themes/jindong/images/biao6.gif) 0 center no-repeat; padding-left:10px;font-family:arial, Helvetica, sans-serif;color:#333333}
	.brand_img{ width:88px; height:31px; border:1px solid #efefef; float:left; margin:4px 5px;}
	-->
	</style>
    <script type="text/javascript" src="/php/360buy/public/js/index.js"></script>
    <script type="text/javascript" src="/php/360buy/public/js/transport.js"></script>
    <link href="/php/360buy/public/themes/jindong/stye1024.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript">
	    var swf_width=766;
	    var swf_height=120;
		
		  var email = document.getElementById('user_email');
		  
		  function rep_add_email_list(text)
		  {
		    alert(text);
		  }
		  function rep_cancel_email_list(text)
		  {
		    alert(text);
		  }
		  function check_email()
		  {
		    if (Utils.isEmail(email.value))
		    {
		      return true;
		    }
		    else
		    {
		      alert('邮件地址非法！');
		      return false;
		    }
		  }
		  function Marquee()
		  {
		  	this.ID = document.getElementById(arguments[0]);
		  	this.Direction = arguments[1];
		  	this.Step = arguments[2];
		  	this.Width = arguments[3];
		  	this.Height = arguments[4];
		  	this.Timer = arguments[5];
		  	this.WaitTime = arguments[6];
		  	this.StopTime = arguments[7];
		  	if(arguments[8])
		  		this.ScrollStep = arguments[8]
		  	else
		  		this.ScrollStep = this.Direction>1 ? this.Width : this.Height;
		  	this.CTL = this.StartID = this.Stop = this.MouseOver = 0;
		  	this.ID.style.overflowX = this.ID.style.overflowY = "hidden";
		  	this.ID.noWrap = true;
		  	this.ID.style.width = this.Width;
		  	this.ID.style.height = this.Height;
		  	this.ClientScroll = this.Direction>1 ? this.ID.scrollWidth : this.ID.scrollHeight;
		  	this.ID.innerHTML += this.ID.innerHTML;
		  	this.Start(this,this.Timer,this.WaitTime,this.StopTime);
		  }
		  Marquee.prototype.Start = function(msobj,timer,waittime,stoptime)
		  {
		  	msobj.StartID = function(){msobj.Scroll()}
		  	msobj.Continue = function()
		  				{
		  					if(msobj.MouseOver == 1)
		  					{
		  						setTimeout(msobj.Continue,waittime);
		  					}
		  					else
		  					{	clearInterval(msobj.TimerID);
		  						msobj.CTL = msobj.Stop = 0;
		  						msobj.TimerID = setInterval(msobj.StartID,timer);
		  					}
		  				}
		  	msobj.Pause = function()
		  			{
		  				msobj.Stop = 1;
		  				clearInterval(msobj.TimerID);
		  				setTimeout(msobj.Continue,waittime);
		  			}
		  	msobj.Begin = function()
		  	{
		  		msobj.TimerID = setInterval(msobj.StartID,timer);
		  		msobj.ID.onmouseover = function()
		  					{
		  						msobj.MouseOver = 1;
		  						clearInterval(msobj.TimerID);
		  					}
		  		msobj.ID.onmouseout = function()
		  					{
		  						msobj.MouseOver = 0;
		  						if(msobj.Stop == 0)
		  						{
		  							clearInterval(msobj.TimerID);
		  							msobj.TimerID = setInterval(msobj.StartID,timer);
		  						}
		  					}
		  	}
		  	setTimeout(msobj.Begin,stoptime);
		  }
		  Marquee.prototype.Scroll = function()
		  {
		  	switch(this.Direction)
		  	{
		  		case 0:
		  			this.CTL += this.Step;
		  			if(this.CTL >= this.ScrollStep && this.WaitTime > 0)
		  			{
		  				this.ID.scrollTop += this.ScrollStep + this.Step - this.CTL;
		  				this.Pause();
		  				return;
		  			}
		  			else
		  			{   
		  				if(this.ID.scrollTop >= this.ClientScroll)
		  				{
		  					this.ID.scrollTop -= this.ClientScroll;
		  				}
		  				this.ID.scrollTop += this.Step;
		  			}
		  		break;
		  		case 1:
		  			this.CTL += this.Step;
		  			if(this.CTL >= this.ScrollStep && this.WaitTime > 0)
		  			{
		  				this.ID.scrollTop -= this.ScrollStep + this.Step - this.CTL;
		  				this.Pause();
		  				return;
		  			}
		  			else
		  			{
		  				if(this.ID.scrollTop <= 0)
		  				{
		  					this.ID.scrollTop += this.ClientScroll;
		  				}
		  				this.ID.scrollTop -= this.Step;
		  			}
		  		break;
		  		case 2:
		  			this.CTL += this.Step;
		  			if(this.CTL >= this.ScrollStep && this.WaitTime > 0)
		  			{
		  				this.ID.scrollLeft += this.ScrollStep + this.Step - this.CTL;
		  				this.Pause();
		  				return;
		  			}
		  			else
		  			{
		  				if(this.ID.scrollLeft >= this.ClientScroll)
		  				{
		  					this.ID.scrollLeft -= this.ClientScroll;
		  				}
		  				this.ID.scrollLeft += this.Step;
		  			}
		  		break;
		  		case 3:
		  			this.CTL += this.Step;
		  			if(this.CTL >= this.ScrollStep && this.WaitTime > 0)
		  			{
		  				this.ID.scrollLeft -= this.ScrollStep + this.Step - this.CTL;
		  				this.Pause();
		  				return;
		  			}
		  			else
		  			{
		  				if(this.ID.scrollLeft <= 0)
		  				{
		  					this.ID.scrollLeft += this.ClientScroll;
		  				}
		  				this.ID.scrollLeft -= this.Step;
		  			}
		  		break;
		  	}
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
              <a style="float:right; background:url(/php/360buy/public/themes/jindong/images/biao.gif) 55px center no-repeat; padding-right:23px;display:block; line-height:29px;"  class=alk 
              onmouseover="show_menu('float_menu2','c_fship_c')"
              onmouseout="hide_menu('float_menu2','c_fship_c')"
              href="#"  target=_self>客服中心</a>
              <div id=float_menu2 onMouseOver="show_menu('float_menu2','c_fship_c')" style="border: #ccc 1px solid; border-top:none;DISPLaY: none; Z-INDEX: 20; LEFT: 0px; top:0; WIdtH:70px; padding:0 0 5px 8px;POSITION: absolute;" 
              onmouseout="hide_menu('float_menu2','c_fship_c')">
                <ul class=cship_list>
			      <li style="padding-bottom:7px; padding-top:5px;"><a target="_blank" href="user.php">客服中心</a> </li>
			      <li><a target="_blank" href="/php/360buy/index.php/User/index">会员后台</a> </li>
			      <li><a target="_blank" href="/php/360buy/index.php/User/order">我的订单</a> </li>
			      <li><a target="_blank" href="/php/360buy/index.php/User/message">我的留言</a> </li>
                </ul>
              </div>
            </dt>
            <dd></dd>
          </dl>
          </div>
          <div style="float:right; _padding-top:9px; background: url(/php/360buy/public/themes/jindong/images/nav_bg2.gif) 0 top no-repeat; height:29px; padding-left:28px;">
            <a href="/php/360buy/index.php/Promotion/index"  >今日特价</a> <img style="vertical-align:middle" src="/php/360buy/public/themes/jindong/images/nav_li.gif">
            <a href="#"  >极品源码</a> <img style="vertical-align:middle" src="/php/360buy/public/themes/jindong/images/nav_li.gif">
            <a href="/php/360buy/index.php/Cart/index"  >查看购物车</a> <img style="vertical-align:middle" src="/php/360buy/public/themes/jindong/images/nav_li.gif">
            <a href="/php/360buy/index.php/Quotation/index"  >报价单</a> <img style="vertical-align:middle" src="/php/360buy/public/themes/jindong/images/nav_li.gif">
          </div>
          <div  style="float:right; color:#acacac; padding-right:15px;">
            <script type="text/javascript" src="/php/360buy/public/js/transport.js"></script>
            <script type="text/javascript" src="/php/360buy/public/js/utils.js"></script>
            <font id="ECS_MEMBERZONE">您好，欢迎您光临万联商城！
              <a href="/php/360buy/index.php/Login/index">[请登录]</a>
              <span>，新用户？</span>
              <a style="color:#ff6600" href="/php/360buy/index.php/Register/index">[免费注册]</a>
            </font>
          </div>
        </ul>
        <p id="logo"><img style="float:left" src="/php/360buy/public/themes/jindong/images/logo.gif"/></a></p>
      </div>
      <div id="globalNav">
        <ul>
          <?php if($pageName == index): ?><li><a href="/php/360buy/index.php/Index/index" class="cur">首页</a></li>
          <?php else: ?>
          <li><a href="/php/360buy/index.php/Index/index">首页</a></li><?php endif; ?>
          <?php if($pageName == category1): ?><li><a href="/php/360buy/index.php/Category/index/id/1" class="cur">服饰鞋帽</a></li>
          <?php else: ?>
          <li><a href="/php/360buy/index.php/Category/index/id/1"  >服饰鞋帽</a></li><?php endif; ?>
          <?php if($pageName == auction): ?><li><a href="/php/360buy/index.php/Auction/index" target="_blank" class="cur">夺宝岛</a></li>
          <?php else: ?>
          <li><a href="/php/360buy/index.php/Auction/index" target="_blank"  >夺宝岛</a></li><?php endif; ?>
          <?php if($pageName == Diy): ?><li><a href="/php/360buy/index.php/Diy/index" class="cur">装机大师</a></li>
          <?php else: ?>
          <li><a href="/php/360buy/index.php/Diy/index">装机大师</a></li><?php endif; ?>
          <?php if($pageName == Message): ?><li><a href="/php/360buy/index.php/Message/index" class="cur">留言板</a></li>
          <?php else: ?>
          <li><a href="/php/360buy/index.php/Message/index">留言板</a></li><?php endif; ?>
          <?php if($pageName == category2): ?><li><a href="/php/360buy/index.php/Category/index/id/2" class="cur">汽车用品</a></li>
          <?php else: ?>
          <li><a href="/php/360buy/index.php/Category/index/id/2"  >汽车用品</a></li><?php endif; ?>
          <?php if($pageName == category3): ?><li><a href="/php/360buy/index.php/Category/index/id/3" class="cur">展销会专栏</a></li>
          <?php else: ?>
          <li><a href="/php/360buy/index.php/Category/index/id/3"  >展销会专栏</a></li><?php endif; ?>
        </ul>
      </div>
      <div id="globalSearch">
        <img style="position:absolute; left:0;" src="/php/360buy/public/themes/jindong/images/search_box_l.gif">
        <img  style="position:absolute; right:0;" src="/php/360buy/public/themes/jindong/images/search_box_r.gif">
        <form id="searchForm" name="searchForm" method="post" action="/php/360buy/index.php/Search/index" onSubmit="return checkSearchForm()" style="background:#99CC00; padding-left:13px;">
          <div class="search_left">
            <input style="float:left;" name="keywords" type="text" id="keyword" value="请输入商品关键字" onclick="javascript:this.value='';this.style.color='#333333';" />
            <input type="image" src="/php/360buy/public/themes/jindong/images/search.gif" style="float:left" />
            <span class="key2">热门搜索 ：
              <a target="_blank" style=" color:#ffcccc" href="/php/360buy/index.php/Search/index">品牌日用品</a>
              <a target="_blank" style=" color:#ffcccc" href="/php/360buy/index.php/Search/index">品牌服装</a>
            </span>
          </div>
          <div class="search_right">
            <div class="buy_car_bg clearfix" id="ECS_CaRTINFO" >
              <a href="/php/360buy/index.php/Cart/index">
                <span>购物车中有<b>0</b>件商品</span>
                <ul class="car_ul">
                <a href="#" style="color:#999; padding-left:30px;">您的购物车暂无商品 赶快选择心爱的商品吧</a>
                </ul>
              </a>
            </div>
            <a href="/php/360buy/index.php/Cart/flow"><img src="/php/360buy/public/themes/jindong/images/qujiesuan.gif"></a>
          </div>
        </form>
      </div>
      
      
      <div class="p_w" style="clear:both; overflow:hidden"></div>
      <div id="globalLeft">
        <div id="o-search" style="bottom:50px;">
          <div class="allsort">
            <div class="mt">
              <strong><a href="/php/360buy/index.php/Catalog/index">全部商品分类</a></strong>
              <div class="extra">&nbsp;</div>
            </div>
            <div class="mc">
              <!-- 左上动态菜单 -->
              <div class="item  fore" onMouseOver="this.className='item  fore  hover';"  onMouseOut="this.className='item  fore';">
                <span>
                  <h3><a href="category.php?id=355">展销会专栏</a></h3>
                  <s></s>
                </span>
                <div class="i-mc">
                  <div class="subitem">
                    <dl  class="fore" >
                      <dt><a href="category.php?id=356">红酒</a></dt>
                      <dd>
                        <em><a href="category.php?id=363">长城干红系列</a></em>
                        <em><a href="category.php?id=356">更多&gt;&gt;</a></em>
                      </dd>
                    </dl>
                  </div>
                  <div class="fr">
				    <dl class="brands">
				      <dt>推荐品牌</dt>
				      <dd> 
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				      </dd>
				    </dl>
				  </div>
                </div>
              </div>
              <div class="item  fore" onMouseOver="this.className='item  fore  hover';"  onMouseOut="this.className='item  fore';">
                <span>
                  <h3><a href="category.php?id=355">展销会专栏</a></h3>
                  <s></s>
                </span>
                <div class="i-mc">
                  <div class="subitem">
                    <dl  class="fore" >
                      <dt><a href="category.php?id=356">红酒</a></dt>
                      <dd>
                        <em><a href="category.php?id=363">长城干红系列</a></em>
                        <em><a href="category.php?id=356">更多&gt;&gt;</a></em>
                      </dd>
                    </dl>
                  </div>
                  <div class="fr">
				    <dl class="brands">
				      <dt>推荐品牌</dt>
				      <dd> 
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				      </dd>
				    </dl>
				  </div>
                </div>
              </div>
              <div class="item  fore" onMouseOver="this.className='item  fore  hover';"  onMouseOut="this.className='item  fore';">
                <span>
                  <h3><a href="category.php?id=355">展销会专栏</a></h3>
                  <s></s>
                </span>
                <div class="i-mc">
                  <div class="subitem">
                    <dl  class="fore" >
                      <dt><a href="category.php?id=356">红酒</a></dt>
                      <dd>
                        <em><a href="category.php?id=363">长城干红系列</a></em>
                        <em><a href="category.php?id=356">更多&gt;&gt;</a></em>
                      </dd>
                    </dl>
                  </div>
                  <div class="fr">
				    <dl class="brands">
				      <dt>推荐品牌</dt>
				      <dd> 
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				      </dd>
				    </dl>
				  </div>
                </div>
              </div>
              <div class="item  fore" onMouseOver="this.className='item  fore  hover';"  onMouseOut="this.className='item  fore';">
                <span>
                  <h3><a href="category.php?id=355">展销会专栏</a></h3>
                  <s></s>
                </span>
                <div class="i-mc">
                  <div class="subitem">
                    <dl  class="fore" >
                      <dt><a href="category.php?id=356">红酒</a></dt>
                      <dd>
                        <em><a href="category.php?id=363">长城干红系列</a></em>
                        <em><a href="category.php?id=356">更多&gt;&gt;</a></em>
                      </dd>
                    </dl>
                  </div>
                  <div class="fr">
				    <dl class="brands">
				      <dt>推荐品牌</dt>
				      <dd> 
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				      </dd>
				    </dl>
				  </div>
                </div>
              </div>
              <div class="extra">
                <a href="/php/360buy/index.php/Catalog/index">全部商品分类</a>
              </div>
            </div>
          </div>
        </div>
        <div class="blank"></div>
        <div id="brandlist" class="globalModule" style="margin-top:355px;">
          <h3><div id="list_t_l"><div id="list_t_r"><b>按年龄查询</b></div></div></h3>
          <div id="global_box">
            <div style="clear:both"></div>
              <div class="age_box">
                <a target="_blank" href="#">出生-12个月</a>
                <a target="_blank" href="#">12-24个月</a>
                <a target="_blank" href="#">2岁</a>
                <a target="_blank" href="#">3-4岁</a>
                <a target="_blank" href="#">5-7岁</a>
                <a target="_blank" href="#">8-11岁</a>
                <a target="_blank" href="#">12-14岁</a>
                <a target="_blank" href="#">15岁以上</a>
              </div>
            </div>
          </div>
          <div class="blank"></div>
          <div id="brandlist" class="globalModule">
            <h3><div id="list_t_l"><div id="list_t_r"><b>品牌专卖店</b></div></div></h3>
            <div id="global_box">
              <div style="clear:both"></div>
              <a href="/php/360buy/index.php/Brand/brand"><img class="brand_img" src="/php/360buy/public/data/brandlogo/1261024702576255018.jpg" alt="苹果 (1)" /></a>
              <a href="/php/360buy/index.php/Brand/brand"><img class="brand_img" src="/php/360buy/public/data/brandlogo/1261024702576255018.jpg" alt="苹果 (1)" /></a>
              <a href="/php/360buy/index.php/Brand/brand"><img class="brand_img" src="/php/360buy/public/data/brandlogo/1261024702576255018.jpg" alt="苹果 (1)" /></a>
              <a href="/php/360buy/index.php/Brand/brand"><img class="brand_img" src="/php/360buy/public/data/brandlogo/1261024702576255018.jpg" alt="苹果 (1)" /></a>
              <a href="/php/360buy/index.php/Brand/brand"><img class="brand_img" src="/php/360buy/public/data/brandlogo/1261024702576255018.jpg" alt="苹果 (1)" /></a>
              <a href="/php/360buy/index.php/Brand/brand"><img class="brand_img" src="/php/360buy/public/data/brandlogo/1261024702576255018.jpg" alt="苹果 (1)" /></a>
              <a href="/php/360buy/index.php/Brand/brand"><img class="brand_img" src="/php/360buy/public/data/brandlogo/1261024702576255018.jpg" alt="苹果 (1)" /></a>
              <a href="/php/360buy/index.php/Brand/brand"><img class="brand_img" src="/php/360buy/public/data/brandlogo/1261024702576255018.jpg" alt="苹果 (1)" /></a>
              <a href="/php/360buy/index.php/Brand/brand"><img class="brand_img" src="/php/360buy/public/data/brandlogo/1261024702576255018.jpg" alt="苹果 (1)" /></a>
              <a href="/php/360buy/index.php/Brand/brand"><img class="brand_img" src="/php/360buy/public/data/brandlogo/1261024702576255018.jpg" alt="苹果 (1)" /></a>
              <a href="/php/360buy/index.php/Brand/brand"><img class="brand_img" src="/php/360buy/public/data/brandlogo/1261024702576255018.jpg" alt="苹果 (1)" /></a>
              <a href="/php/360buy/index.php/Brand/brand"><img class="brand_img" src="/php/360buy/public/data/brandlogo/1261024702576255018.jpg" alt="苹果 (1)" /></a>
              <div style="clear:both"></div>
              <p class="more"><a href="/php/360buy/index.php/Brand/index"> 更多>></a></p>
            </div>
          </div>
          <div class="blank"></div>
          <table cellpadding="0" cellspacing="0" width="100%" style="margin:6px 0 0 0;">
            <tr>
              <td style="padding-bottom:5px;">
                <a href='#' target='_blank'><img src='/php/360buy/public/data/afficheimg/1284142905922427409.jpg' width='211' height='90' border='0' /></a>
              </td>
            </tr>
          </table>
          <div class="blank"></div>
          <div class="globalModule">
            <h3><div id="list_t_l"><div id="list_t_r"><b>用户评论</b></div></div></h3>
            <div id="global_box">
            <div style="clear:both"></div>
            <!-- 评论 -->
            <div style="border-bottom:1px solid #efefef; line-height:21px; padding-bottom:5px; margin:0 4px;">
              <b style="color:#fe9900">[评论]</b>
              <a style=" color:#005ba0;" href="/php/360buy/index.php/Goods/index" title="aMD athlonII×2（速龙II双核）250盒装CPU（Socket aM3/3.0GHz/2M二级缓存/45纳米）" target="_blank">aMD athlonII×2（速龙II双核）250盒装CPU（S...</a>
              <div style="clear:both"></div>
              <a href="/php/360buy/index.php/Goods/index" title="aMD athlonII×2（速龙II双核）250盒装CPU（Socket aM3/3.0GHz/2M二级缓存/45纳米）" target="_blank">
                <img alt="aMD athlonII×2（速龙II双核）250盒装CPU（Socket aM3/3.0GHz/2M二级缓存/45纳米）" src="/php/360buy/public/images/201001/thumb_img/4738_thumb_G_1262821000118.jpg" style="width:50px; height:50px; float:left; padding-right:7px; " >
              </a>
              <a href="/php/360buy/index.php/Goods/index" title="aMD athlonII×2（速龙II双核）250盒装CPU（Socket aM3/3.0GHz/2M二级缓存/45纳米）" target="_blank">我现在的电脑就用这个，这里比我买的便宜。</a>
              <div style="clear:both"></div>
              <span style=" color:#12a000">2010-01-29 07:02:59</span>
            </div>
            <div style="border-bottom:1px solid #efefef; line-height:21px; padding-bottom:5px; margin:0 4px;">
              <b style="color:#fe9900">[评论]</b>
              <a style=" color:#005ba0;" href="/php/360buy/index.php/Goods/index" title="aMD athlonII×2（速龙II双核）250盒装CPU（Socket aM3/3.0GHz/2M二级缓存/45纳米）" target="_blank">aMD athlonII×2（速龙II双核）250盒装CPU（S...</a>
              <div style="clear:both"></div>
              <a href="/php/360buy/index.php/Goods/index" title="aMD athlonII×2（速龙II双核）250盒装CPU（Socket aM3/3.0GHz/2M二级缓存/45纳米）" target="_blank">
                <img alt="aMD athlonII×2（速龙II双核）250盒装CPU（Socket aM3/3.0GHz/2M二级缓存/45纳米）" src="/php/360buy/public/images/201001/thumb_img/4738_thumb_G_1262821000118.jpg" style="width:50px; height:50px; float:left; padding-right:7px; " >
              </a>
              <a href="/php/360buy/index.php/Goods/index" title="aMD athlonII×2（速龙II双核）250盒装CPU（Socket aM3/3.0GHz/2M二级缓存/45纳米）" target="_blank">我现在的电脑就用这个，这里比我买的便宜。</a>
              <div style="clear:both"></div>
              <span style=" color:#12a000">2010-01-29 07:02:59</span>
            </div>
            <div style="clear:both"></div>
            <p class="more"><a target="_blank" href="message.php"> 更多>></a></p>
            </div>
          </div>
          <div class="blank"></div>
          <table cellpadding="0" cellspacing="0" width="100%" style="margin:6px 0 0 0;">
            <tr>
              <td style="padding-bottom:5px;">
                <a href='#' target='_blank'><img src='/php/360buy/public/data/afficheimg/1284142944453704804.gif' width='211' height='90' border='0' /></a>
              </td>
            </tr>
          </table>
          <div class="blank"></div>
          <table cellpadding="0" cellspacing="0">
            <tr>
              <td>
                <a href='#' target='_blank'><img src='/php/360buy/public/data/afficheimg/1284142966967642808.jpg' width='211' height='90' border='0' /></a>
              </td>
            </tr>
          </table>
          <div class="blank"></div>
          <div id="ECS_VOTE">
            <div class="globalModule">
              <h3><div id="list_t_l"><div id="list_t_r"><b>站内调查</b></div></div></h3>
              <div id="global_box">
                <form name="ECS_VOTEFORM" method="post" action="javascript:submit_vote()" style="_margin:0px -50px 0px 0px;">
                <table border="0" >
                  <tr>
                    <th style="width:150px;">您更希望我们从哪些方面改进并提高服务质量：</th>
                  </tr>
                  <tr>
                    <td class="textDesc">(参与人次:4)</td>
                  </tr>
                  <tr>
                    <td class="optionlist">
                      <input type="checkbox" name="option_id" value="21" id="option_21" /> <label for="option_21">提供优惠的价格及丰富促销活动</label> <span class="textDesc">(75%)</span><br />
                      <input type="checkbox" name="option_id" value="20" id="option_20" /> <label for="option_20">增加更多产品种类及商品类别</label> <span class="textDesc">(0%)</span><br />
                      <input type="checkbox" name="option_id" value="19" id="option_19" /> <label for="option_19">改善售后、投诉及返修等服务</label> <span class="textDesc">(0%)</span><br />
                      <input type="checkbox" name="option_id" value="18" id="option_18" /> <label for="option_18">增加货到付款、配送覆盖区域</label> <span class="textDesc">(0%)</span><br />
                      <input type="checkbox" name="option_id" value="17" id="option_17" /> <label for="option_17">改善并提高物流配送的时效性</label> <span class="textDesc">(25%)</span><br />
                      <input type="hidden" name="type" value="0" />
                    </td>
                  </tr>
                  <tr>
                    <td class="btnlist">
                      <input type="hidden" name="id" value="4" />
                      <input type="image" name="submit" src="/php/360buy/public/themes/jindong/images/btn_submit.gif" />
                      <input type="image" src="/php/360buy/public/themes/jindong/images/btn_reset.gif" onclick="ECS_VOTEFORM.reset();" />
                    </td>
                  </tr>
                </table>
                </form>
              </div>
            </div>
          </div>
          <div class="blank"></div>
          <div id="emaillist"  class="globalModule">
            <h3><div id="list_t_l"><div id="list_t_r"><b>邮件订阅</b></div></div></h3>
            <div id="global_box">
              <ul>
                <input type="text" id="user_email" class="textInput" />
                <input type="image" src="/php/360buy/public/themes/jindong/images/btn_subscription.gif" onclick="add_email_list();" />
                <input type="image" src="/php/360buy/public/themes/jindong/images/btn_unsubscription.gif" onclick="cancel_email_list();" />
              </ul>
            </div>
          </div>
          <div class="blank"></div>
        </div>
        <div id="globalBigRight3">
          <div id="globalMiddle">
            <div id="promotionVideo" class="globalModule">
              <script type="text/javascript" src="/php/360buy/public/data/flashdata/dynfocus/cycle_image.js"></script>
            </div>
            <div id="globalBest" class="globalModule">
              <h3>
                <div id="recom_title_r">
                  <div id="recom_title_l">
                    <span>热卖商品</span>
                    <a  target="_blank" href="search.php?intro=hot">更多热卖>></a>
                  </div>
                </div>
              </h3>
              <div id="show_hot_area" class="itemGrid">
                <div class="clearfix">
                  <div class="item hot_item1">
                    <p align="center" class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img style="width:130px; height:130px;margin:0 auto; text-align:center" src="/php/360buy/public/images/201001/thumb_img/4692_thumb_G_1262412867503.jpg" alt="星辉遥控车模1：14超轻跑车兰博基尼橘色"/></a></p>
                    <p align="center" class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="星辉遥控车模1：14超轻跑车兰博基尼橘色">星辉遥控车模1：14超轻跑车兰博基尼橘色</a></p>
                    <p align="center" class="price">￥388元</p>
                  </div>
                  <div class="item hot_item1">
                    <p align="center" class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img style="width:130px; height:130px;margin:0 auto; text-align:center" src="/php/360buy/public/images/201001/thumb_img/4692_thumb_G_1262412867503.jpg" alt="星辉遥控车模1：14超轻跑车兰博基尼橘色"/></a></p>
                    <p align="center" class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="星辉遥控车模1：14超轻跑车兰博基尼橘色">星辉遥控车模1：14超轻跑车兰博基尼橘色</a></p>
                    <p align="center" class="price">￥388元</p>
                  </div>
                  <div class="item hot_item1">
                    <p align="center" class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img style="width:130px; height:130px;margin:0 auto; text-align:center" src="/php/360buy/public/images/201001/thumb_img/4692_thumb_G_1262412867503.jpg" alt="星辉遥控车模1：14超轻跑车兰博基尼橘色"/></a></p>
                    <p align="center" class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="星辉遥控车模1：14超轻跑车兰博基尼橘色">星辉遥控车模1：14超轻跑车兰博基尼橘色</a></p>
                    <p align="center" class="price">￥388元</p>
                  </div>
                </div>
                <div class="clearfix">
                  <div class="item hot_item2">
                    <p align="center" class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img  src="/php/360buy/public/images/201001/thumb_img/4690_thumb_G_1262412601118.jpg" alt="飞利浦（Philips）无尘袋吸尘器 FC8264" /></a></p>
                    <p align="center" class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="飞利浦（Philips）无尘袋吸尘器 FC8264">飞利浦（Philips）无尘袋吸尘器 F...</a></p>
                  </div>
                  <div class="item hot_item2">
                    <p align="center" class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img  src="/php/360buy/public/images/201001/thumb_img/4690_thumb_G_1262412601118.jpg" alt="飞利浦（Philips）无尘袋吸尘器 FC8264" /></a></p>
                    <p align="center" class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="飞利浦（Philips）无尘袋吸尘器 FC8264">飞利浦（Philips）无尘袋吸尘器 F...</a></p>
                  </div>
                  <div class="item hot_item2">
                    <p align="center" class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img  src="/php/360buy/public/images/201001/thumb_img/4690_thumb_G_1262412601118.jpg" alt="飞利浦（Philips）无尘袋吸尘器 FC8264" /></a></p>
                    <p align="center" class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="飞利浦（Philips）无尘袋吸尘器 FC8264">飞利浦（Philips）无尘袋吸尘器 F...</a></p>
                  </div>
                </div>
                <div class="hot_item3box clearfix">
                  <div class="item hot_item2">
                    <a target="_blank" href="/php/360buy/index.php/Goods/index" title="美的(midea) MYR720T 台式温热型饮水机">美的(midea) MYR720T 台式...</a>
                  </div>
                  <div class="item hot_item2">
                    <a target="_blank" href="/php/360buy/index.php/Goods/index" title="美的(midea) MYR720T 台式温热型饮水机">美的(midea) MYR720T 台式...</a>
                  </div>
                  <div class="item hot_item2">
                    <a target="_blank" href="/php/360buy/index.php/Goods/index" title="美的(midea) MYR720T 台式温热型饮水机">美的(midea) MYR720T 台式...</a>
                  </div>
                  <div class="item hot_item2">
                    <a target="_blank" href="/php/360buy/index.php/Goods/index" title="美的(midea) MYR720T 台式温热型饮水机">美的(midea) MYR720T 台式...</a>
                  </div>
                  <div class="item hot_item2">
                    <a target="_blank" href="/php/360buy/index.php/Goods/index" title="美的(midea) MYR720T 台式温热型饮水机">美的(midea) MYR720T 台式...</a>
                  </div>
                </div>
                <div class="clearfix">
                  <div class="item hot_item2">
                    <p align="center" class="pic"><a href="/php/360buy/index.php/Goods/index"><img  src="/php/360buy/public/images/201001/thumb_img/4701_thumb_G_1262417807509.jpg" alt="美的(midea) MYD718S-X 电子制冷饮水机" /></a></p>
                    <p align="center" class="name"><a href="/php/360buy/index.php/Goods/index" title="美的(midea) MYD718S-X 电子制冷饮水机">美的(midea) MYD718S-X ...</a></p>
                  </div>
                  <div class="item hot_item2">
                    <p align="center" class="pic"><a href="/php/360buy/index.php/Goods/index"><img  src="/php/360buy/public/images/201001/thumb_img/4701_thumb_G_1262417807509.jpg" alt="美的(midea) MYD718S-X 电子制冷饮水机" /></a></p>
                    <p align="center" class="name"><a href="/php/360buy/index.php/Goods/index" title="美的(midea) MYD718S-X 电子制冷饮水机">美的(midea) MYD718S-X ...</a></p>
                  </div>
                  <div class="item hot_item2">
                    <p align="center" class="pic"><a href="/php/360buy/index.php/Goods/index"><img  src="/php/360buy/public/images/201001/thumb_img/4701_thumb_G_1262417807509.jpg" alt="美的(midea) MYD718S-X 电子制冷饮水机" /></a></p>
                    <p align="center" class="name"><a href="/php/360buy/index.php/Goods/index" title="美的(midea) MYD718S-X 电子制冷饮水机">美的(midea) MYD718S-X ...</a></p>
                  </div>
                </div>
                <div class="hot_item3box clearfix">
                  <div class="item hot_item2">
                    <a href="/php/360buy/index.php/Goods/index" title="长虹（CHaNGHONG）50英寸 高清 等离子电视PT50718(a)">长虹（CHaNGHONG）50英寸 高清...</a>
                  </div>
                  <div class="item hot_item2">
                    <a href="/php/360buy/index.php/Goods/index" title="多普达(Dopod) S505 CDMa智能手机 (黑)"><font color=#fe0000>多普达(Dopod) S505 CDMa...</font></a>
                  </div>
                  <div class="item hot_item2">
                    <a href="/php/360buy/index.php/Goods/index" title="长虹（CHaNGHONG）50英寸 高清 等离子电视PT50718(a)">长虹（CHaNGHONG）50英寸 高清...</a>
                  </div>
                  <div class="item hot_item2">
                    <a href="/php/360buy/index.php/Goods/index" title="多普达(Dopod) S505 CDMa智能手机 (黑)"><font color=#fe0000>多普达(Dopod) S505 CDMa...</font></a>
                  </div>
                  <div class="item hot_item2">
                    <a href="/php/360buy/index.php/Goods/index" title="长虹（CHaNGHONG）50英寸 高清 等离子电视PT50718(a)">长虹（CHaNGHONG）50英寸 高清...</a>
                  </div>
                  <div class="item hot_item2">
                    <a href="/php/360buy/index.php/Goods/index" title="多普达(Dopod) S505 CDMa智能手机 (黑)"><font color=#fe0000>多普达(Dopod) S505 CDMa...</font></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="blank"></div>
            <div id="globalBest" class="globalModule">
              <h3>
                <div id="recom_title_r">
                  <div id="recom_title_l">
                    <span>新品上市</span>
                    <a target="_blank" href="search.php?intro=new">更多新品>></a>
                  </div>
                </div>
              </h3>
              <div id="show_new_area" class="itemGrid">
                <div class=container>
                  <div id=textdiv style="height:164px; overflow:hidden">
                    <div id=lr>
                      <div>
                        <div class="cxtj2" >
                          <div class="item" style=" border-bottom:none; height:163px; padding:0; padding-top:1px;">
                            <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img src="/php/360buy/public/images/201105/thumb_img/4760_thumb_G_1306040436494.jpg" alt="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！" /></a></p>
                            <p class="name" ><a target="_blank" href="/php/360buy/index.php/Goods/index" title="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！">华为（HUaWEI）C8600 经典机器...<span></span></a></p>
                            <p class="price">美智价：<span class="goodsPrice">￥11111111元</span></p>
                          </div>
                          <div class="item" style=" border-bottom:none; height:163px; padding:0; padding-top:1px;">
                            <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img src="/php/360buy/public/images/201105/thumb_img/4760_thumb_G_1306040436494.jpg" alt="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！" /></a></p>
                            <p class="name" ><a target="_blank" href="/php/360buy/index.php/Goods/index" title="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！">华为（HUaWEI）C8600 经典机器...<span></span></a></p>
                            <p class="price">美智价：<span class="goodsPrice">￥11111111元</span></p>
                          </div>
                          <div class="item" style=" border-bottom:none; height:163px; padding:0; padding-top:1px;">
                            <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img src="/php/360buy/public/images/201105/thumb_img/4760_thumb_G_1306040436494.jpg" alt="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！" /></a></p>
                            <p class="name" ><a target="_blank" href="/php/360buy/index.php/Goods/index" title="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！">华为（HUaWEI）C8600 经典机器...<span></span></a></p>
                            <p class="price">美智价：<span class="goodsPrice">￥11111111元</span></p>
                          </div>
                          <div class="item" style=" border-bottom:none; height:163px; padding:0; padding-top:1px;">
                            <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img src="/php/360buy/public/images/201105/thumb_img/4760_thumb_G_1306040436494.jpg" alt="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！" /></a></p>
                            <p class="name" ><a target="_blank" href="/php/360buy/index.php/Goods/index" title="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！">华为（HUaWEI）C8600 经典机器...<span></span></a></p>
                            <p class="price">美智价：<span class="goodsPrice">￥11111111元</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <SCRIPT defer>
                  if(screen.width   <   1025)
                	  new Marquee("textdiv",0,4,546,164,7,3000,7)
                  else
                	  new Marquee("textdiv",0,4,766,164,7,3000,7)
                 </SCRIPT>
               </div>
             </div>
           </div>
         </div>
         
         
         
         
         
         <div id="globalRight">
           <div id="newarticle" class="globalModule">
             <h3><div id="list_t_l"><div id="list_t_r"><b>京东快报</b>   &nbsp;&nbsp;&nbsp;<a target="_blank" href="article_cat.php?id=12 "> 更多>></a></div></div></h3>
             <div id="global_box">
               <ul class="linkSkyblue">
                 <div class="txt_list">
                   <a target="_blank"  href="article.php?id=35" title="“沃”的世界我做主">“沃”的世界我做主</a>
                 </div>
                 <div class="txt_list">
                   <a target="_blank"  href="article.php?id=35" title="“沃”的世界我做主">“沃”的世界我做主</a>
                 </div>
                 <div class="txt_list">
                   <a target="_blank"  href="article.php?id=35" title="“沃”的世界我做主">“沃”的世界我做主</a>
                 </div>
                 <div class="txt_list">
                   <a target="_blank"  href="article.php?id=35" title="“沃”的世界我做主">“沃”的世界我做主</a>
                 </div>
               </ul>
             </div>
           </div>
           
           
           
           <div class="blank"></div><div id="globalauction" class="globalModule">
             <h3><div id="list_t_l"><div id="list_t_r"><b>拍卖商品</b></div></div></h3>
             <div id="global_box">
               <div class="itemGrid itemGrid2">
               <div class="item" style="padding:8px 5px;">
                 <p class="pic"><a href="auction.php?act=view&amp;id=22"><img src="/php/360buy/public/images/201001/thumb_img/4693_thumb_G_1262412960593.jpg" alt="海尔(haier)吸尘器ZW1200—201" /></a></p>
                 <p class="name"><a class="a1 f10" href="auction.php?act=view&amp;id=22" title="海尔(haier)吸尘器ZW1200—201">海尔(haier)吸尘器ZW1200—2...</a></p>
                 <p class="price">起拍价<span class="goodsPrice">￥150元</span></p>
               </div>
               <div class="txt_list">
                 <a class="a1    f10 " href="auction.php?act=view&amp;id=23" title="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）">技嘉（GIGaBYTE）Ga-Ma785...</a>
               </div>
               <div class="txt_list">
                 <a class="a1    f10 " href="auction.php?act=view&amp;id=23" title="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）">技嘉（GIGaBYTE）Ga-Ma785...</a>
               </div>
               <div class="txt_list">
                 <a class="a1    f10 " href="auction.php?act=view&amp;id=23" title="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）">技嘉（GIGaBYTE）Ga-Ma785...</a>
               </div>
               <div class="txt_list">
                 <a class="a1    f10 " href="auction.php?act=view&amp;id=23" title="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）">技嘉（GIGaBYTE）Ga-Ma785...</a>
               </div>
             </div>
           </div>
         </div>
         <div class="blank"></div>
         <table cellpadding="0" cellspacing="0">
           <tr>
             <td>
               <a href='affiche.php?ad_id=11&amp;uri=http%3a%2F%2Fwww.17558.net' target='_blank'><img src='/php/360buy/public/data/afficheimg/1306041417806904366.jpg' width='211' height='90'border='0' /></a>
             </td>
           </tr>
         </table>
         <div class="blank"></div>
         <table cellpadding="0" cellspacing="0">
           <tr>
             <td>
               <a href='affiche.php?ad_id=11&amp;uri=http%3a%2F%2Fwww.17558.net' target='_blank'><img src='/php/360buy/public/data/afficheimg/1306041417806904366.jpg' width='211' height='90'border='0' /></a>
             </td>
           </tr>
         </table>
         <div class="blank"></div>
         <table cellpadding="0" cellspacing="0">
           <tr>
             <td>
               <a href='affiche.php?ad_id=11&amp;uri=http%3a%2F%2Fwww.17558.net' target='_blank'><img src='/php/360buy/public/data/afficheimg/1306041417806904366.jpg' width='211' height='90'border='0' /></a>
             </td>
           </tr>
         </table>
       </div>
       <div class="blank5"></div>
       <div id="globalBest" class="globalModule">
         <h3>
           <div id="recom_title_r">
             <div id="recom_title_l">
               <span>特价专区</span>
               <a  href="search.php?intro=promotion">更多特价>></a>
             </div>
           </div>
         </h3>
       </div>
       <div class="blank"></div>
       <div id="globalMiddle">
         <div  id="globalcat" >
           <h3>
             <div class="cat_r">
               <span class="title_goods" style="color:#005aa0;" ><a target="_blank" href="category.php?id=21">家用电器</a></span>
             </div>
           </h3>
           <div class="itemGrid">
             <div class="in">
               <div class="item">
                 <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img src="/php/360buy/public/images/201105/thumb_img/4760_thumb_G_1306040436494.jpg" alt="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！" /></a></p>
                 <p class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！">华为（HUaWEI）C8600 经典机器...<span></span></a></p>
                 <p class="price">美智价：<span class="goodsPrice">￥11111111元</span></p>
               </div>
               <div class="item">
                 <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img src="/php/360buy/public/images/201105/thumb_img/4760_thumb_G_1306040436494.jpg" alt="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！" /></a></p>
                 <p class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！">华为（HUaWEI）C8600 经典机器...<span></span></a></p>
                 <p class="price">美智价：<span class="goodsPrice">￥11111111元</span></p>
               </div>
               <div class="item">
                 <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img src="/php/360buy/public/images/201105/thumb_img/4760_thumb_G_1306040436494.jpg" alt="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！" /></a></p>
                 <p class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！">华为（HUaWEI）C8600 经典机器...<span></span></a></p>
                 <p class="price">美智价：<span class="goodsPrice">￥11111111元</span></p>
               </div>
               <div class="item">
                 <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img src="/php/360buy/public/images/201105/thumb_img/4760_thumb_G_1306040436494.jpg" alt="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！" /></a></p>
                 <p class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！">华为（HUaWEI）C8600 经典机器...<span></span></a></p>
                 <p class="price">美智价：<span class="goodsPrice">￥11111111元</span></p>
               </div>
               <div class="item">
                 <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img src="/php/360buy/public/images/201105/thumb_img/4760_thumb_G_1306040436494.jpg" alt="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！" /></a></p>
                 <p class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="华为（HUaWEI）C8600 经典机器 直降70元！超值特价！">华为（HUaWEI）C8600 经典机器...<span></span></a></p>
                 <p class="price">美智价：<span class="goodsPrice">￥11111111元</span></p>
               </div>
             </div>
           </div>
         </div>
         <div class="blank"></div>
         <script type="text/javascript">
         if (screen.width < 1280)
         {
        	 document.write("<a href='#'><img style='float: left' src='/php/360buy/public/themes/jindong/images/ad_small.jpg'></a>");
         } 
		 else { 
		 	 document.write("<a href='#'><img style='float: left' src='/php/360buy/public/themes/jindong/images/ad_big.jpg'></a>"); 
		 }
		 </script>
		 <div class="blank"></div>
		 <div  id="globalcat" >
		   <h3>
		     <div class="cat_r">
		       <span class="title_goods" style="color:#005aa0;" ><a target="_blank" href="category.php?id=16">电脑产品</a></span>
		     </div>
		   </h3>
		   <div class="itemGrid">
		     <div class="in">
		       <div class="item">
		         <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img src="/php/360buy/public/images/201001/thumb_img/4749_thumb_G_1262822060634.jpg" alt="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）" /></a></p>
		         <p class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）">技嘉（GIGaBYTE）Ga-Ma785...<span></span></a></p>
		         <p class="price">美智价：<span class="goodsPrice">￥650元</span></p>
		       </div>
		       <div class="item">
		         <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img src="/php/360buy/public/images/201001/thumb_img/4749_thumb_G_1262822060634.jpg" alt="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）" /></a></p>
		         <p class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）">技嘉（GIGaBYTE）Ga-Ma785...<span></span></a></p>
		         <p class="price">美智价：<span class="goodsPrice">￥650元</span></p>
		       </div>
		       <div class="item">
		         <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img src="/php/360buy/public/images/201001/thumb_img/4749_thumb_G_1262822060634.jpg" alt="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）" /></a></p>
		         <p class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）">技嘉（GIGaBYTE）Ga-Ma785...<span></span></a></p>
		         <p class="price">美智价：<span class="goodsPrice">￥650元</span></p>
		       </div>
		       <div class="item">
		         <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img src="/php/360buy/public/images/201001/thumb_img/4749_thumb_G_1262822060634.jpg" alt="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）" /></a></p>
		         <p class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）">技嘉（GIGaBYTE）Ga-Ma785...<span></span></a></p>
		         <p class="price">美智价：<span class="goodsPrice">￥650元</span></p>
		       </div>
		       <div class="item">
		         <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img src="/php/360buy/public/images/201001/thumb_img/4749_thumb_G_1262822060634.jpg" alt="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）" /></a></p>
		         <p class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）">技嘉（GIGaBYTE）Ga-Ma785...<span></span></a></p>
		         <p class="price">美智价：<span class="goodsPrice">￥650元</span></p>
		       </div>
		       <div class="item">
		         <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img src="/php/360buy/public/images/201001/thumb_img/4749_thumb_G_1262822060634.jpg" alt="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）" /></a></p>
		         <p class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）">技嘉（GIGaBYTE）Ga-Ma785...<span></span></a></p>
		         <p class="price">美智价：<span class="goodsPrice">￥650元</span></p>
		       </div>
		       <div class="item">
		         <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img src="/php/360buy/public/images/201001/thumb_img/4749_thumb_G_1262822060634.jpg" alt="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）" /></a></p>
		         <p class="name"><a target="_blank" href="/php/360buy/index.php/Goods/index" title="技嘉（GIGaBYTE）Ga-Ma785GPMT-UD2H主板REV 1.0（aMD 785G/Socket aM3）">技嘉（GIGaBYTE）Ga-Ma785...<span></span></a></p>
		         <p class="price">美智价：<span class="goodsPrice">￥650元</span></p>
		       </div>
		     </div>
		   </div>
		 </div>
	   </div>
	   <div id="globalRight">
	     <div id="globalauction" class="globalModule top10">
	       <h3 class="h3_3">
	         <div id="list_t_l">
	           <div id="list_t_r"><b>益智风暴畅销排行榜</b></div>
	         </div>
	       </h3>
	       <div id="global_box">
	         <div class="itemGrid itemGrid2">
	           <div id="com1_b" class="tab_title clearfix" >
	             <h2>航模竞技</h2>
	             <h2 class="h2bg"> 机 器 人</h2>
	             <h2 class="h2bg">天文地理</h2>
	           </div>
	           <div id="com1_v"></div>
	           <div id="com1_h">
	           <blockquote>
	           <div class="line">
	             <div class="item">
	               <span class="no">1</span>
	               <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img  src="/php/360buy/public/images/201001/thumb_img/4710_thumb_G_1262426233316.jpg" alt="联想（Lenovo）Y450a-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）" class="B_blue" /></a></p>
	               <p class="name">  <a target="_blank" href="/php/360buy/index.php/Goods/index" title="联想（Lenovo）Y450a-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）">联想（Lenovo）Y450a-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）</a></p>
	               <p class="price"><span class="goodsPrice">￥5099元        </span></p>
	             </div>
	           </div>
	           <div style="clear:both"></div>
	           <div class="txt_list">
	             <span class="no">2</span>
	             <a target="_blank" href="/php/360buy/index.php/Goods/index" title="惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）">惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）</a>
	           </div>
	           <div class="txt_list">
	             <span class="no">2</span>
	             <a target="_blank" href="/php/360buy/index.php/Goods/index" title="惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）">惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）</a>
	           </div>
	           <div class="txt_list">
	             <span class="no">2</span>
	             <a target="_blank" href="/php/360buy/index.php/Goods/index" title="惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）">惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）</a>
	           </div>
	           <div class="txt_list">
	             <span class="no">2</span>
	             <a target="_blank" href="/php/360buy/index.php/Goods/index" title="惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）">惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）</a>
	           </div>
	           <div class="txt_list">
	             <span class="no">2</span>
	             <a target="_blank" href="/php/360buy/index.php/Goods/index" title="惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）">惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）</a>
	           </div>
	           </blockquote>
	           <blockquote>
	           <div class="line">
	             <div class="item">
	               <span class="no">1</span>
	               <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img  src="/php/360buy/public/images/201001/thumb_img/4710_thumb_G_1262426233316.jpg" alt="联想（Lenovo）Y450a-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）" class="B_blue" /></a></p>
	               <p class="name">  <a target="_blank" href="/php/360buy/index.php/Goods/index" title="联想（Lenovo）Y450a-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）">联想（Lenovo）Y450a-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）</a></p>
	               <p class="price"><span class="goodsPrice">￥5099元        </span></p>
	             </div>
	           </div>
	           <div style="clear:both"></div>
	           <div class="txt_list">
	             <span class="no">2</span>
	             <a target="_blank" href="/php/360buy/index.php/Goods/index" title="惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）">惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）</a>
	           </div>
	           <div class="txt_list">
	             <span class="no">2</span>
	             <a target="_blank" href="/php/360buy/index.php/Goods/index" title="惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）">惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）</a>
	           </div>
	           <div class="txt_list">
	             <span class="no">2</span>
	             <a target="_blank" href="/php/360buy/index.php/Goods/index" title="惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）">惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）</a>
	           </div>
	           <div class="txt_list">
	             <span class="no">2</span>
	             <a target="_blank" href="/php/360buy/index.php/Goods/index" title="惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）">惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）</a>
	           </div>
	           <div class="txt_list">
	             <span class="no">2</span>
	             <a target="_blank" href="/php/360buy/index.php/Goods/index" title="惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）">惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）</a>
	           </div>
	           </blockquote>
	         </div>
	         <script type="text/javascript">
	         <!--
	         //reg("com1");
	         //-->
	         </script>
	       </div>
	     </div>
	   </div>
	   <div class="blank"></div>
	   <div class="blank"></div>
	   <table cellpadding="0" cellspacing="0">
	     <tr>
	       <td>
	         <a href='affiche.php?ad_id=12&amp;uri=http%3a%2F%2Fwww.17558.net' target='_blank'><img src='/php/360buy/public/data/afficheimg/1306041433837845368.gif' width='211' height='90'border='0' /></a>
	       </td>
	     </tr>
	   </table>
	   <div class="blank"></div>
	   <div id="globalauction" class="globalModule top10">
	     <h3 class="h3_3">
	       <div id="list_t_l">
	         <div id="list_t_r"><b>户外运动站畅销排行榜</b></div>
	       </div>
	     </h3>
	     <div id="global_box">
	       <div class="itemGrid itemGrid2">
	         <div id="com2_b" class="tab_title clearfix" >
	           <h2>水上乐园</h2>
	           <h2 class="h2bg">户外游戏</h2>
	           <h2 class="h2bg">运动健身</h2>
	         </div>
	         <div id="com2_v"></div>
	         <div id="com2_h">
	           <blockquote>
	             <div class="line">
	               <div class="item">
	                 <span class="no">1</span>
	                 <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img  src="/php/360buy/public/images/201001/thumb_img/4718_thumb_G_1262450231383.jpg" alt="诺基亚（NOKIa）N86白色 3G手机 WCDMa/GSM800W卡尔蔡司镜头" class="B_blue" /></a></p>
	                 <p class="name">  <a target="_blank" href="/php/360buy/index.php/Goods/index" title="诺基亚（NOKIa）N86白色 3G手机 WCDMa/GSM800W卡尔蔡司镜头">诺基亚（NOKIa）N86白色 3G手机 WCDMa/GSM800W卡尔蔡司镜头</a></p>
	                 <p class="price"><span class="goodsPrice">￥3099元        </span></p>
	               </div>
	             </div>
	             <div style="clear:both"></div>
	             <div class="txt_list">
	               <span class="no">2</span>
	               <a target="_blank" href="/php/360buy/index.php/Goods/index" title="诺基亚（Nokia）N97i 3G手机 WCDMa/GSM （白色） 非移动定制机">诺基亚（Nokia）N97i 3G手机 WCDMa/GSM （白色） 非移动定制机</a>
	             </div>
	             <div class="txt_list">
	               <span class="no">2</span>
	               <a target="_blank" href="/php/360buy/index.php/Goods/index" title="诺基亚（Nokia）N97i 3G手机 WCDMa/GSM （白色） 非移动定制机">诺基亚（Nokia）N97i 3G手机 WCDMa/GSM （白色） 非移动定制机</a>
	             </div>
	             <div class="txt_list">
	               <span class="no">2</span>
	               <a target="_blank" href="/php/360buy/index.php/Goods/index" title="诺基亚（Nokia）N97i 3G手机 WCDMa/GSM （白色） 非移动定制机">诺基亚（Nokia）N97i 3G手机 WCDMa/GSM （白色） 非移动定制机</a>
	             </div>
	           </blockquote>
	           <blockquote>
	             <div class="line">
	               <div class="item">
	                 <span class="no">1</span>
	                 <p class="pic"><a target="_blank" href="/php/360buy/index.php/Goods/index"><img  src="/php/360buy/public/images/201001/thumb_img/4718_thumb_G_1262450231383.jpg" alt="诺基亚（NOKIa）N86白色 3G手机 WCDMa/GSM800W卡尔蔡司镜头" class="B_blue" /></a></p>
	                 <p class="name">  <a target="_blank" href="/php/360buy/index.php/Goods/index" title="诺基亚（NOKIa）N86白色 3G手机 WCDMa/GSM800W卡尔蔡司镜头">诺基亚（NOKIa）N86白色 3G手机 WCDMa/GSM800W卡尔蔡司镜头</a></p>
	                 <p class="price"><span class="goodsPrice">￥3099元        </span></p>
	               </div>
	             </div>
	             <div style="clear:both"></div>
	             <div class="txt_list">
	               <span class="no">2</span>
	               <a target="_blank" href="/php/360buy/index.php/Goods/index" title="诺基亚（Nokia）N97i 3G手机 WCDMa/GSM （白色） 非移动定制机">诺基亚（Nokia）N97i 3G手机 WCDMa/GSM （白色） 非移动定制机</a>
	             </div>
	             <div class="txt_list">
	               <span class="no">2</span>
	               <a target="_blank" href="/php/360buy/index.php/Goods/index" title="诺基亚（Nokia）N97i 3G手机 WCDMa/GSM （白色） 非移动定制机">诺基亚（Nokia）N97i 3G手机 WCDMa/GSM （白色） 非移动定制机</a>
	             </div>
	             <div class="txt_list">
	               <span class="no">2</span>
	               <a target="_blank" href="/php/360buy/index.php/Goods/index" title="诺基亚（Nokia）N97i 3G手机 WCDMa/GSM （白色） 非移动定制机">诺基亚（Nokia）N97i 3G手机 WCDMa/GSM （白色） 非移动定制机</a>
	             </div>
	           </blockquote>
	         </div>
		     <script type="text/javascript">
		     <!--
		     //reg("com2");
		     //-->
		     </script>
		   </div>
		 </div>
	   </div>
	   <div class="blank"></div>
	   <div class="blank"></div>
	 </div>
   </div>
   <div class="blank"></div>
   
       <div id="globalHelp" class="globalModule">
     <div class="clearfix">
       <dl>
         <dt>
           <img src="/php/360buy/public/themes/jindong/images/help_1.gif" />
           <a href='article_cat.php?id=5' title="购物指南">购物指南</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=9" title="购物流程">购物流程</a></dd>
         <dd><a href="article.php?id=10" title="会员介绍">会员介绍</a></dd>
         <dd><a href="article.php?id=36" title="常见问题">常见问题</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="/php/360buy/public/themes/jindong/images/help_2.gif" />
           <a href='article_cat.php?id=7' title="配送方式">配送方式</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=15" title="快递运输">快递运输</a></dd>
         <dd><a href="article.php?id=16" title="特快专递(EMS)">特快专递(EMS)</a></dd>
         <dd><a href="article.php?id=43" title="上门自提">上门自提</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="/php/360buy/public/themes/jindong/images/help_3.gif" />
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
           <img src="/php/360buy/public/themes/jindong/images/help_4.gif" />
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
           <img src="/php/360buy/public/themes/jindong/images/help_5.gif" />
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
       <ul  class="line"><img src="/php/360buy/public/themes/jindong/images/serve_1.gif"></ul>
       <ul  class="line"><img src="/php/360buy/public/themes/jindong/images/serve_2.gif"></ul>
       <ul  class="line"><img src="/php/360buy/public/themes/jindong/images/serve_3.gif"></ul>
       <ul ><img src="/php/360buy/public/themes/jindong/images/serve_4.gif"></ul>
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
       <script type="text/javascript" src="/php/360buy/public/js/dialog3.js"></script>
     </p>
     <p id="copyright">&copy; 2005-2012 京东网上商城 版权所有，并保留所有权利。</p>
     <p id="address"></p>
     <p id="phone"></p>
     <p id="imlist">
       <img src="/php/360buy/public/images/pa.gif" alt="QQ" /> <a href="#" target="_blank">393769718</a>
       <img src="/php/360buy/public/images/T1B7m_XeXuXXaHNz_X-16-16.gif" alt="淘宝旺旺" /><a href="#" target="_blank"> tddt8</a>
     </p>
     <p id="qureyInfo">共执行 12 个查询，用时 0.017868 秒，在线 3 人，Gzip 已禁用，占用内存 3.160 MB<img src="" alt="" style="width:0px;height:0px;" /></p>
     <div align="center" ></div>
     <div class="blank"></div>
     <div style="text-align:center">
       <a href="#"><img src="/php/360buy/public/themes/jindong/images/fot_1.gif"></a>
       <a href="#"><img src="/php/360buy/public/themes/jindong/images/fot_2.gif"></a>
       <a href="#"><img src="/php/360buy/public/themes/jindong/images/fot_3.gif"></a>
     </div>
   </div>
   
 </div>
 <script type="text/javascript" src="/php/360buy/public/js/my_lefttime.js"></script>
 </body>
</html>