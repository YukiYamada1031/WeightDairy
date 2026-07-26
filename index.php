<?php

$Button = "
  <button onclick=\"location.href='record.php'\">本日の記録を始める</button><br>
  <button onclick=\"location.href='top.php'\">記録を終える</button>
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
  <?php require_once('header.html') ?>
  <?php print $Button ?>
</body>
</html>