<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>list2.php</title>
  <style>
  .color-red{background-color:red;}
  </style>
</head>
<body>
<ul>
  <?php
  for($i = 1; $i <= 20; $i++) {
    if($i % 2 === 1) {
  ?>
    <li class="color-red">奇数</li>
  <?php
  } else {
  ?>
    <li>偶数</li>
  <?php
  }
}
   ?>
</ul>
</body>
</html>
