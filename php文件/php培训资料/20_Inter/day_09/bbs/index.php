<?php
header("content-type:text/html;charset=utf-8");

//实例化Memcache类
$mem = new Memcache();
//连接服务
$mem->connect("localhost",11211);
//从缓存中读取数据
$t = $mem->get("ttt");

if($t == NULL)
{
	$t = time();
	//向缓存中添加数据
	//$mem->set("ttt",$t,NULL,5);//存储数据，不压缩
	$mem->set("ttt",$t,MEMCACHE_COMPRESSED,5);//存储数据，压缩
}

//替换缓存中的数据
//$mem->replace("ttt",time(),NULL,4);
//删除指定的缓存数据
//$mem->delete("ttt");
//清空缓存
//$mem->flush();


echo $t;

//关闭连接
$mem->close();











