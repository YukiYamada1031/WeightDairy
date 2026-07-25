<?php

$record = "
<form action=\"confirm.php\" method=\"POST\">
<label for=\"weight\">体重</label>
<input type=\"number\" id=\"weight\" name=\"weight\" step=\"0.1\" value=\"64.5\" required>
<input type=submit value=\"確定\">
</form>
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
  <?php print $record ?><br>
</body>
</html>