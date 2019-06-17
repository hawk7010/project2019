<?php

$dsn = 'mysql:dbname=test_data01;host=localhost;charset=utf8';
$user = 'root';
$password = '';

try {
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = 'SELECT * FROM user';
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  $count = $stmt->rowCount();
  $array = array();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $array[] = $row;
  }
  echo '処理が終了しました';
} catch(PDOException $e) {
  $e->getMessage();
  die();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8";
</head>
<body>
  <table border="1">
    <tr><th>id</th><th>user</th><th>age</th><th>email</th></tr>
    <?php  foreach($array as $row) { ?>
            <tr><td><?php echo $row['id']; ?></td><td><?php echo $row['name']; ?></td><td><?php echo $row['age']; ?></td><td><?php echo $row['email']; ?></td></tr>
    <?php  } ?>
  </table>
</body>
</html>
