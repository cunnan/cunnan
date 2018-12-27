<?php
header('Content-Type:text/html;charset=utf-8');
$arr =array(
	   'userName'=>array(
	      'tom',
	   	  'rose',
	   	  'john',		
	   	  'alice'	
	   ),
		'age'=>array(
				18,
				20,
				22,
				17
		),
		'sex'=>array(
				'男',
				'女',
				'男',
				'女'
		),
		'salary'=>array(
				8888.88,
				8899.99,
				8877.77,
				8866.66
		),
);
/*将上面的关联+索引的二维数组转为标准的索引+关联的二维数组 
 *  $arr = array(
   	   0=>array('userName'=>'tom','age'=>18,'sex'=>'男','salary'=>8888.88),
	   1=>array('userName'=>'rose','age'=>20,'sex'=>'女','salary'=>9888.88),
	   2=>array('userName'=>'jerry','age'=>22,'sex'=>'男','salary'=>9998.88),
	   3=>array('userName'=>'john','age'=>17,'sex'=>'女','salary'=>7888.88),
   	   4=>array('userName'=>'alice','age'=>19,'sex'=>'女','salary'=>8788.11)
   );
 */
// 方法一
foreach($arr as $key=>$val){//行
	            // $key  userName age sex salary
	            // $val  一维数组
	            /* array('tom','rose','john','alice')	
	               array(18,20,22,17)	
	             * array('男','女','男','女')
	             * array(8888.88,8899.99,8877.77,8866.66)
	             */
	foreach($val as $k=>$v){//列
		         //$k = 0 1 2 3
		         /*$v  'tom','rose','john','alice'
		          *    18,20,22,17
		          *    '男','女','男','女'
		          *    8888.88,8899.99,8877.77,8866.66
		         */
		$newarr[$k][$key] =$v;
		/* 第一行$newarr[0]['userName'] ='tom' 
		 * $newarr[1]['userName'] ='rose'
		 * $newarr[2]['userName'] ='john'
		 * $newarr[3]['userName'] ='alice' 
		 * 第二行 $newarr[0]['age'] =18;
		 * $newarr[1]['age'] =20;
		 * $newarr[2]['age'] =22;
		 * $newarr[2]['age'] =17;... 
		 */
	}
}
echo '<pre>';
print_r($newarr);
echo '</pre>';
// 方法二
foreach($arr['userName'] as $k=>$v){//共循环4次获得4个用户信息
	             //$arr['userName'] 遍历一维数组
	             //$k 0 1 2 3
	             //$v tom rose john alice
    $newarr2[$k]['userName'] =$v;
    $newarr2[$k]['sex']=$arr['sex'][$k]; 
    $newarr2[$k]['age'] =$arr['age'][$k];
    $newarr2[$k]['salary']=$arr['salary'][$k];
	
}
echo '<pre>';
print_r($newarr2);
echo '</pre>';






























