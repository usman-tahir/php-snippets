<?php

class Car {
  
  private $color;
  private $model;
  private $tank;
  private $mpg;
  
  # Get the color of the Car object
  public function getColor() {
    return $this -> color;
  }
  
  # Set the color of the Car object
  public function setColor($color) {
    $this -> color = $color;
  }
  
  # Get the model of the Car object
  public function getModel() {
    return $this -> model;
  }
  
  # Set the model of the car object
  public function setModel($model) {
    $this -> model = $model;
  }
  
  # Get the MPG rating of the Car object
  public function getMpg() {
    return $this -> mpg;
  }
  
  # Set the MPG rating of the Car object
  public function setMpg($mpg) {
    $this -> mpg = $mpg;
  }
  
  # Get the current fuel level of the Car object
  public function getTank() {
    return $this -> tank;
  }
  
  # Set the current fuel level of the Car object (by filling it)
  public function fill($float) {
    $this -> tank += $float;
  }
  
  # Take the Car object for a ride, and then display its travel details
  public function ride($float) {
    $miles = $float;
    $gallons = ($miles / $this -> getMpg());
    $this -> tank -= $gallons;
    echo $this -> rideDescription($float, $gallons);
  }
  
  # Travel detail printout for the Car object
  public function rideDescription($float, $gallons) {
    return "The " . $this -> getModel() . " drove " . $float . " miles, and used " . $gallons . " gallons of fuel.";
  }
  
}

# Sample Car object and manipulation
$bmw = new Car();
$bmw -> setColor("brown");
$bmw -> setModel("BMW");
$bmw -> setMpg(32);

$bmw ->fill(16.00);
$bmw -> ride(160);