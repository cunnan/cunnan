<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>所有分类_京东网上商城-综合网购首选</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="/360buy/public/js/transport.js"></script>
    <script type="text/javascript" src="/360buy/public/js/common.js"></script>
    <link href="/360buy/public/themes/jindong/stye1024.css" type="text/css" rel="stylesheet" />
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
      <div id="globalLeft">
        <div id="o-search" style="bottom:50px;">
          <div class="allsort">
            <div class="mt">
              <strong><a href="/360buy/index.php/Catalog/index">全部商品分类</a></strong>
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
                <a href="/360buy/index.php/Catalog/index">全部商品分类</a>
              </div>
            </div>
          </div>
        </div>
        <div class="blank"></div>
      </div>
      <div id="globalBigRight" class="tab_box">
        <div id="globalCatalogList" class="globalModule globalFrame">
          <div class="tab_title"><h3>所有分类</h3></div>
          <div class="globalModuleContent">
            <p>
              <dl>
                <dt><a href="/360buy/index.php/Catalog/view"><font color="#FF0000"><b>展销会专栏</b></font></a> <span class="textDesc">(0)</span></dt>
                <a href="/360buy/index.php/Catalog/view">必备年货精品</a> <span class="textDesc">(0)</span>
                <a href="/360buy/index.php/Catalog/view">干果</a> <span class="textDesc">(0)</span>
                <a href="/360buy/index.php/Catalog/view">干果</a> <span class="textDesc">(0)</span>
                <a href="/360buy/index.php/Catalog/view">干果</a> <span class="textDesc">(0)</span>
                <a href="/360buy/index.php/Catalog/view">干果</a> <span class="textDesc">(0)</span>
                <a href="/360buy/index.php/Catalog/view">干果</a> <span class="textDesc">(0)</span>
                <a href="/360buy/index.php/Catalog/view">干果</a> <span class="textDesc">(0)</span>
                <a href="/360buy/index.php/Catalog/view">干果</a> <span class="textDesc">(0)</span>
                
                <dt><a href="/360buy/index.php/Catalog/view"><font color="#FF0000"><b>展销会专栏</b></font></a> <span class="textDesc">(0)</span></dt>
                <a href="/360buy/index.php/Catalog/view">必备年货精品</a> <span class="textDesc">(0)</span>
                <a href="/360buy/index.php/Catalog/view">干果</a> <span class="textDesc">(0)</span>
                <a href="/360buy/index.php/Catalog/view">干果</a> <span class="textDesc">(0)</span>
                <a href="/360buy/index.php/Catalog/view">干果</a> <span class="textDesc">(0)</span>
                <a href="/360buy/index.php/Catalog/view">干果</a> <span class="textDesc">(0)</span>
              </dl>
            </p>
          </div>
        </div>
        <div id="globalBrandList" class="globalModule globalFrame">
          <div class="tab_title"><h3>所有品牌</h3></div>
          <div class="globalModuleContent">
            <p><a href="/360buy/index.php/Brand/brand">苹果</a> <span class="textDesc">(1)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">索尼</a> <span class="textDesc">(1)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">爱普生</a> <span class="textDesc">(1)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">logitech(罗技）</a> <span class="textDesc">(1)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">酷冷至尊</a> <span class="textDesc">(1)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">Intel(英特尔）</a> <span class="textDesc">(9)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">Lenovo（联想)</a> <span class="textDesc">(2)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">飞利浦</a> <span class="textDesc">(2)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">AMD</a> <span class="textDesc">(8)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">HP（惠普)</a> <span class="textDesc">(2)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">金士顿</a> <span class="textDesc">(1)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">dell(戴尔)</a> <span class="textDesc">(3)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">NOKIA（诺基亚）</a> <span class="textDesc">(5)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">冠捷</a> <span class="textDesc">(1)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">华硕</a> <span class="textDesc">(1)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">多彩</a> <span class="textDesc">(1)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">技嘉</a> <span class="textDesc">(3)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">佳能</a> <span class="textDesc">(2)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">贝尔金</a> <span class="textDesc">(1)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">三星</a> <span class="textDesc">(1)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">海尔</a> <span class="textDesc">(1)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">新蓝</a> <span class="textDesc">(1)</span></p>
            <p><a href="/360buy/index.php/Brand/brand">金果子</a> <span class="textDesc">(1)</span></p>
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
  </body>
</html>