<?php

require "Courier.php";

class PigeonPost extends Courier {
  
  public $name;
  public $homeCountry;
  
  public function __construct($name) {
    parent::__construct($name);
  }
  
  public function ship($parcel) {
    // Fetch the pigeon
    
    // Attach the parcel
    
    // Send
    
    return true;
  }
}
