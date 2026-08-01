<?php
require_once('db.php');


$name = $_POST['name'];
$birthday = $_POST['birthday'];
$goal = $_POST['goal'];
$reason = $_POST['reason'];

$sql = 'SELECT * FROM profile';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$info=$stmt->fetchAll();

if(empty($info)){
  $sql = 'INSERT INTO profile(user_id, name, birthday, goal, reason) VALUES(?, ?, ?, ?, ?)';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$user_id, $name, $birthday, $goal, $reason]);
} else{
  $sql = 'UPDATE profile SET name=?, birthday=?, goal=?, reason=?';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$name, $birthday, $goal, $reason]);
}

header('Location: mypage.php');
?>