<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'sphinx/sphinxapi.php';
	
	//获得表单提交的数据
	$keyword = $_POST["keyword"];
	
	//通过sphinx获得主键值
	$sc = new SphinxClient();//实例化
	$sc->SetServer("localhost",9312);//连接服务
	$sc->SetConnectTimeout(30);//连接的超时时间
	$sc->SetMaxQueryTime(30);//最大的查询时间
	$sc->SetArrayResult(true);//返回结果的类型
	$sc->SetMatchMode(SPH_MATCH_ANY);//设置切词模式
	/*
	 * Sphinx切词方式
	 * SPH_MATCH_ALL：切词，所有词必须完全匹配
	 * SPH_MATCH_ANY：切词，任意一词匹配就出现
	 * SPH_MATCH_PHRASE：不切词
	 */
	$result = $sc->Query($keyword,"*");//查询索引文件
	/*
	 * Query方法的第二个参数：代表要检索的索引文件是谁
	 * "*"：代表检索所有索引文件
	 * "索引名"：代表检索指定的索引
	 * "索引名,索引名"：代表同时检索多个索引
	 */
	//获得主键值
	$str = "";
	if($result["matches"] != NULL)
	{
		foreach ($result["matches"] as $v)
		{
			$str .= "{$v["id"]},";
		}
		$str = rtrim($str,",");
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>搜索结果</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
  </head>
  <body>
    <table border="1" align="center">
      <tr>
        <td>编号</td>
        <td>标题</td>
        <td>时间</td>
      </tr>
<?php 
	$url = "mysql:host=localhost;dbname=ttnews";
	$user = "root";
	$pwd = "root";
	$conn = new PDO($url,$user,$pwd);
	$conn->query("set names utf8");
	$st = $conn->query("select * from newsArticles where articleId in ({$str})");
	$rs = $st->fetchAll();
	foreach ($rs as $v)
	{
		echo "<tr>";
		echo "  <td>{$v["articleId"]}</td>";
		echo "  <td>{$v["title"]}</td>";
		echo "  <td>{$v["dateandtime"]}</td>";
		echo "</tr>";
	}
?>
    </table>
  </body>
</html>







