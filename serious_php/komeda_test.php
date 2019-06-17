<?php

  try{
    $dsn = "mysql:dbname=test_data01;dbhost=local;charset=utf8";
    $user = "root";
    $password = "";

    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM test_database01";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    $array_data = array();

    while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $array_data[] = $data;
    }

  }catch(PODExcetion $e){
    $e->getMessage();
    die();
  }
 ?>

 <!DOCTYPE html>
 <html lang="ja">
 <head>
   <meta charset = "UTF-8">
   <link rel="stylesheet" type="text/css" href="./css/komeda.css">
   <title>WEBSITE_TEST001</title>
 </head>
 <body>
 <div id ="comments">
 <?php foreach($array_data as $var):?>
  <p><?php echo $var['name'];?> : <?php echo $var['timestamp']; ?></p>
  <p><?php echo nl2br($var['comment']); ?></p>
 <?php endforeach;?>
 </div>
 <div id = "comment_form">
 <form action="./komeda_test_receive.php" method="POST">
   <label>名前：</label>
   <input type="text" name="name" value = "名無しさん"><br>
   <label>コメント</label><br>
   <textarea rows="5"; cols="40" name="comment"></textarea><br>
   <input type="submit" value="送信">
 </form>
 </div>
 </body>
 </html>
