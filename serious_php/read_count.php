<?php

$file = @fopen('access.log','r') or die('ファイルが開けませんでした');
$count = 0;

flock($file, LOCK_SH);

while(!feof($file)) {
    $line = fgets($file);
    echo $line;
    $count++;
}

flock($file, LOCK_UN);
fclose($file);

echo '回数：'.($count-1);
 ?>
