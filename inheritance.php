<?php 
class frute1{
	function __construct(){
		echo "__construct1";
	}
}
class frute2 extends frute1{


}
$obj=new frute2();

?>
<p> when one class extends onother class thats call inheritance.class frute1 is parrent class and frute2 is chaild class that extends first class</p>
<p> we create object of chaild class and can access parrent class but if chaild class will have same constactore then chaild class will print</p>