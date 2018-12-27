<?php
require '../config.ini.php';
//根据文章id，去数据库中获取文章记录
$id=$_GET['id'];
$db=Db::getInstance();
$arr=$db->select("news","*","id=$id");
$clicktime=time();
$ip=$_SERVER['REMOTE_ADDR'];
//添加此文章的点击数 insert into clicknum(newsid,clicktime,ip) value()
$db->insert('clicknum',array('newsid'=>$id,'clicktime'=>$clicktime,'ip'=>$ip));
//获取评论数，参数评论的人数
$re=$db->select("comment","count(*) as num","newsid=$id");
$commentNum=$re[0]['num'];
$userArr=$db->select("comment","userid","newsid=$id","","","","userid");
$userNum=count($userArr);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻视界_<?php echo $arr[0]['title']?></title>
<link type="text/css" rel="stylesheet" media="all" href="<?php echo BASE_URL?>styles/reset.css"/>
<link type="text/css" rel="stylesheet" media="all" href="<?php echo BASE_URL?>styles/layout.css"/>
<link type="text/css" rel="stylesheet" media="all" href="<?php echo BASE_URL?>styles/common.css"/>
<script type="text/javascript" src="<?php echo BASE_URL?>js/jquery.js"></script>
<script type="text/javascript">
var newsid=<?php echo $_GET['id']?>;
function sendComment(){
	var content=$(".comment-content").val();
	$.ajax({
		url:'saveComment.php',
		data:'newsid='+newsid+"&content="+content,
		type:'post',
		dataType:'json',
		success:function(re){
				if(re.info==1){
					alert("评论发布成功");
					$("#commentNum").html(re.commentNum);
					$("#commentUserNum").html(re.userNum);
					$("#aCommentNum").html("评论("+re.commentNum+")");
					$(".comment-content").val('');
				}else{
					alert("评论发布失败");
				}
			}
		})
}
</script>
</head>
<body>
<!-- 通用顶部导航开始-->
<?php
require ROOT.'Common/header.php';
?>
<!--导航结束-->
<div class="section">
	<h1 class="article-title"><?php echo $arr[0]['title']?></h1>
	<div class="clear">
		<div class="side-left-680" id="article">		
			<div class="article-info"><?php echo date("Y-m-d H:i:s",$arr[0]['addtime'])?><a href="#" id="aCommentNum">评论(<?php echo $commentNum;?>)</a></div>
			<div class="article-body">
			<?php echo $arr[0]['content']?>
			</div>
			<div id="comment">
				<p class="comment-count"><a href="#">已有<span id="commentNum"><?php echo $commentNum;?></span>条评论，共<span id="commentUserNum"><?php echo $userNum;?>人</span>参与</a></p>
				<textarea class="comment-content" onfocus="this.value='';">请输入评论内容</textarea>
				<div class="comment-user-cont clear">
					<?php if(!isset($_COOKIE['userid'])){?>
					<div class="comment-user-username"><input type="text" name="username"     class="comment-input" value="请输入账号"/></div>
					<div class="comment-user-password"><input type="password" name="password" class="comment-input" value="请输入密码"/></div>
					<div class="comment-user-link"><input type="checkbox" name="remember" checked="checked" value="1"/> 下次自动登录<a href="<?php echo BASE_URL?>user/register.php?source=1">注册</a><a href="#">忘记密码？</a></div>					
					<?php }else{?>
					<div class="comment-user-logined">
						<span><?php echo $_COOKIE['username']?></span>
						<span><a href="#">退出</a></span>
						<a href="javascript:sendComment();" class="comment-publishing-btn">发布</a>
					</div>
					<?php }?>
				</div>
				
			</div>
		</div>
		<div class="side-right-300">
			<h3 class="hot-title">24小时排行榜</h3>
			<?php require ROOT.'Common/right.php';?>		
		
		</div>
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