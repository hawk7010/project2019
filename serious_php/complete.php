<?php
$user_name = $_POST['user_name'];
$hobby = $_POST['hobby'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>登録ページ</title>
</head>
<body>
  <h1>登録ページ</h1>
  <p>こんにちは<?php echo $user_name; ?>さん。</p>
  <p>趣味は<?php echo $hobby; ?>ですね。</p>
  <p>登録完了いたしました。</p>
</body>
</html>
