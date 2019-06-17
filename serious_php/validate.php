<?php
//ポスト内容を取得し、入力値が正しいか検証する。

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $movie = $_POST['movie'];

  if(mb_strlen($movie) === 0) {
    $err = '文字を入力してください。';
  } else if(mb_strlen($movie) > 20) {
    $err = '20文字以内で入力してください。';
  }
}
 ?>

 <!DOCTYPE html>
 <html lang="ja">
 <head>
   <meta charset="UTF-8">
   <style type="text/css">
   .center{text-align:center;}
   input{margin:5px;}
   </style>
   <title>validate</title>
 </head>
 <body>
 <div class="center">
   <h1>入力フォームを検証しよう</h1>
   <p>
   <?php
    if(isset($err)) {
      echo $err;
    } else {
      echo 'あなたの好きな映画は'.$movie.'です。';
    }
    ?>
   </p>
   <form action="" method="POST">
     <label>好きな映画</label>
     <input type="text" name="movie"><br>
     <input type="submit">
   </form>
 </div>
 </body>
 </html>
