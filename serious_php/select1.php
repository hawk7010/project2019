 <?php

$dsn = 'mysql:dbname=test_data01;host=localhost;charset=utf8';
$user = 'root';
$password = '';

try {
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM user";
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  $data = array();
  $count = $stmt->rowCount();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
  }
  echo '処理が終了しました';
} catch(PDOException $e) {
  print($e->getMessage());
  die();
}
var_dump($count);
var_dump($data);
  ?>
