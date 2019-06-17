<?php

$dsn = 'mysql:dbname=test_data01;host=localhost;charset=utf8';
$user = 'root';
$password = '';

try {
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO user (id, name, age, email) VALUES (NULL, '星野', '27', 'hoshino@gmail.com')";
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  echo '接続に成功しました';
} catch(PDOException $e) {
  print($e->getMessage());
  die();
}
 ?>
