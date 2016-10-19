<?php

require "Courier.php";

$mono = new \Shipping\Courier("Monospace Delivery");

// The \Shipping namespace appears in the echo below
echo var_dump($mono);