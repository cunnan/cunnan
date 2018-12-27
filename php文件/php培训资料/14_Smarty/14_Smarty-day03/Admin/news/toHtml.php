<?php
header("content-type:text/html;charset=utf-8");
require '../../config.ini.php';
require ROOT.'function/function.php';
$start=isset($_GET['start'])?$_GET['start']:0;
$db=Db::getInstance();
$arr=$db->select("news","*","id>$start","1","","id asc");
if(!$arr){
	echo "哥们，静态化完成。";
	exit();
}
$smarty->assign('arr',$arr[0]);
$content=$smarty->fetch("news/detail.html");
$path=ROOT."html/".$arr[0]['id'].".html";
$f=fopen($path,'w');
$len=fwrite($f,$content);
if($len){
	echo "id为：".$arr[0]['id']."，静态化成功";
	//继续
	?>
	<script type="text/javascript">
	setTimeout(function(){
		location.href="toHtml.php?start=<?php echo $arr[0]['id']?>";
		},500)
	</script>
	<?php
}else{
	echo "id为:".$arr[0]['id']."，静态化失败";
}