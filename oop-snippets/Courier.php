<?php

namespace Shipping;

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
  
  public function calculateShipping($parcel) {
    // Sample rate for shipping to a destination
    $rate = 1.78;
    
    // Calculate the cost
    $cost = $rate; //* $parcel->weight; // Sample property
    return $cost;
  }
  
  public static function getCouriersByCountry($country) {
    // Get a list of couriers with their homeCountry = $country
    
    // Create a Courier object for each result
    
    // Return an array of the results
    return $courierList;
  }
  
}

$courier = new \Shipping\Courier("Sample Courier");
echo var_dump($courier);