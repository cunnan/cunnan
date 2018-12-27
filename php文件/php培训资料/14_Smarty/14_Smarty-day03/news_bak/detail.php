<?php
require '../config.ini.php';
require ROOT.'libs/Smarty.class.php';
$smarty=new Smarty();
//产生数据
$title="t1";
$content='c1';
$arr=array('id'=>1,'title'=>'t1','content'=>'c1');
//使用
//把模板目录告诉给smarty
$smarty->setTemplateDir(ROOT."template");
$smarty->setCompileDir(ROOT."template_c");//???
//指定标签的定界符
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";
//给模板传值
$smarty->assign('t',$title);
$smarty->assign('c',$content);
$smarty->assign('a',$arr);
//显示模板
$smarty->display("detail.html");









