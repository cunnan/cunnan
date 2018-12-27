<?php 
//验证码类
/*
 * 1、创建画布（背景色浅色 且颜色随机）
 * 2、干扰
 * 3、验证码文字
 * 4、输出
 * 5、释放资源
 */
class Code{
	public $img; //画布的资源
	//以下成员属性会随着需求的改变而发生改变
	public $width; //验证码的宽
	public $height; //验证码的高
	public $length; //验证码长度
	
	//定义构造方法给成员属性赋初值
	function __construct($width,$height,$length){
		$this->width = $width;
		$this->height = $height;
		$this->length = $length;
	}
	
	//创建成员方法，作为验证码类的出口程序
	function printImage(){
		//1、创建画布
		$this->bg();
		//2、干扰
		$this->disturb();
		// 3、验证码文字
		$this->codes();		
		//4、输出
		$this->outImage();
		
	}
	//1、创建画布（背景色浅色 且颜色随机）
	function bg(){
		$this->img = imagecreatetruecolor($this->width,$this->height);
		//背景色浅色 且颜色随机
		$color = imagecolorallocate($this->img,rand(200,255),rand(200,255),rand(200,255));
		//填充画布背景色
		imagefill($this->img,0,0,$color);
	}
	
	/*
	 * 2、干扰	 * 
	 */
	function disturb(){
		//100随机的点
		for($i=0;$i<=100;$i++){
			$color = imagecolorallocate($this->img,rand(100,200),rand(100,200),rand(100,200));
			imagesetpixel($this->img,rand(1,$this->width-1),rand(1,$this->height-1),$color);
		}
		
		//干扰 10条线
		for($i=0;$i<=10;$i++){
			$color = imagecolorallocate($this->img,rand(100,200),rand(100,200),rand(100,200));
			imageline($this->img,rand(1,$this->width-1),rand(1,$this->height-1),rand(1,$this->width-1),rand(1,$this->height-1),$color);
		}
	}
	
	// 3、验证码文字
	function codes(){
		$codes = "abcdefghijklmnopqrstuvwxyz0123456789";
		for($i=0;$i<$this->length;$i++){
			$font = 5;
			$x = ($this->width/$this->length)*$i+5;
			$y = rand(5,10);
			$content = substr($codes,rand(0,strlen($codes)-1),1);
			$color = imagecolorallocate($this->img,rand(0,100),rand(0,100),rand(0,100));
			imagestring($this->img,$font,$x,$y,$content,$color);
			
		}
	}
	
	//4、输出
	function outImage(){		
		header("Content-Type:image/png");
		imagepng($this->img);
	}
	
	
	//定义析构方法释放资源
	function __destruct(){
		imagedestroy($this->img);
	}
}















