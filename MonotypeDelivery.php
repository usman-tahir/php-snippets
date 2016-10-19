<?php

require "Courier.php";

class MonotypeDelivery extends Courier {
  public $name;
  public $homeCountry;
  
  public function __construct($name) {
    parent::__construct($name);
  }
  
  public function ship($parcel) {
    // Put the item in the box
    echo "Put the " . $parcel . " in a container for shipping";
    // Send it
    
    return true;
  }
}