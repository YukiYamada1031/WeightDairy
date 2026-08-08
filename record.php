<?php
require_once('db.php');

$sql = 'SELECT weight FROM weight_record ORDER By record_day DESC limit 1';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$values = $stmt->fetch();
$value = $values['weight'];

$Record = "
<form class='form' action=\"store.php\" method=\"POST\">
<label class='label' for=\"weight\">本日の体重：</label>
<input class='input' type=\"number\" id=\"weight\" name=\"weight\" step=\"0.1\" value={$value} required><br>
<input class='submit' type=submit value=\"確定\">
</form>
";

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weight Dairy｜測定画面</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php require_once('header.html') ?>

  <?php print $Record ?><br>


</body>
</html>