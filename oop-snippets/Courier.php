<?php

class Courier {
  public $name;
  public $homeCountry;
  
  public function __construct($name) {
    $this->name = $name;
    return true;
  }
  
  public function ship($parcel) {
    // Sends the parcel to its destination
    return true;
  }
  
}