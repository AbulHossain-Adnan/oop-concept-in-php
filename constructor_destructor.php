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
<p> when creat  object of class  then by default contructor will run and destructor will run end of the script</p>