<?php 
class employee{
	public $name;
	public $age;
	public $salary;
	function __construct($na,$a,$s){
		$this->name =$na;
		$this->age =$a;
		$this->salary=$s;
	}

	function info(){
		echo "the name of user is::"." ".$this->name."<br>";
		echo "the age of user is::"." ".$this->age."<br>";
		echo "the salary of user is::".".".$this->salary."<br>";
	}
}



?>





<?php
class manager extends employee{
	public $car =205;
	public $tea =500;
	public $totalsalary;
	
function info(){
	
	$this->totalsalary= $this->car + $this->tea + $this->salary;
		echo "the name of user is::"." ".$this->name."<br>";
		echo "the age of user is::"." ".$this->age."<br>";
		echo "the salary of manager is::".".".$this->totalsalary."<br>";
	}

} 
?>






<?php
$obj1= new employee('adnan',22,250000);
$obj1->info();

$obj2= new manager('adnan',22,250000);
$obj2->info();
?>














