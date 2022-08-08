<?php
$servername = "localhost";
$username = "root";
$password = "Simform@123";
$dbname = "smartycrud";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>