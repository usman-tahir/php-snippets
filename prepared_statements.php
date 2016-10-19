
<?php

try {
  $db = new PDO('mysql:host=localhost;dbname=recipe-app', 'root', 'root');
  
  // Query for one recipe
  $sql = 'SELECT name, description, chef FROM recipes WHERE id = 2';
  $statement = $db->prepare($sql);
  
  // Perform the query
  $statement->execute();
  $recipe = $statement->fetch();
  print_r($recipe);
  
} catch(PDOException $e) {
  echo "Could not connect to the database.";
}
