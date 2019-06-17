<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>新規ユーザ登録</title>
</head>
<body>
  <h1>新規ユーザ登録</h1>
  <form action="signup.php" method="post">
    <p>お名前：<input type="text" name="name"><?php echo $errs['name']; ?></p>
    <p>メールアドレス：<input type="text" name="email"><?php echo $errs['email']; ?></p>
    <p>パスワード：<input type="password" name="password"><?php echo $errs['password']; ?></p>
    <p><input type="submit" value="登録する"></p>
  </form>
</body>
</html>
