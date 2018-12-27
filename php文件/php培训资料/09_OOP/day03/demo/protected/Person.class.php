<?php 
class Person{
	protected $name = "tom";
	public $age = 10;
	private $sex = "male";
	
	private function eat(){
		echo "I can eat";
	}
	
	protected function say(){
		echo 'I can say';
	}
	
    public function walk(){
    	$this->say();
    	return $this->name;
    }
	
}
//$p = new Person();
//$p->name; //被protected修饰的成员属性和成员方法在类外
//$p->say(); //不能被访问
//echo $p->walk();




















