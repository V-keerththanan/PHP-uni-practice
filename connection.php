<?php
// refer link - https://phpdelusions.net/pdo_examples/select
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=uni", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  
  
} catch(PDOException $e) {
  die("Connection failed: " . $e->getMessage());
}


?>