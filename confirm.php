<?php

$Button = "
<button class='button-confirm' onclick=\"location.href='index.php'\">一覧画面に戻る</button>
";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weight Dairy　完了画面</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php require_once('header.html') ?>
  <div class='confirm'>
    <p>体重記録を完了しました。</p>
    <br>
    <?php print $Button ?>
  </div>
</body>
</html>