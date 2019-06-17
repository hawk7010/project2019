<?php

$i = 1;

while( $i <= 20 ) {
    if( ($i % 3) == 0 ) {
        echo $i.'行目です。'.'<br>';
    }
    $i++;
}