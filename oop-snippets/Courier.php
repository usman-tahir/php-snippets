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
  
  public static function getCouriersByCountry($country) {
    // Get a list of couriers with their homeCountry = $country
    
    // Create a Courier object for each result
    
    // Return an array of the results
    return $courierList;
  }
  
}

$mono = new Courier("Monospace Delivery");
echo var_dump($mono);
echo $mono->name;

// Example usage of static method
$spanishCouriers = Courier::getCouriersByName('Spain');