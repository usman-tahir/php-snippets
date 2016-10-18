<?php

// Make a GET request using cURL
function curlGet($url) {
  $ch = curl_init(); // Initialize the cURL session
  
  // Set the cURL options
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_URL, $url);
  
  // Execute the cURL session, close the session, and return the results
  $results = curl_exec($ch);
  curl_close($ch);
  return $results;
}

// Declare an array to store the scraped data
$sessionResultArray = array();

// Return an XPath object
function returnXPathObject($item) {
  // Instantiating a new DomDocument object
  $xmlPageDOM = new DomDocument();
  
  @$xmlPageDOM->loadHTML($item); // Load the HTML from the downloaded page
  $xmlPageXPath = new DOMXPath($xmlPageDOM);
  return $xmlPageXPath;
}

$sessionResult = curlGet("http://www.google.com/webhp");
$sessionResultXPath = returnXPathObject($sessionResult);


// Basic elements of a page (determine if they exist and then add them to $sessionResultArray)
/*
$title = $sessionResultXPath->query('//h1');
if ($title->length > 0) {
  $sessionResultArray['title'] = $title->item(0).nodeValue;
}

print_r($sessionResultArray);
*/