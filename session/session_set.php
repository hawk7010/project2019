<?php

session_start();
$_SESSION['profile'] = array('user_name' => 'taro', 'location' => '関東');
$_SESSION['cart']['desk_01'] = 3;
$_SESSION['cart']['chair_07'] = 5;
?>

<html>
<body>
  <h1>セッションの練習</h1>
  <p><a href="session_check.php">次のページ</a></p>
  <p><a href="session_delete.php">セッションデータの削除</a>
</body>
</html>  