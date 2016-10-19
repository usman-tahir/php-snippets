<?php

class Parcel {
  
  protected $weight;
  protected $destinationCountry;
  
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
  
}

$myParcel = new Parcel();
$myParcel->setWeight(50)->setCountry("Peru");