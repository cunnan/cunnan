<?php
require 'config.ini.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页_新闻视界</title>
<link href="styles/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="styles/layout.css" rel="stylesheet" type="text/css" media="all" />
<link href="styles/common.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<!-- 通用顶部导航开始-->
<?php
require ROOT.'Common/header.php';
?>
<!--头条新闻开始-->
<div class="section clear">
	<div class="side-left" id="focus-wrapper">
		<ul id="focus-image">
			<li><a href="#"><img src="ad/12493512_1342949594488.jpg" alt=""/></a></li>
			<li><a href="#"><img src="ad/12493512_1342949594483.jpg" alt=""/></a></li>
			<li><a href="#"><img src="ad/12493512_1342949594489.jpg" alt=""/></a></li>
		</ul>
		<div id="focus-mask"></div>
		<ul id="focus-text">
			<li><a href="#">一周图片精选：艺考生隧道里排长队</a></li>
			<li><a href="#">画师五彩缤纷的世界2</a></li>
			<li><a href="#">画师五彩缤纷的世界3</a></li>
		</ul>
		<ol class="clear" id="focus-num">
			<li>1</li>
			<li class="current">2</li>
			<li>3</li>
		</ol>		
	</div>
	<div class="side-right" id="recommend">
		<h1 class="headline"><a target="_blank" href="articles.html">习近平：让人民对改革有更多获得感</a></h1>
		<p class="throw">[ <a target="_blank" href="articles.html">规范领导配偶子女经商试点首选上海</a> <a target="_blank" href="articles.html">韩正回应:这是中央信任</a>]</p>
		<h1 class="headline"><a target="_blank" href="articles.html">李克强：有红顶中介打政府旗号搞垄断</a></h1>
		<h1 class="headline"><a target="_blank" href="articles.html">安徽原副省长倪发科判17年 没收财产100万</a></h1>
		<p class="throw">[ <a target="_blank" href="articles.html">当庭表示服判不上诉 578万元财产不能说明来源</a>]</p>
		<h1 class="headline"><a target="_blank" href="articles.html">俄前副总理涅姆佐夫被当街射杀 系普京政敌</a></h1>
		<p class="throw">[ <a target="_blank" href="articles.html">枪杀现场曝光</a> <a target="_blank" href="articles.html">枪手连开多枪</a> <a target="_blank" href="articles.html">普京:是谋杀</a>  <a target="_blank" href="articles.html">美俄报道大不同</a>]</p>
		<h1 class="headline"><a target="_blank" href="articles.html">少林寺耗巨资在澳洲买地建分寺和四星酒店</a></h1>
		<p class="throw">[ <a target="_blank" href="articles.html">项目时隔9年后重启 原计划中含一高尔夫球场 释永信亲赴交支票</a>]</p>
		<h1 class="headline"><a target="_blank" href="articles.html">少林寺耗巨资在澳洲买地建分寺和四星酒店</a></h1>
		<p class="throw">[ <a target="_blank" href="articles.html">项目时隔9年后重启 原计划中含一高尔夫球场 释永信亲赴交支票</a>]</p>
	</div>
