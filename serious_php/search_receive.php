<?php
$name = "";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name_data'];
}

$dsn = 'mysql:dbname=test_data01;host=localhost;charset=utf8';
$user = 'root';
$password = '';

if(mb_strlen($name) === 0):
?>
  <!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>再入力のお願い</title>
  </head>
  <body>
  <p>再入力してください</p>
  <form action="./search_send.php" method="POST">
    <input type="submit" value="戻る">
  </form>
  </body>
  </html>
<?php
endif;

$dbh = new PDO($dsn, $user, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT * FROM user';
$stmt = $dbh->prepare($sql);
$stmt->execute();
$count = $stmt->rowCount();
$array = array();

$i = 0;
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  if($name === $row['name']) {
    $array[] = $row;
    $i++;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>検索結果ページ</title>
</head>
<body>
  <h1>会員データ一覧</h1>
  <p><?php echo $i; ?>件見つかりました</p>
  <table border="1">
    <tr><th>id</th><th>名前</th></tr>
    <?php $i = 0; ?>
    <?php foreach($array as $row): ?>
      <tr><td><?php echo $row['id'] ?></td><td><?php echo $row['name'] ?></td></tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
