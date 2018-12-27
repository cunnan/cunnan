<?php
		$t=time()-24*3600;
		//获取数据
		/*
		select count(c.id) as num,c.newsid,n.title from clicknum as c join news as n
		on c.newsid=n.id
		where clicktime>$t
		group by newsid
		order by num desc
		*/
		$rightClickArr=$db->select("clicknum as c","count(c.id) as num,c.newsid,n.title","clicktime>$t","10","join news as n on c.newsid=n.id","num desc","c.newsid");
		$rightClickNum=1;
		?>
		<ol class="list-hot">
			<?php foreach($rightClickArr as $v){
				if($rightClickNum<=3){
				?>
			<li class="hot"><span class="top-num num1">0<?php echo $rightClickNum?></span><a href="<?php echo BASE_URL?>News/detail.php?id=<?php echo $v['newsid']?>" target="_blank"><?php echo $v['title']?></a></li>
			<?php }else{?>
			<li><span class="top-num">0<?php echo $rightClickNum?></span><a href="<?php echo BASE_URL?>News/detail.php?id=<?php echo $v['newsid']?>" target="_blank"><?php echo $v['title']?> </a></li>
			<?php 
				}
				$rightClickNum++;
			}?>
        </ol>