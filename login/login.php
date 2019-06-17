<?php
require_once('config.php');
require_once('./helpers/db_helper.php');
require_once('./helpers/extra_helper.php');

session_start();

if(!empty($_SESSION['member'])) {
  header('Location:'.SITE_URL.'member.php');
  exit;
}

//すでにログイン済みだったらmembers

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = get_post('email');
  $password = get_post('password');

  $dbh = get_db_connect();
  $errs = array();

  if(!email_exists($dbh, $email)) {
    $errs['email'] = 'メールアドレスが登録されていません。';
  } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errs['email'] = 'メールアドレスの形式が正しくないです。';
  } else if(!check_words($email, 200)){
    $errs['email'] = 'メール欄は必須、200文字以下で入力してください。';
  }

  if(!check_words($password, 50)) {
    $errs['password'] = 'パスワードは必須、50文字以下で入力してください';
  } else if(!$member = select_member($dbh, $email, $password)) {
    $errs['password'] = 'パスワードとメールアドレスが正しくありません';
    if(empty($errs)) {
      session_regenerate_id(true);
      $_SESSION['member'] = $member;
      header('Location:'.SITE_URL.'member.php');
      exit;
    }
  }
  //メールアドレスとパスワードが一致するか検証
//ログインする
}

include_once('./views/login_view.php')
 ?>
