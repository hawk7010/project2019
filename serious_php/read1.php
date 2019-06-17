<?php

$file = @fopen('access.log', 'r') or die('ファイルが読み込めません。');

flock($file, LOCK_SH);
while(!feof($file)) {
  $line = fgets($file);
  echo '<p>'.$line.'</p>';
}
flock($file, LOCK_UN);
fclose($file);
 ?>
