<?php
require_once('db.php');

$sql = 'SELECT *  FROM profile ';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$allinfo=$stmt->fetchAll();

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

$input = "
  <form action='mypage_update.php' method='POST'>
    <label for='name'>名前</label>
    <input id='name' name='name' value={$name}>
    <label for='birthday'>生年月日</label>
    <input id='birthday' name='birthday' value={$birthday}>
    <label for='goal'>目標</label>
    <input id='goal' name='goal' value={$goal}>
    <label for='reason'>痩せたいと思った理由</label>
    <input id='reason' name='reason' value={$reason}>
    <input class='submit-info' type='submit' value='更新'>
  </form>
";

$return = "<button class='return-button' onclick=\"location.href='mypage.php'\">戻る</button>";

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weight Dairey1｜編集画面</title>
  <link rel='styleshett' href='style.css'>
</head>
<body>
  <?php require_once('header.html') ?>
  <?php print $input; ?>
  <?php print $return; ?>
  </div>
</body>
</html>