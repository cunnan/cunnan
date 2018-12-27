<?php
header('Content-Type:text/html;charset=utf-8');
$arr = array(
		'userName'=>'tom',
		'age' =>18,
		'sex' =>'男',
		'salary' =>8888.88
);
// 输出数组中某一个值   男值
echo $arr['sex'];
echo '<hr/>';
// 循环遍历每个值
$arr = array('a',20,'c','d');
// count,sizeof :获得数组或对象的个数
$count = count($arr);
for($i=0;$i<$count;$i++){
	echo $arr[$i].'<br/>';
}
echo '<br/>';
$arr = array(
		'userName'=>'tom',
		'age' =>18,
		'sex' =>'男',
		'salary' =>8888.88
);
foreach($arr as $k=>$v){
	//echo $arr[$k].'<br/>';
	//echo $v.'<br/>';
	// 形如  ['userNmae'] = tom, ['age']=18
	echo '['.$k.']='.$v.'<br/>';
}
echo '<hr/>';
//键名称存在修改，不存在添加
$arr = array(
    5 => 'tom',
	7 => 'rose',
	16 =>'alice'		
);
echo '<pre>';
print_r($arr);
echo '</pre>';
$arr[16] = 'jerry'; // 修改
$arr[22] ='john'; //添加

echo '<pre>';
print_r($arr);
echo '</pre>';











