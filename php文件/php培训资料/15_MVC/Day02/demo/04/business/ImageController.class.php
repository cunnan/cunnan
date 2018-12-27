<?php
require_once 'BaseController.class.php';
class ImageController extends BaseController{
	function verify(){
		header('content-type:image/jpeg');
		$image = imagecreatetruecolor(120, 30);
		$white = imagecolorallocate($image, 255, 255, 255);
		imagefill($image, 0, 0, $white);	
		$color = imagecolorallocate($image, mt_rand(50, 100),mt_rand(20, 200),mt_rand(0, 255));
		imagestring($image, 5, 35, 10, mt_rand(1000, 9999), $color);
		imagejpeg($image);
		imagedestroy($image);
	}
}
