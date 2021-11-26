<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
 


<div class="card ">
  <div class="card-header text-white bg-info text-center"><h1>OOP CONCEPT</h1></div>
  <div class="card-body">
  
<h2>1=>Intruduction:</h2>
<p>OOP mean opject oriented programming .oop in php it's like writing structure technic of codding.If we follow the oop concept we will get lots of benifit .it's very easy to code and reduce time also.oop base on class and object </p>

<h2>2=>Class and Object</h2>
<p>A class is a template for objects, and an object is an instance of class. its like container who contain attributes and methods.attributes are variable and method are function .suppos we create frute as a class and apple,banana,mangu are object of frute class .When the individual objects (apple, banana, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.</p>
<div class="text-center">
<h3>syntex</h3>
---------------
<p>

class frute{<br><br>

  attribute\\<br>

  public $name;<br>
  public $color;<br><br>


  method\\<br>

  function set_name($name){<br>

  $this->name=$name;<br>

}<br><br>

function set_color($color){<br>
$this->color = $color;<br>
  
}<br><br>

  function get_name(){<br>

  return $this->name;<br>

}<br><br>

  function get_color(){<br>

  return $this->color;

}<br><br>



}<br><br>

object\\<br>

$obj_name= new frute()<br>
$obj_color= new frute()<br>


$obj_name->set_name('apple');<br>
$obj_color->set_color('red');<br><br>

echo $obj_name->get_name();<br>
echo $obj_color->get_color();



  </p>

    <?php



class frute{



  public $name;
  public $color;



  function set_name($name){

  $this->name=$name;

}

function set_color($color){
$this->color = $color;
  
}

  function get_name(){

  return $this->name;

}

  function get_color(){

  return $this->color;

}



}




$obj= new frute();
// $obj= new frute();


$obj->set_name('apple');
$obj->set_color('red');
echo "Ans==> <br>";
echo $obj->get_name();
echo "<br>";
echo $obj ->get_color();



?>


  <h3>syntex</h3>
---------------
<p>

class frute{<br><br>

  attribute\\<br>

  public $name;<br>
  public $color;<br><br>


  method\\<br>

  function set_name($name){<br>

  $this->name=$name;<br>

}<br><br>

function set_color($color){<br>
$this->color = $color;<br>
  
}<br><br>

  function get_name(){<br>

  return $this->name;<br>

}<br><br>

  function get_color(){<br>

  return $this->color;

}<br><br>



}<br><br>

object\\<br>

$obj_name= new frute()<br>
$obj_color= new frute()<br>


$obj_name->set_name('apple');<br>
$obj_color->set_color('red');<br><br>

echo $obj_name->get_name();<br>
echo $obj_color->get_color();



  </p>








 <?php



class car{



  public $quantity =10;




  function dubble_quantity(){

  $this->quantity=$this->quantity*2;

}


}


echo "Ans==> <br>";

$obj1= new car();
$obj2= new car();


$obj1->dubble_quantity();
echo $obj1->quantity;
echo "<br>";
echo $obj2->quantity;



?>


</div>







<h2>3=>Constructor adn Distructor:</h2>




  </div>
</div>




































    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>