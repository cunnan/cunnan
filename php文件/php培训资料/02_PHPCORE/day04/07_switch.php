<?php
header('Content-Type:text/html;charset=utf-8');
$week = 4;
switch($week){
	case 0:
		echo '星期日';
		break;
	case 1:
		echo '星期一';
		break;
	case 2:
		echo '星期二';
		break;
	case 3:
		echo '星期三';
		break;
	case 4:
		echo '星期四';
		break;
	case 5:
		echo '星期五';
		break;
	case 6:
		echo '星期六';
		break;
	default:
		echo '超出范围';
		break;
}
echo '<hr/>';
$day = 15;  // 松散比较  true==1
switch($day){
	case 1:
	case 2:
	case 3:
	case 4:
	case 5:
	case 6:
	case 7:
	case 8:
	case 9:
	case 10:
		echo '上旬';
		break;
	case 11:
	case 12:
	case 13:
	case 14:
	case 15:
	case 16:
	case 17:
	case 18:
	case 19:
	case 20:
		echo '中旬';
		break;
	case 21:
	case 22:
	case 23:
	case 24:
	case 25:
	case 26:
	case 27:
	case 28:
	case 29:
	case 30:
	case 31:
		echo '下旬';
		break;
	default:
		echo '超出范围';
		break;
		
}

















