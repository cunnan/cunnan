<?php 
//引入分页类
include "Page.class.php";
//获取用户查找的关键词
$keyword = isset($_GET["keyword"])?$_GET["keyword"]:"";

$like = "";
if($keyword!=""){
	$like = " where title like '%".$keyword."%'";
}
//每页显示记录数
$pageSize = 5;
//1、连接数据库
mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms");
//3、操作
//读取出cms_news表中的数据
$query = "select id,title from cms_news $like";
$result = mysql_query($query);

//结果集的行数
$total = mysql_num_rows($result);
//实例化分页类
//$p = new Page(总记录数,每页显示记录数);
$p =  new Page($total,$pageSize);

//限制每一页输出的内容
//$offset = (当前页-1)*$pageSize
//echo $p->curPage;exit;
$offset = ($p->curPage-1)*$pageSize;
$query = "select id,title from cms_news $like limit $offset,$pageSize";
$result = mysql_query($query);

//获取查询的结果
$res = array();
while($row=mysql_fetch_assoc($result)){
	$res[] = $row;
}
//4、关闭数据库
mysql_close();

?>
<form action="" method="get">
查找新闻:<input type="text" name="keyword" />
<input type="submit" value="搜索"/>
</form>
<table width="500" border="1">
<tr><th>ID</th><th>新闻标题</th></tr>
<?php
foreach($res as $value){ 
?>
<tr><td><?php echo $value['id']; ?></td>
<td><?php echo $value['title']; ?></td></tr>
<?php 
}
?>
<tr>
<td colspan="2">
<?php
$p->pages(); 
?>
</td></tr>
</table>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>










