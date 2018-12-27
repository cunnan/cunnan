<?php
header('Content-Type:text/html;charset=utf-8');
$arr = array(
        0=>array('id'=>1,'name'=>'家用电器','pid'=>0),
		1=>array('id'=>2,'name'=>'手机','pid'=>0),
		2=>array('id'=>3,'name'=>'电脑办公','pid'=>0),
		3=>array('id'=>4,'name'=>'电视','pid'=>1),
		4=>array('id'=>5,'name'=>'空调','pid'=>1),
		5=>array('id'=>6,'name'=>'洗衣机','pid'=>1),
		6=>array('id'=>7,'name'=>'合资品牌','pid'=>4),
		7=>array('id'=>8,'name'=>'国产品牌','pid'=>4),
		8=>array('id'=>9,'name'=>'互联网品牌','pid'=>4),
		9=>array('id'=>10,'name'=>'挂式空调','pid'=>5),
		10=>array('id'=>11,'name'=>'柜式空调','pid'=>5),
		11=>array('id'=>12,'name'=>'中央空调','pid'=>5),
		12=>array('id'=>13,'name'=>'滚筒洗衣机','pid'=>6),
		13=>array('id'=>14,'name'=>'洗烘一体机','pid'=>6),
		14=>array('id'=>15,'name'=>'乐视','pid'=>8),
		15=>array('id'=>16,'name'=>'创维','pid'=>8)
			
);
// str_repeat('--',$sum);
function getTypeTree($arr,$id=0,$num=0){
	static $link='';
	$gangStr = str_repeat('--',$num);
	$num++;
	foreach($arr as $v){
		if($id==$v['pid']){//当前菜单的id是下一个菜单pid
		  $link.='<li><span>'.$v['id'].$gangStr.$v['name'].'</span><span><a href="#">修改</a>|<a href="#">删除</a></span></li>';
	      getTypeTree($arr,$v['id'],$num);
		}
	}
	return $link;
}
echo '<ul>';
echo getTypeTree($arr);
echo '</ul>';




?>
<!--
<ul>
   <li>家用电器
      <ul>
         <li>电视
             <ul>
               <li>合资品牌</li>
               <li>国产品牌
                   <ul>
                     <li>乐视</li>
                     <li>创维</li>
                   </ul> 
               </li>
               <li>互联网品牌</li>
             </ul>
         </li>
         <li>空调
            <ul>
               <li>挂式空调</li>
               <li>柜式空调</li>
               <li>中央空调</li>
             </ul>
         </li>
         <li>洗衣机
             <ul>
               <li>滚筒洗衣机</li>
               <li>洗烘一体机</li>
             </ul>
             
         </li>
      </ul>
   </li>
   <li>手机</li>
   <li>电脑办公</li>
</ul>

<ul>
   <li>家用电器 <span><a href="#">修改</a><a href="#">删除</a></span></li>
   <li>----电视<span><a href="#">修改</a><a href="#">删除</a></span></li>
   <li>------合资品牌<span><a href="#">修改</a><a href="#">删除</a></span></li>
   <li>------国产品牌<span><a href="#">修改</a><a href="#">删除</a></span></li>
   <li>--------乐视<span><a href="#">修改</a><a href="#">删除</a></span></li>
   <li>--------创维<span><a href="#">修改</a><a href="#">删除</a></span></li> 
   <li>------互联网品牌<span><a href="#">修改</a><a href="#">删除</a></span></li>
   <li>----空调<span><a href="#">修改</a><a href="#">删除</a></span></li>
   <li>------挂式空调<span><a href="#">修改</a><a href="#">删除</a></span></li>
   <li>------柜式空调<span><a href="#">修改</a><a href="#">删除</a></span></li>
   <li>------中央空调<span><a href="#">修改</a><a href="#">删除</a></span></li>
   <li>----洗衣机<span><a href="#">修改</a><a href="#">删除</a></span></li>
   <li>------滚筒洗衣机<span><a href="#">修改</a><a href="#">删除</a></span></li>
   <li>------洗烘一体机<span><a href="#">修改</a><a href="#">删除</a></span></li>
   <li>手机</li>
   <li>电脑办公</li>
</ul>

-->














