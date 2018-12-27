<?php
header('Content-Type:text/html;charset=utf-8');
// 二维数组：索引+索引
$arr = array(
		   'a',
		   'b',
		   'c',
		   array('one','two','three'),
		   array('apple','orange','pear'), 		
		   'd',
		   'e'		
);
// 输出一个值   orange 的值  $arr[4]一维数组
echo $arr[4][1];
echo '<br/>';
//二维数组：关联+关联
$arr = array(
    'userName'=>'tom',
    'age' =>array(
         'one'=>18,
    	 'two'=>22,
    	 'three'=>19		
    ),
    'addr'=>array(
        'one'=>'北京',
    	'two'=>'天津',
    	'three'=>'上海'
    ),		
	'salary'=>8888.88	
);
// 输出 一个   天津的值
echo $arr['addr']['two'];
echo '<hr/>';
// 二维数组：索引+关联(重要 :表数据)
// 定义方法一
$arr = array(
   	   0=>array('userName'=>'tom','age'=>18,'sex'=>'男','salary'=>8888.88),
	   1=>array('userName'=>'rose','age'=>20,'sex'=>'女','salary'=>9888.88),
	   2=>array('userName'=>'jerry','age'=>22,'sex'=>'男','salary'=>9998.88),
	   3=>array('userName'=>'john','age'=>17,'sex'=>'女','salary'=>7888.88)		
);
echo '<pre>';
print_r($arr);
echo '</pre>';
echo '<br/>';
// 定义方法二
$arr2[] =array('userName'=>'tom','age'=>18,'sex'=>'男','salary'=>8888.88);
$arr2[] =array('userName'=>'rose','age'=>20,'sex'=>'女','salary'=>9888.88);
$arr2[] =array('userName'=>'jerry','age'=>22,'sex'=>'男','salary'=>9998.88);
$arr2[] =array('userName'=>'john','age'=>17,'sex'=>'女','salary'=>7888.88);
echo '<pre>';
print_r($arr2);
echo '</pre>';
//定义方法三

$arr3[0]['userName']='tom';
$arr3[0]['age']=18;
$arr3[0]['sex']='男';
$arr3[0]['salary']=8888.88;

$arr3[1]['userName']='rose';
$arr3[1]['age']=20;
$arr3[1]['sex']='女';
$arr3[1]['salary']=9888.88;

$arr3[2]['userName']='john';
$arr3[2]['age']=17;
$arr3[2]['sex']='男';
$arr3[2]['salary']=9998.88;

echo '<pre>';
print_r($arr3);
echo '</pre>';









































































