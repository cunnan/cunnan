<?php
//计算所有商品总价
function getTotalPrice($arr)
{
	$totalPrice = 0;//所有商品总价
	foreach ($arr as $v)
	{
		$p = $v["price"] * $v["bookCount"];
		$totalPrice += $p;//累加
	}
	return $totalPrice;
}