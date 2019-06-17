<?php

$id = "";

if(isset($_GET['id'])) {
  $id = $_GET['id'];
}

$dsn = 'mysql:dbname=test_data01;host=localhost;charset=utf8';
$user = 'root';
$password = '';

$sql = <<< EOF
SELECT user.id,
      user.name,
      user.age,
      club.club_name,
      club.count,
      club.overview
 FROM user JOIN club ON user.club_id = club.club_id WHERE user.id = :id
EOF;

try {
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $dbh->prepare($sql);
  $stmt->bindvalue(':id', $id, PDO::PARAM_INT);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
//  var_dump($row);
} catch (PDOException $e) {
  $e->getMessage();
  die();
}
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <style type="text/css">
  .search{float:right;}
  </style>
  <title>SQLテスト</title>
</head>
<body>
  <div class="search">
    <p>会員IDを入力してください</p>
    <form action="" method="GET">
      <input type="text" name="id">
      <input type="submit" value="確認">
    </form>
  </div>
  <h1>会員データ</h1>
  <?php if($row === FALSE): ?>
    <p>存在しない会員IDです。</p>
  <?php else: ?>
  <table border="1">
    <tr>
      <th>お名前</th>
      <th>年齢</th>
      <th>クラブ</th>
      <th>月の活動回数</th>
      <th>概要</th>
    </tr>
    <tr>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['age'] ?></td>
      <td><?php echo $row['club_name'] ?></td>
      <td><?php echo $row['count']?>回</td>
      <td><?php echo $row['overview'] ?></td>
    </tr>
  </table>
  <?php endif; ?>
</body>
</html>
