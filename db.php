<?php

$db_host = 'localhost';
$db_name = 'weight_dairy';
$db_user = 'root';
$db_pass = 'root';
$db_charset = 'utf8mb4';

// DSN（Data Source Name）の作成
$dsn = 'mysql:host='.$db_host.';dbname='.$db_name.';charset='.$db_charset;

// PDOのオプション設定
$option = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // SQLインジェクション対策
    PDO::ATTR_EMULATE_PREPARES => false,    
);

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, $option);
} catch (PDOException $e) {
    exit('DB接続エラー:'. $e->getMessage());
}

?>