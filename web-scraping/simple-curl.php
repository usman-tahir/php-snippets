<?php

// Function to make a GET request using cURL
function curlGet($url) {
  $ch = curl_init();

  // Setting the options for cURL
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_URL, $url);
  
  // Execute the cURL session
  $results = curl_exec($ch);
  curl_close($ch);
  
  // Return the results
  return $results;
  
}

$googlePage = curlGet("http://www.google.com/webhp"); // Load a Google Search page
echo $googlePage;