</div>
<!--头条新闻结束-->
<!--国内新闻 start-->
<div class="section clear">
	<div class="section-title-wrapper">
		<a href="#" class="section-title-name section-title-china">国内新闻</a>
	</div>
	<div class="side-left">
		<div class="part-title">
			<div class="title-name">
				<a href="#">内地新闻</a>
			</div>
		</div>
		<ul class="section-part-list">
		<?php
		//找国内新闻 typeid=4的那些，找10个
		$neidiArr=$db->select("news","*","typeid=4 and state<9",10);
		foreach($neidiArr as $v){
		?>
			<li><a href="<?php echo BASE_URL?>News/detail.php?id=<?php echo $v['id']?>" target="_blank"><?php echo $v['title']?></a></li>
		<?php }?>
			</ul>
	</div>
	<div class="side-center">
		<div class="part-title">
			<div class="title-name">
				<a href="#">港澳台新闻</a>
			</div>
		</div>
		<ul class="section-part-list">
			<li><a href="http://news.sina.com.cn/c/2015-03-01/021731553483.shtml" target="_blank">广东:遇台风黄色预警等四种信号即可自行停课</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-03-01/020931553472.shtml" target="_blank">上海迪斯尼回应单日票价500元:仍在研究</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-03-01/020431553512.shtml" target="_blank">西安市环保局原局长等5人涉嫌受贿被捕</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-03-01/005931553346.shtml" target="_blank">北京国土局:暂不发放新版房产证 </a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/233331553297.shtml" target="_blank">江西为3.36万名农民工追讨工资及赔偿金4.79亿</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/230931553282.shtml" target="_blank">江西乐平煤矿煤与瓦斯突出事故已确认4矿工被困</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/225631553279.shtml" target="_blank">南昌符合标准校车仅1辆获标牌 安全隐患巨大</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/211631553192.shtml" target="_blank">广东化州政协副主席李沛涉嫌严重违纪被调查</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/202131553113.shtml" target="_blank">青海狱警违规为17名罪犯办理减刑一审获刑18年</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/200431553106.shtml" target="_blank">湖北黄冈人大常委会主任龙福清等2人被调查</a></li>
        </ul>	
	</div>
	<div class="side-right">
		<div class="part-title">
			<div class="title-name title-name-hover">
				<a href="#">点击量排行</a>
			</div>
			<div class="title-name title-name-no-border">
				<a href="#">评论数排行</a>
			</div>
		</div>
		<ol class="section-part-list-with-num">
			<li><span class="top-num num1">01</span><a href="http://news.sina.com.cn/c/2015-03-01/021731553483.shtml" target="_blank">广东:遇台风黄色预警等四种信号即可自行停课</a></li>
			<li><span class="top-num num2">02</span><a href="http://news.sina.com.cn/c/2015-03-01/020931553472.shtml" target="_blank">上海迪斯尼回应单日票价500元:仍在研究</a></li>
			<li><span class="top-num num3">03</span><a href="http://news.sina.com.cn/c/2015-03-01/020431553512.shtml" target="_blank">西安市环保局原局长等5人涉嫌受贿被捕</a></li>
			<li><span class="top-num">04</span><a href="http://news.sina.com.cn/c/2015-03-01/005931553346.shtml" target="_blank">北京国土局:暂不发放新版房产证 </a></li>
			<li><span class="top-num">05</span><a href="http://news.sina.com.cn/c/2015-02-28/233331553297.shtml" target="_blank">江西为3.36万名农民工追讨工资及赔偿金4.79亿</a></li>
			<li><span class="top-num">06</span><a href="http://news.sina.com.cn/c/2015-02-28/230931553282.shtml" target="_blank">江西乐平煤矿煤与瓦斯突出事故已确认4矿工被</a></li>
			<li><span class="top-num">07</span><a href="http://news.sina.com.cn/c/2015-02-28/225631553279.shtml" target="_blank">南昌符合标准校车仅1辆获标牌 安全隐患巨大</a></li>
			<li><span class="top-num">08</span><a href="http://news.sina.com.cn/c/2015-02-28/211631553192.shtml" target="_blank">广东化州政协副主席李沛涉嫌严重违纪被调查</a></li>
			<li><span class="top-num">09</span><a href="http://news.sina.com.cn/c/2015-02-28/202131553113.shtml" target="_blank">青海狱警违规为17名罪犯办理减刑一审获刑18年</a></li>
			<li><span class="top-num">10</span><a href="http://news.sina.com.cn/c/2015-02-28/200431553106.shtml" target="_blank">湖北黄冈人大常委会主任龙福清等2人被调查</a></li>
        </ol>	
	</div>
