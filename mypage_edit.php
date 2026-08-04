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
  <form action='mypage_update.php' method='POST' class='edit-form'>
    <div class='form-group'>
      <label for='name' class='label'>名前</label>
      <input id='name' name='name' value='{$name}' class='input'>
    </div>

    <div class='form-group'>
      <label for='birthday' class='label'>生年月日</label>
      <input id='birthday' name='birthday' value='{$birthday}' class='input'>
    </div>

    <div class='form-group'>
      <label for='goal' class='label'>目標</label>
      <input id='goal' name='goal' value='{$goal}' class='input'>
    </div>

    <div class='form-group'>
      <label for='reason' class='label'>痩せたいと思った理由</label>
      <input id='reason' name='reason' value='{$reason}' class='input'>
    </div>

    <div class='button-group'>
      <input class='submit-info' type='submit' value='更新'>
      <button class='return-button' type='button' onclick=\"location.href='mypage.php'\">戻る</button>
    </div>
  </form>
";

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weight Dairey1｜編集画面</title>
  <link rel='stylesheet' href='style.css'>
</head>
<body>
  <?php require_once('header.html') ?>
  <div class='info-edit'>
    <h2>マイページ編集</h2>
    <?php print $input; ?>
  </div>
  </div>
</body>
</html>