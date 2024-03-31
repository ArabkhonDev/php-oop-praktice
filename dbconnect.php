<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "task";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  $sql = "CREATE DATABASE myDBPDO";
  $conn->exec($sql);
} catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
  echo $sql . "<br>" . $e->getMessage();
}
?>