<?php

mb_language('Japanese');        //日本語に対応させる
mb_internal_encoding('UTF-8');  //文字コードを「UTF-8」に設定させる

$user_name = 'naoto'; //ユーザネーム
$to = 'hawkmobile7010@gmail.com'; //宛先
$subject = <<< EOF
テストメールその２
EOF;

$message = <<< EOF
今日も会社を休んだ。
もうweb業界に行きたいな。
てか集中力が本当になくなった。
取り戻そう。
今日も積み重ねる！！
EOF;

$from = "ONLINE-TUTOR事務局";
$from_mail = "sender@sender.com";

$headers = '';
$headers .= "Cc: another@another.com \r\n";
$headers .= "Content-Type: text/plain \r\n";
$headers .= "Return-Path:". $from_mail." \r\n";
$headers = "From:".$from." \r\n";
$headers .= "Sender:".$from." \r\n";
$headers .= 'Reply-To:'.$from_mail." \r\n";
$headers .= 'Organization:'.$from." \r\n";

$result = mb_send_mail($to, $subject, $message, $headers);
if($result === TRUE) {
  echo '送信成功';
} else {
  echo '送信失敗';
}
 ?>
