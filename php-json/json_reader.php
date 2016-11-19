<?php

$jsonContents = file_get_contents("./data.json");
if ($jsonContents) {
  echo "TRUE<br>";
  echo var_dump($jsonContents);
}
$jsonArray = json_decode($jsonContents, true);
print_r($jsonArray);