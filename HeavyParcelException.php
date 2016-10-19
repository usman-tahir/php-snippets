
<?php

require "Parcel.php";
// require "Courier.php";

class HeavyParcelException extends Exception {}

class Courier {
  
  public function ship(Parcel $parcel) {
    if (empty($parcel->address) || !exists()) {
      throw new Exception('Address was not specified.');
    }
    
    // Check the weight
    if ($parcel->weight > 5) {
      throw new HeavyParcelException("This parcel exceeds the courier's weight limit.");
    }
    
    return true;
  }
  
}

$courier = new Courier("NextDay Delivery");
$parcel = new Parcel();
$parcel->setWeight(rand(1,7));

try {
  $courier->ship($parcel);
  echo 'Parcel shipped.';
} catch (HeavyParcelException $e) {
  echo 'Parcel weight error: ' . $e->getMessage();
} catch (Exception $e) {
  echo 'Something went wrong: ' . $e->getMessage();
}