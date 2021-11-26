<?php 

class frute{

	// properties
	public $name;
	public $color;

	// method

	function set_name($name){
		$this->name=$name;

	}
	function get_name(){
		return $this->name;
	}

	function set_color($color){
		$this->color=$color;
	}
	function get_color(){
		return $this->color;
	}

}




// object

$obj=new frute();
$obj->set_name('apple');
echo "frute name is:"." ". $obj->get_name();
echo "<br>";

$obj->set_color('red');
echo "color is:"." ". $obj->get_color();
?>