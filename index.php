<?php
require_once('db.php');

$Button = "
  <div id='index-button'>
    <button class='start-button' onclick=\"location.href='record.php'\">本日の記録を始める</button>
    <button class='end-button' onclick=\"location.href='top.php'\">トップ画面に戻る</button>
  </div>
";

$sql = 'SELECT * FROM weight_record ORDER BY record_day ASC';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

$touroku = '';
foreach($results as $result) {
  $day = $result['record_day'];
  $weight = $result['weight'];

  $touroku .= '<tr>';
  $touroku .= '<td>' . $day . '</td>';
  $touroku .= '<td>' . $weight . ' kg</td>';
  $touroku .= '</tr>';
}

$frame = "
  <table>
    <tr>
      <th>日付</th>
      <th>体重</th>
    </tr>
    {$touroku}
  </table>
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
    <?php print $frame ?>
  </div>
</body>
</html>