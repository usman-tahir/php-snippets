<?php

$jsonContents = file_get_contents("./data.json");
/*
if ($jsonContents) {
  echo "TRUE<br>";
  echo var_dump($jsonContents);
}
*/
$jsonArray = json_decode($jsonContents, true);
// print_r($jsonArray["colorsArray"]);
foreach ($jsonArray["colorsArray"][0] as $key => $value) {
  echo "The hex code for <span style='color: {$value}'>{$key}</span> is {$value}<br>";
}