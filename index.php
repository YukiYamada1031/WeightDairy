<?php

$Button = "
  <div id='index-button'>
    <button class='start-button' onclick=\"location.href='record.php'\">本日の記録を始める</button>
    <button class='end-button' onclick=\"location.href='top.php'\">トップ画面に戻る</button>
  </div>
";

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weight Dairy　一覧ページ</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php require_once('header.html') ?>
  <div class='index'>
    <div class='goal'>
      <h2>減量の目標：</h2>
    </div>

    <?php print $Button ?>


  </div>
</body>
</html>