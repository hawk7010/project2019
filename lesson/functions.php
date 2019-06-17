<?php

function html_html_escape($word) {
  return htmlspecialchars($word, ENT_QUOTES, 'UTF-8');
}

function get_post($key) {
  if(isset($_POST[$key])){
    $var = trim($_POST[$key]);
    return $var;
  }
}

function check_words($word, $length) {
  if(mb_strlen($word) === 0){
    return FALSE;
  } else if(mb_strlen($word) > $length) {
    return FALSE;
  } else {
    return TRUE;
  }
}

function get_db_Connect($dbname,$host,$charset) {
  try {
    $dsn = 'mysql:dbname='.$dbname.';host='.$host.';charset='.$charset;
    $user = 'root';
    $password = '';

    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbh;

  }catch(PODExcetion $e) {
    $e->getMessage();
    die();
  }
}

function insert_comment($dbh, $name, $comment) {
  try {
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO board (name, comment, created) VALUES (:name, :comment,'{$date}')";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
    /* $stmt->bindValue(':created', $date, PDO::PARAM_STR); */
    $stmt->execute();
  } catch(PODExcetion $e){
    $e->getMessage();
    die();
  }
}

function select_comments($dbh) {
  $sql = 'SELECT * FROM board';
  $stmt = $dbh->prepare($sql);
  $stmt->execute();

  $data = array();

  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
  }
  return $data;
}

 ?>
