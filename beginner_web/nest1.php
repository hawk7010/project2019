<?php

$attend = 1;
//欠席は0 出席は１
$place = 'b';

if( $attend === 0 ) {
    echo 'パーティを欠席にて承りました。';
} else if( $attend === 1 ) {
    echo 'パーティを出席にて承りました。';
    if( $place === 'a' ) {
        echo '会場はAホテルでございます。'.'<br>';
    } else if( $place === 'b' ) {
        echo '会場はBホテルでございます。'.'<br>';
    }
}