<?php

include_once "_mod.php";

#
#It can be seen that the number, 125874, and its double, 251748, contain exactly the same digits, but in a different order.
#
#Find the smallest positive integer, x, such that 2x, 3x, 4x, 5x, and 6x, contain the same digits.


#6x -> 最大の桁は1に固定

main();
function main() {
    for ($i = 100000; $i < 199999; $i++) {
        for($j = 2; $j <= 6; $j++) {
            if (!hasSameDigits($i, $i * $j)) {
                break;
            } else if ($j == 6) {
                e($i);
                return;
            }
        }
    }
}

