<?php
class frute{
	function __destruct(){
		echo "end";

	}
	function test(){
		echo "hello world";
	}

	function __construct(){
		echo "start";

	}
	
} 
$obj=new frute();
echo "<br>";
echo $obj->test();
?>
<p> when creat  object of class  then by default contructor will run and destructor will run end of the script</p><br>
<h1>my name is adnan</h1>

<?php 
class test{
	function __construct($y){
		$this->x=$y;

	}
	function func(){
		echo $this->x;
	}
}
$object=new test(20);
echo $object->func();
?><br>

