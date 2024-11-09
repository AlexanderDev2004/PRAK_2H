<?php
  $databaseHost = 'LAPTOP-MHVH0S2R';
  $databaseName = 'crud1_db';
  $databaseUsername = '';
  $databasePassword = '';
  
  try {
      $dsn = "sqlsrv:Server=$databaseHost;Database=$databaseName";
      $pdo = new PDO($dsn, $databaseUsername, $databasePassword);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      die("Connection failed: " . $e->getMessage());
  }
    
?>