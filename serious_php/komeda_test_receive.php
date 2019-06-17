<?php

  if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $comment = $_POST['comment'];

    if(mb_strlen($name) === 0 || mb_strlen($comment) === 0) {
      $miss = 1;
    }else {
      try {

        $timestamp = time();

        $dsn = "mysql:dbname=test_data01;dbhost=local;charset=utf8";
        $user = 'root';
        $password = "";

        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $mysql = "INSERT INTO test_database01 (name, comment) VALUES (:name,:comment)";

        $stmt = $dbh->prepare($mysql);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        //$stmt->bindValue(':timestamp', $timestamp, PDO::PARAM_STR);
        $stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
        $stmt->execute();
        echo '接続成功です。';
      }catch(PDOException $e) {
        $e->getMessage();
        die();

      }
    }
  } else {
    $miss = 1;
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset = "UTF-8">
  <!-- <style type="text/css"> -->
  <title>WEBSITE_TEST002</title>
</head>
<body>
  <?php if(isset($miss)): ?>
  <p>コメント送信が失敗しました</p>
  <?php else: ?>
  <p>コメントが送信されました。</p>
  <?php endif; ?>
  <form action="./komeda_test.php" method="POST">
    <input type="submit" value="戻る">
  </form>
</body>
</html>
