<?php 
class student{
	protected $info;

	public function __construct(age $info){
		$this->info=$info;

	}
	public function getinfo(){
		$this->info->get();
	}
}



class name implements show{
	public function get(){
		echo "what is your name";
	}
}

class age implements show{
	public function get(){
		echo "what is your age";
	}
}

interface show{
	public function get();

}




$name = new name();
$age = new age();



$student = new student($age);
$student->getinfo();



?>