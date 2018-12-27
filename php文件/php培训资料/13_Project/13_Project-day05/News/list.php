<?php
require '../config.ini.php';
$db=Db::getInstance();
//接受一级分类的id
$fid=isset($_GET['fid']) ? (int)$_GET['fid']:0;
if(!$fid){
	jump("分类id丢失",BASE_URL."index.php");
	exit();
}
//根据一级分类的id，获取一级分类的名称
$typeArr=$db->select("type","*","id=$fid");
//文章总条数
$countArr=$db->select("news","count(*) as num","typeid in(select id from type where fid=$fid) and state<9");
$num=$countArr[0]['num'];
$pageSize=2;
$page=new Page($num,$pageSize);
$start=$page->getStart();
$arr=$db->select("news","*","typeid in(select id from type where fid=$fid) and state<9","$start,$pageSize");
//根据一级分类的id,查询广告图片信息
$advInfoArr=$db->select("advinfo","*","typeid=$fid");

$advInfoNum=count($advInfoArr);
//echo '<pre>';var_dump($arr);echo '</pre>';exit;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻视界_<?php echo $typeArr[0]['tname']?>新闻</title>
<link type="text/css" rel="stylesheet" media="all" href="<?php echo BASE_URL?>styles/reset.css"/>
<link type="text/css" rel="stylesheet" media="all" href="<?php echo BASE_URL?>styles/layout.css"/>
<link type="text/css" rel="stylesheet" media="all" href="<?php echo BASE_URL?>styles/common.css"/>
<script type="text/javascript" src="<?php echo BASE_URL?>js/jquery.js"></script>
<script type="text/javascript">
var index=1;//控制哪个自动显示
$(function(){
	setInterval(setImage,2000);
})
function setImage(num){
	if(num==undefined){
		num=index;
		index++;//下一次该显示下一个
		if(index><?php echo $advInfoNum?>){
			index=1;
		}
	}else{
		index=num;
	}
	$("#focus-image li").hide();
	$("#focus-image li:eq("+(num-1)+")").show();
	//控制文字显示
	$("#focus-text li").hide();
	$("#focus-text li:eq("+(num-1)+")").show();
	//控制点的变化
	$("#focus-num li").removeClass("current");
	$("#focus-num li:eq("+(num-1)+")").addClass('current');
}
</script>
</head>
<body>
<!-- 通用顶部导航开始-->
<?php require ROOT.'Common/header.php';?>
<!--导航结束-->
<div class="section clear">
	<div class="side-left-680">
		<div id="focus-wrapper2">
			<ul id="focus-image">
				<?php foreach($advInfoArr as $v){?>
				<li><a href="<?php echo $v['url']?>"><img src="<?php echo BASE_URL;?>upload/<?php echo $v['imagename']?>" alt="" style="width:680px;"/></a></li>
				<?php }?>
				
			</ul>
			<div id="focus-mask"></div>
			<ul id="focus-text">
				<?php foreach($advInfoArr as $v){?>
				<li><a href="<?php echo $v['url']?>"><?php echo $v['title']?></a></li>
				<?php }?>
				
			</ul>
			<ol class="clear" id="focus-num">
				<?php foreach($advInfoArr as $k=>$v){?>
				<li onclick="setImage(<?php echo $k+1;?>);" <?php if($k==0){?>class="current"<?php }?>><?php echo $k+1;?></li>
				<?php }?>
			</ol>		
		</div>	
		<div>
			<?php foreach($arr as $v){?>
			<div class="news-list-item clear">
				<div class="news-list-item-pic">
				<a href="<?php echo BASE_URL?>News/detail.php?id=<?php echo $v['id']?>">
				<?php if($v['imagename']==''){?>
				<img src="<?php echo BASE_URL;?>photoview/638990D050163D3495FCF397FC87F9E0.jpg.165x100.jpg" alt=""/>
				<?php }else{?>
				<img src="<?php echo BASE_URL;?>upload/<?php echo $v['imagename']?>" alt=""/>
				<?php }?>
				</a>
				</div>
				<div class="news-list-item-txt">
					<h1><a href="<?php echo BASE_URL?>News/detail.php?id=<?php echo $v['id']?>"><?php echo $v['title']?></a></h1>
					<p><?php echo $v['content'];?></p>
				</div>
			</div>
			<?php }?>	
			<div class="page-list clear">
				<?php echo $page->pages();?>
			</div>
	  </div>
	</div>
	<div class="side-right-300">
		<h3 class="hot-title">24小时排行榜</h3>
		<?php require ROOT.'Common/right.php';?>		
	
	</div>
</div>
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