<?php
//POSTされた値を取得する
$name = $_POST['user_name'];
$hobby = $_POST['hobby'];
?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>登録ページ</h1>
<!--HTMLの中にechoプログラムを埋め込みましょう。-->
<p>こんにちは<?php echo $name; ?>さん</p>
<p>趣味は<?php echo $hobby; ?>ですね</p>
<p>登録完了いたしました。</p>
</body>
</html>