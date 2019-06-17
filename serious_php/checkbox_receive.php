<?php
//チェックボックスの値を取得しましょう。
$color = $_POST['colors'];
var_dump($color);
 ?>

 <!DOCTYPE html>
 <html lang="ja">
 <head>
   <meta charset="UTF-8">
 </head>
 <body>
   <h1>受信ページ</h1>
   <h3>好きな色</h3>
   <ul>
     <?php foreach($color as $var) { ?>
       <li><?php echo htmlspecialchars($var, ENT_QUOTES, 'UTF-8'); ?></li>
     <?php } ?>
   </ul>
   <p>あなたが好きな色は<?php echo implode('と',$color); ?></p>
 </body>
 </html>
