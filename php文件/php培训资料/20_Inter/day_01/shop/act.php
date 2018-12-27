<?php
header("content-type:text/html;charset=utf-8");
//操纵购物车
session_start();

//获得url中的参数
$bookId = $_GET["bookId"];
//获得产品详细信息
$url = "mysql:host=localhost;dbname=shop";
$user = "root";
$pwd = "root";
$conn = new PDO($url,$user,$pwd);
$conn->query("set names utf8");
$st = $conn->query("select * from bookInfo where bookId={$bookId}");
$rs = $st->fetch();
$bookInfo = array(
	"bookId"=>$rs["bookId"],
	"bookName"=>$rs["bookName"],
	"price"=>$rs["price"],
	"bookCount"=>1//该商品的数量
);
//添加购物车(向session中添加产品信息)
if($_SESSION["car"][$bookId] != NULL)
{
	//数量加一
	$_SESSION["car"][$bookId]["bookCount"]++;
}
else
{
	//没有重复购买，添加一个新商品
	$_SESSION["car"][$bookId] = $bookInfo;
}


//跳转到购物车页面
header("location:car.php");














