<?php
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('Asia/Shanghai');
$subject = $_POST['subject'];
$cid = $_POST['cid'];
$content = $_POST['content'];
$addtime = time();

//生成标准SQL中的INSERT语句

$sql = "INSERT articles(subject,cid,content,addtime) VALUES('{$subject}','{$cid}','{$content}','{$addtime}')";


echo $sql;

