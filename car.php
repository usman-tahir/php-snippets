<?php

class Car {
  
  # Private instance variables (must access and mutate with methods below)
  private $color = "";
  private $model = "";
  
  # Mutating methods for the Car class 
  public function setColor($color) {
    $this -> color = $color;
  }
  
  public function setModel($model) {
    $this -> model = $model;
  }
  
  # Accessing methods for the Car class
  public function getColor() {
    return $this -> color;
  }
  
  public function getModel() {
    return $this -> model;
  }
  
  # 'toString()' equivalent for the Car class
  public function describe() {
    return "The " . $this -> getModel() . " is " . $this -> getColor() . ".\n";
  }
}

$bmw = new Car();
$bmw -> setColor("black");
$bmw -> setModel("BMW");

echo $bmw -> describe();