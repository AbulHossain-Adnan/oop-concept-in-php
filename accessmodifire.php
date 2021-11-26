<?php 

class student{
	private $x=20;
	public $y=10;
	function name(){
		echo "adnan";
	}
	public function age(){
		echo $this->y;
	}
	private function gender(){
		echo "male";
	}
	protected function testage(){
		return  "hello";
	}
}


$obj=new student();

echo $obj->age();

?>
<p>private modifire:only can access inside class</p>
<p>protected can access inside class and chaild class</p>
<p>public modifire can access form anywere</p>



<?php 

class student2{
	private $num;
	
	function __construct(){
		 $this->num=1;
	}
	function test(){
		echo $this->num;
	}
	
}


$obj=new student2();

echo $obj->test();

?>
<p> ayvabe function call set kore privet ba protected value retrive kora jai</p>