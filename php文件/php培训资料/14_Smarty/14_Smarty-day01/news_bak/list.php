<?php
require '../config.ini.php';
require ROOT.'libs/Smarty.class.php';
$smarty=new Smarty();
$smarty->setTemplateDir(ROOT."template");
$smarty->setCompileDir(ROOT."template_c");
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";
$arr=array(
	array('id'=>1,'title'=>'t1'),
	array('id'=>2,'title'=>'t2'),
	array('id'=>3,'title'=>'t3'),
	array('id'=>4,'title'=>'t4'),
	array('id'=>5,'title'=>'t5'),
	array('id'=>6,'title'=>'t6'),
	array('id'=>7,'title'=>'t7'),
	array('id'=>8,'title'=>'t8'),
);
$smarty->assign('arr',$arr);
$smarty->display("list.html");






