<?php

$Button = "
  <button class='button-top' onclick=\"location.href='index.php'\">始める</button>
";

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weight Dairy</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php require_once('header.html') ?>
  <div class="message">
    <h1>Weight Dairy</h1>
    <p>痩せて身体を絞れば、人生が変わる。</p>
    <?php print $Button ?>
  </div>
</body>
</html>