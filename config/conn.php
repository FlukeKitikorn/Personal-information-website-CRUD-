<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbName ="personal_crud";
 
try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbName;charset=utf8", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";  // เพิ่มบรรทัดนี้เพื่อยืนยันการเชื่อมต่อ
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  exit;
}

  //show error
  // ini_set('display_errors', 1);
  // ini_set('display_startup_errors', 1);
  // error_reporting(E_ALL);
?>