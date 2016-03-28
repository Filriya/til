<?php
date_default_timezone_set("UTC");

function main() {
    $count = 0;
    for( $i = 1901; $i <= 2000; $i++) {
        for ( $j = 1; $j <= 12; $j++) {
            $date = $i."-".$j.".-01";
            $datetime = date_create($date);
            $w = (int)date_format($datetime, 'w');
            if ( $w == 0) {
                $count++;
            }
        }
    }
    echo $count;
}


    main();
