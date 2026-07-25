<?php

$confirm = '体重記録を完了しました。';
$button = "
<button onclick=\"location.href='index.php'\">一覧画面に戻る</button>
";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php print $confirm ?><br>
  <?php print $button ?>
</body>
</html>