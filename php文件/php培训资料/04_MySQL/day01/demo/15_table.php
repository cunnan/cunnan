<?php
header("Content-Type:text/html;charset=utf-8");
//读出数据库中的内容
//1、连接数据库
mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms");
//3、操作
$query = "select id,title,addtime from cms_news";
$result = mysql_query($query);
 


?>
<table width="500" border="1">
<tr><th>编号</th><th>新闻标题</th><th>发布时间</th><th>操作</th></tr>
<?php //循环获取结果
while($row = mysql_fetch_assoc($result)){
?>
<tr><td><?php echo $row['id']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['addtime']; ?></td>
<td>更新/删除</td></tr>
<?php
} 
?>
</table>












