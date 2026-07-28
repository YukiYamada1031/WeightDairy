<?php

// db.php
function getDbConnection() {
  $dsn = 'mysql:host=localhost;dbname=your_db_name;charset=utf8mb4';
  $user = 'your_username';
  $password = 'your_password';

  try {
      $pdo = new PDO($dsn, $user, $password, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      ]);
      return $pdo;
  } catch (PDOException $e) {
      // 接続失敗時は処理を止めてエラー表示
      die("DB接続エラー: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8'));
  }
}

?>