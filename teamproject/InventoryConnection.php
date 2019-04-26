<?php
$hostname = 'localhost'; /*** mysql hostname ***/
$username = 'admin'; /*** mysql username ***/
$password = 'Pa11word'; /*** mysql password ***/


try {
    $conn = new PDO("mysql:host=$hostname;dbname=inventory", $username, $password);
} catch ( PDOException $e ) {
  echo "Connection failed: " . $e->getMessage();
}
?>