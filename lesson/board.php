<?php
  require_once("./functions.php");
  $errs = [];
  $data = [];
  $dbh = get_db_connect('test_data01', 'localhost', 'utf8');

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = get_post('name');
    $comment = get_post('comment');

    if(!check_words($name, 50)) {
      $errs[] = 'お名前欄を修正してください。';
    }

    if(!check_words($comment, 200)) {
      $errs[] = 'コメント欄を修正してください';
    }

    if(count($errs) === 0) {
      insert_comment($dbh, $name, $comment);
      $data = select_comments($dbh);
    }
  }

  include_once('view.php');
 ?>
