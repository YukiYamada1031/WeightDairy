<?php
require_once('db.php');

$Button = "
  <div id='index-button'>
    <button class='start-button' onclick=\"location.href='record.php'\">記録測定</button>
    <button class='end-button' onclick=\"location.href='mypage.php'\">マイページ</button>
  </div>
";

$sql = 'SELECT * FROM weight_record ORDER BY create_day DESC limit 5';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

$touroku = '';
foreach($results as $result) {
  $day = $result['create_day'];
  $weight = $result['weight'];

  $touroku .= '<tr>';
  $touroku .= '<td>' . $day . '</td>';
  $touroku .= '<td>' . $weight . ' kg</td>';
  $touroku .= '</tr>';
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weight Dairy｜一覧ページ</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php require_once('header.html') ?>
  <div class='index'>
    <?php print $Button; ?>

    <table>
      <tr>
        <th>日付</th>
        <th>体重</th>
      </tr>
      <?php print $touroku; ?>
    </table>
  </div>

</body>
</html>