</div>
<!--国内新闻 end-->
<!--国际新闻 start-->
<div class="section clear">
	<div class="section-title-wrapper">
		<a href="#" class="section-title-name section-title-world">国内新闻</a>
	</div>
	<div class="side-left">
		<div class="part-title">
			<div class="title-name">
				<a href="#">最新消息</a>
			</div>
		</div>
		<ul class="section-part-list">
			<li><a href="http://news.sina.com.cn/c/2015-03-01/021731553483.shtml" target="_blank">广东:遇台风黄色预警等四种信号即可自行停课</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-03-01/020931553472.shtml" target="_blank">上海迪斯尼回应单日票价500元:仍在研究</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-03-01/020431553512.shtml" target="_blank">西安市环保局原局长等5人涉嫌受贿被捕</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-03-01/005931553346.shtml" target="_blank">北京国土局:暂不发放新版房产证 </a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/233331553297.shtml" target="_blank">江西为3.36万名农民工追讨工资及赔偿金4.79亿</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/230931553282.shtml" target="_blank">江西乐平煤矿煤与瓦斯突出事故已确认4矿工被困</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/225631553279.shtml" target="_blank">南昌符合标准校车仅1辆获标牌 安全隐患巨大</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/211631553192.shtml" target="_blank">广东化州政协副主席李沛涉嫌严重违纪被调查</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/202131553113.shtml" target="_blank">青海狱警违规为17名罪犯办理减刑一审获刑18年</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/200431553106.shtml" target="_blank">湖北黄冈人大常委会主任龙福清等2人被调查</a></li>
        </ul>
	</div>
	<div class="side-center">
		<div class="part-title">
			<div class="title-name">
				<a href="#">环球视野</a>
			</div>
		</div>
		<ul class="section-part-list">
			<li><a href="http://news.sina.com.cn/c/2015-03-01/021731553483.shtml" target="_blank">广东:遇台风黄色预警等四种信号即可自行停课</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-03-01/020931553472.shtml" target="_blank">上海迪斯尼回应单日票价500元:仍在研究</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-03-01/020431553512.shtml" target="_blank">西安市环保局原局长等5人涉嫌受贿被捕</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-03-01/005931553346.shtml" target="_blank">北京国土局:暂不发放新版房产证 </a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/233331553297.shtml" target="_blank">江西为3.36万名农民工追讨工资及赔偿金4.79亿</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/230931553282.shtml" target="_blank">江西乐平煤矿煤与瓦斯突出事故已确认4矿工被困</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/225631553279.shtml" target="_blank">南昌符合标准校车仅1辆获标牌 安全隐患巨大</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/211631553192.shtml" target="_blank">广东化州政协副主席李沛涉嫌严重违纪被调查</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/202131553113.shtml" target="_blank">青海狱警违规为17名罪犯办理减刑一审获刑18年</a></li>
			<li><a href="http://news.sina.com.cn/c/2015-02-28/200431553106.shtml" target="_blank">湖北黄冈人大常委会主任龙福清等2人被调查</a></li>
        </ul>	
	</div>
	<div class="side-right">
		<div class="part-title">
			<div class="title-name">
				<a href="#"><em class="icon1">海</em>外观察</a>
			</div>			
		</div>
		<div class="pic-info clear">
			<div class="pic"><img src="photoview/U11594P1DT20150226092629.jpg" alt=""/></div>
			<div class="txt">英国威廉王子要来中国，英媒很激动，称之为“历史性”的访问。王子访华有啥热闹可看？</div>
		</div>
		<div class="pic-info clear">
			<div class="pic"><img src="photoview/U11594P1DT20150226092629.jpg" alt=""/></div>
			<div class="txt">英国威廉王子要来中国，英媒很激动，称之为“历史性”的访问。王子访华有啥热闹可看？</div>
		</div>
		<div class="pic-info clear">
			<div class="pic"><img src="photoview/U11594P1DT20150226092629.jpg" alt=""/></div>
			<div class="txt">英国威廉王子要来中国，英媒很激动，称之为“历史性”的访问。王子访华有啥热闹可看？</div>
		</div>
		
	</div>
</div>

<!--国际新闻 end-->
<!--娱乐新闻 start-->
<div class="section">
	<div class="section-title-wrapper">
		<a href="#" class="section-title-name section-title-world">国内新闻</a>
	</div>
	<div class="clear" id="ent-image-lists">
	  <?php
	  //获取国际的图片推荐
	  $imageTuijianArr=$db->select("news","*","typeid in(select id from type where fid=1) and state=1",8);
	  foreach($imageTuijianArr as $v){
	  ?>
	  <div class="ent-image-item">
			<a href="#"><img src="<?php echo BASE_URL?>upload/<?php echo $v['imagename']?>" alt="<?php echo $v['title']?>" width="220" height="144"/></a>
			<p><a href="<?php echo BASE_URL?>News/detail.php?id=<?php echo $v['id']?>"><?php echo $v['title']?></a></p>
	  </div>
	  <?php }?>

	</div>
</div>
<!--娱乐新闻 end-->
<!--友情链接 start-->
<div class="section">
	<h4 class="friendlink-hr"><span class="friendlink">友情链接</span></h4>
	<div class="friendlink-cont">
		<p>
		<?php
		$linkArr=$db->select("friend","*");
		$num=1;
		foreach($linkArr as $v){
		?>
		<a href="<?php echo $v['url']?>" target="_blank"><?php echo $v['fname']?></a> | 
		<?php
		if($num%15==0){
			echo "</p><p>";
		}
		$num++;
		}?>
		</p>
	</div>
</div>
<!--友情链接 end-->
<!--版权区 start-->
<div class="section footer">
  <p>24小时客户服务热线：4006900000 010-82623378 <a href="#">常见问题解答</a> <a target="_blank" href="http://www.12377.cn/">互联网违法和不良信息举报</a></p>
  <p><a target="_blank" href="#">新闻中心意见反馈留言板</a></p>
  <p><a href="http://www.tarena.com.cn/">达内简介</a> | <a href="#">关于达内</a> | <a href="#">广告服务</a> | <a href="#">联系我们</a> | <a href="#">招聘信息</a> | <a href="#">网站律师</a> |  <a href="#">通行证注册</a> | <a href="#">产品答疑</a></p>
  <p>Copyright &copy; 1996-2015 TARENA Corporation, All Rights Reserved</p>
</div>
<!--版权区 end-->

</body>
</html>
