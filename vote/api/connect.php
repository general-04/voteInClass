<?php

  $host = '127.0.0.1';
  $dbname = 'only403';
  $username = 'root';
  $password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "error: " . $e->getMessage();
}
?>