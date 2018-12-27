<?php
header("Content-Type:text/html;charset=utf-8");
//读出数据库中的内容
//1、连接数据库
mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms");

//每页显示记录数
$pageSize = 5;

//获取总页数
//总记录数
$query = "select id from cms_news";
$result = mysql_query($query);
//获总记录数
$total = mysql_num_rows($result);
//总页数 = ceil(总记录数/每页显示记录数)
$totalPage = ceil($total/$pageSize); 


//获取当前页
$curPage=isset($_GET['p'])?$_GET['p']:1;

//$curPage的取值范围进行限制 
/*
 * $curPage 最小不能小于1
 * $curPage 最大为总页数
 */
if($curPage<1){ //0
	$curPage = 1;
}else if($curPage>$totalPage&&$totalPage!=0){	
	$curPage = $totalPage;	
}
//首页 上一页
//上一页 = 当前页-1
//$prev = 2-1 = 1
//prev = 1-1=0
$prev = $curPage-1;//1-1=0
$flist = "";
if($prev>0){
	$flist = "<a href='?p=1'>首页</a>&nbsp;
		  <a href='?p=".$prev."'>上一页</a>";
}

//1 2 3
$num = 3;
$mlist = "";
for($i=$num;$i>=1;$i--){
	$n = $curPage-$i;
	if($n>=1){
		$mlist.="&nbsp;<a href='?p=".$n."'>$n</a>&nbsp;";
	}
}

//4 
$mlist.= $curPage;
//5 6 7
for($i=1;$i<=$num;$i++){
	$n = $curPage+$i;
	if($n<=$totalPage){
		$mlist .="&nbsp;<a href='?p=".$n."'>$n</a>&nbsp;";
	} 
}

//下一页 尾页
$next = $curPage+1;
//next = 11+1 = 12
//next = 12+1 = 13
$llist = "";
if($next<=$totalPage){
	$llist = "<a href='?p=".$next."'>下一页</a>&nbsp;
		  <a href='?p=".$totalPage."'>尾页</a>";
}

//计算偏移量
$offset =($curPage-1)* $pageSize;

//3、操作
$query = "select id,title,addtime from cms_news 
		  limit $offset,$pageSize";

$result = mysql_query($query);
 


?>
<table width="600" border="1">
<tr><th>编号</th><th>新闻标题</th><th>发布时间</th><th>操作</th></tr>
<?php //循环获取结果
while($row = mysql_fetch_assoc($result)){
?>
<tr><td><?php echo $row['id']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['addtime']; ?></td>
<td>更新/<a href="delete.php?id=<?php echo $row['id']; ?>">删除</a></td></tr>
<?php
} 
?>
</table>
<?php
echo "共".$totalPage."页&nbsp;当前第".$curPage."页
	 &nbsp;".$flist.$mlist.$llist; 
?>











