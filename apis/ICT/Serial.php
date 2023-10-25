<?php
// Specify the path to the JSON file
$jsonFilePath = './Serial.json';

// Read the JSON file content
$jsonData = file_get_contents($jsonFilePath);

// Parse the JSON data into a PHP associative array
$decodedData = json_decode($jsonData, true);

echo $jsonData;
?>