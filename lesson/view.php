<!DOCTYPE html>
<html>
<head>
  <meta carset="UTF-8">
  <link rel="stylesheet" type="text/css" href="./view.css">
  <title>ひとこと掲示板</title>
</head>
<body>
  <h1>ひとこと掲示板</h1>
  <table id="part1">
    <tr><th>名前</th><th>コメント</th><th>時刻</th></tr>
    <?php if(count($data)):
    foreach($data as $row):
    ?>
    <tr>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo nl2br($row['comment']); ?></td>
      <td><?php echo $row['created']; ?></td>
    </tr>
    <?php
    endforeach;
    endif;
    ?>
    </table>
    <form action="" method="POST">
      <p>お名前*<input type="text" name="name">(50文字まで)</p>
      <p>ひとこと*<textarea name="comment" rows="4" cols="40"></textarea>(200文字まで)</p>
      <input type="submit" value="書き込む">
    </form>
</body>
</html>
