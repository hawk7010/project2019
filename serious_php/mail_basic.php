<?php

mb_language("Japanese");
mb_internal_encoding("UTF-8");

$user_name = 'naoto';
$to = 'dev.takanohashi@gmail.com';
$subject = "メールアドレス1";

$message = <<< EOF
{$user_name}さん、
このメールはテスト送信です。
http://{$_SERVER['SERVER_NAME']}
EOF;

$headers = 'From: send@sender.com'."\r\n";

$result = mb_send_mail($to, $subject, $message, $headers);
if($result === TRUE) {
  echo '送信成功です。';
} else {
  echo '送信失敗です。';
}
 ?>
