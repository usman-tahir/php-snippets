
<?php

try {
  $db = new PDO('mysql:host=nonsense');
  echo 'Connected to the database.';
} catch (Exception $e) {
  echo 'Error: ' . $e->getMessage();
}