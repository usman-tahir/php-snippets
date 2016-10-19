<?php

require "Trackable.php";

class Parcel implements Trackable {
  
  protected $weight;
  protected $destinationCountry;
  private $parcelId;
  
  public function setWeight($weight) {
    echo "weight set to: " . $weight . "<br>";
    $this->weight = $weight;
    return $this;
  }
  
  public function setCountry($country) {
    echo "destination country is: " . $country . "<br>";
    $this->destinationCountry = $country;
    return $this;
  }
  
  public function setParcelId($parcelId) {
    echo "The parcel's ID has been set to: " . $parcelId . "<br>";
    $this->parcelId = $parcelId;
    return $this;
  }
  
  public function getParcelId() {
    return $this->parcelId;
  }
  
  public function getTrackingInfo($parcelId) {
    echo "This parcel's tracking ID is: " . $parcelId . "<br>";
    // return true;
  }
  
}

$myParcel = new Parcel();
$myParcel->setWeight(50)->setCountry("Peru")->setParcelId(1234);

$parcelId = $myParcel->getParcelId();
$myParcel->getTrackingInfo($parcelId);