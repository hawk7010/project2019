<?php
function html_escape($word) {
  return htmlspecialchars($word, ENT_QUOTES, 'UTF-8');
}

function get_post($key) {
  if(isset($_POST[$key])) {
    $var = trim($_POST[$key]);
    return $var;
  }
}

function check_words($word, $length) {

  if(mb_strlen($word, $length) === 0) {
    return FALSE;
  } else if(mb_strlen($word) > $length) {
    return TRUE;
  }
}

function get_db_connect() {
  $dsn = 'mysql:dbname=test_data01;host=localhost;charset=utf8';
  $user = 'root';
  $password = '';

  try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    $e->getMessage();
    die();
  }

  return $dbh;
}
 ?>
