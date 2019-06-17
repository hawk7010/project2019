 <?php
 if($_SERVER['REQUEST_METHOD'] === 'POST') {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $inquery = $_POST['inquery'];

   $pattern = '/\A([a-z0-9_\-\+\/\?]+)';
   $pattern .= '@([a-z0-9\-]+\.)+[a-z]{2,6}\z/i';

   if(!preg_match($pattern, $email)) {
     $err = 'メールアドレスの形式が違います。';
   }

   if(!isset($err)) {
     mb_language("Japanese");
     mb_internal_encoding("UTF-8");
     $subject = 'お問い合わせありがとうございます。';
     $inquery = <<< EOM
     {$name}さん、
     お問い合わせ内容：
     {$inquery}
EOM;
     $headers = 'From: sender@sender.com'."\r\n";

     if(mb_send_mail($email, $subject, $inquery, $headers) === FALSE) {
       $message = 'メール送信に失敗しました';
     } else {
       $message = 'お問い合わせを受け付けました。確認メールを送信しております。';
     }
   }
 }
 ?>
 <!DOCTYPE html>
 <html lang="ja">
 <head>
   <meta charset="UTF-8">
   <style type="text/css">
   .red-text{color:red}
   </style>
   <title>お問い合わせフォーム</title>
 </head>
 <body>
   <h1>お問い合わせ</h1>
   <?php if(isset($message)){echo '<p class="red-text">'.$message.'</p>';} ?>
   <form action="" method="POST">
     <label>お名前</label>
     <input type="text" name="name">
     <label>メールアドレス</label>
   <?php if(isset($err)){echo '<p class="red-text">'.$err.'</p>';} ?>
     <input type="text" name="email">
     <p>お問い合わせ内容</p>
     <textarea name="inquery" rows="4" cols="40"></textarea>
     <input type="submit">
   </form>
 </body>
 </html>
