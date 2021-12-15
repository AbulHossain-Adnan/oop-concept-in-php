<!-- 1.abstract class contain atlast 1 abstract function.
2.abstract function must declear but not implement.
3.abstract could not create object.
4.abstract class ,child class must contain abstract function. -->

<?php
abstract class visha{
	private function n(){
		echo "bye";
	}

	 abstract public function show();


	}

	class ticket extends visha{

		public function show(){
			echo "hello";
		}
		public function n(){
			echo "dfdfd";
		}
	}

	$obj =new ticket();
	$obj->show();
	echo "<br>";
	$obj->n();




?>

