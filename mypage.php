<?php
require_once('db.php');

$sql = 'SELECT * FROM profile';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$allinfo = $stmt->fetchAll();

if(!empty($allinfo)){
  foreach($allinfo as $info){
    $name = $info['name'];
    $birthday = $info['birthday'];
    $goal = $info['goal'];
    $reason = $info['reason'];
  }
} else {
  $name = $birthday = $goal = $reason = '登録されていません。';
}

$edit = "<button class='return-button' onclick=\"location.href='mypage_edit.php'\">変更する</button>";
$return = "<button class='return-button' onclick=\"location.href='index.php'\">戻る</button>";

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weight Dairey｜マイページ</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php require_once('header.html') ?>
  <div class='info'>
    <h2>マイページ</h2>
    <p>名前</p>
    <?php print $name; ?>
    <p>生年月日</p>
    <?php print $birthday; ?>
    <p>目標体重</p>
    <?php print $goal; ?>
    <p>痩せたいと思った理由</p>
    <?php print $reason; ?>
    <?php print $edit; ?>
    <?php print $return; ?>
  </div>
</body>
</html>