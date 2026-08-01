<?php 
require_once('db.php');

$weight = $_POST['weight'];
$record_day = date('y-n-j');

$sql = 'INSERT INTO weight_record(weight, record_day, create_day) VALUES(?, ?, NOW())';
$stmt = $pdo->prepare($sql);
$stmt->execute([$weight, $record_day]);

header('Location: confirm.php');
exit;
?>