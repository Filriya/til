<?php
function prob($num) {
    $permil = 2.5;
    echo $num.": ";
    echo round(1 - pow((1 - $permil / 1000), $num * 10), 3) * 100;
    echo "% \\";

    $discount_rate = 10000 / 11000;
    $once = 9800 / 8400 * 2500;
    echo $once * $num;
    echo "\n";
}

for ($i = 1; $i < 50; $i++) {
    prob($i);
}
