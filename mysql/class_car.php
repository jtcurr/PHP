<?php
  class Car {
  	static $wheels = 4;
  	var $hood = 1;
  	var $engine = 1;
  	var $doors = 2; 
  	function MoveWheels() {
      $doors = 6;
  	}
  	echo "$doors";
  }
  class Plane extends Car {
    var $wheels = 20;
    var $wings = 19;
    var $seats = 35;
  }
  $bmw = new Car();
  $lotus = new Plane();
  echo Car::$wheels;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Car Class</title>
</head>
<body>

</body>
</html>