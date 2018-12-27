<?php
define('ROOT',"D:/www/psd1611/14_Smarty/");
require ROOT.'libs/Smarty.class.php';
$smarty=new Smarty();
$smarty->setTemplateDir(ROOT."template");
$smarty->setCompileDir(ROOT."template_c");
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";
$pdo=new PDO("mysql:host=localhost;dbname=projectone","root","root");
function myautoload($classname){
	require ROOT.'class/'.$classname.".class.php";
}
spl_autoload_register('myautoload');