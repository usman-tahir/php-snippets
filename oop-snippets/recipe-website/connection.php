
<?php

try {
  $db = new PDO('mysql:host=localhost;dbname=recipe-app', 'root', 'root');
  // echo "Connected successfully.";
  
  $statement = $db->query("SELECT name, chef FROM recipes ORDER BY name DESC");
  /*
  while($row = $statement->fetch()) {
    echo $row["name"] . " by " . $row["chef"] . "<br>";
  }
  */
  $result = $statement->fetch(PDO::FETCH_ASSOC);
  print_r($result);
} catch(PDOException $e) {
  echo "Could not connect to the database.";
}
