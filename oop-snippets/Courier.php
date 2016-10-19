<?php

namespace Shipping;

class Courier {
  public $name;
  public $homeCountry;
  
  /* Old code before using serialize()
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
  
  public function __toString() {
    return $this->name . ' (' . $this->homeCountry . ')<br>';
  }
  */
  
  public function __construct($name, $homeCountry) {
    $this->name = $name;
    $this->homeCountry = $homeCountry;
    $this->logFile = $this->getLogFile();
    return true;
  }
  
  protected function getLogFile() {
    return fopen('/tmp/error_log.txt', 'a');
  }
  
  protected function log($message) {
    if ($this->logFile) {
      fputs($this->logFile, "Log message: " . $message . "\n");
    }
  }
  
  public function __sleep() {
    // Only store the safe properties
    return array("name", "homeCountry");
  }
  
  public function __wakeup() {
    // Properties are restored; now add the logFile
    $this->logFile = $this->getLogFile();
    return true;
  }
  
  public function __toString() {
    return $this->name . ' (' . $this->homeCountry . ')<br>';
  }
  
}

$courier = new \Shipping\Courier("Sample Courier");
$courier->homeCountry = 'Peru';
echo $courier;
$courier->log("Hello World!");
/*
// Serialized data can be stored into a database (since it is a text-based format)
echo serialize($courier);

// echo var_dump($courier);
*/