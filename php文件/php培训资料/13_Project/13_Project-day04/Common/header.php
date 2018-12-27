<?php 
$db=Db::getInstance();
//一级分类
$typeOneArr=$db->select("type","*","fid=0 and state<9");
?>
<div id="top-navi-wrap">
	<div class="clearfix" id="top-navi">
		<div class="side-left">
			<a href="#">巴西世界杯一再爆冷 卫冕冠军西班牙出局</a>
			<a href="#">瑞士人为啥最幸福</a>　
			<a href="#">中国病人庞麦郎</a>
		</div>
		<div class="side-right">
			<a href="login.html" target="_blank" class="top-nav-login-title">登录</a>
			<div class="top-nav-select-title">
				<a href="register.html" target="_blank">免费注册</a>
				<span>您好，<a href="#" class="current-user">淘气的松鼠</a></span>
				<a href="#">退出</a>
			</div>
		</div>
	</div>
</div>
<!-- 通用顶部导航结束 -->
<!--header start-->
<div class="clear" id="header">
		<div id="logo"><a href="#" title="换一个角度看新闻"></a></div>
		<div id="search-bar">
			<form name="search-form" action="" method="get">
				<input type="text" name="keywords" id="keywords" value="党报连发治军铁腕新政"/>
				<input type="submit" value="" id="search-submit-button"/>
			</form>
		</div>
</div>
<!--header end-->
<!--导航开始-->
<div id="navigation">
	<ul class="clear">
		<li><a href="<?php echo BASE_URL?>index.php" target="_blank">首页</a></li>
		<?php foreach($typeOneArr as $v){?>
		<li><a href="<?php echo BASE_URL?>news/list.php?fid=<?php echo $v['id']?>" target="_blank"><?php echo $v['tname']?></a></li>
		<?php }?>
	</ul>
</div>
<!--导航结束-->