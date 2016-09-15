<?php

class Car {
  public $color = "";
  public $model = "";
  
  public function getColor() {
    return $this -> color;
  }
  
  public function getModel() {
    return $this -> model;
  }
}

$bmw = new Car();
$bmw -> color = "black";
$bmw -> model = "BMW";

echo $bmw -> getColor();