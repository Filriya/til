<?php

include_once "_mod.php";

#If p is the perimeter of a right angle triangle with integral length sides, {a,b,c}, there are exactly three solutions for p = 120.
#
#{20,48,52}, {24,45,51}, {30,40,50}
#
#For which value of p ≤ 1000, is the number of solutions maximised?

#{a,b,c}
#a^2 + b^2 = c^2
#a+b+c = p

# a+b > c (a + b) > p - (a+b) => a+b > p/2 => c <= p/2
# a + b > p/2
#
# 1 <= a < p/2
# 1 <= b < p/2
# c < p/2

$result = 3;
$mostCount = 0;

for ($p = 3; $p <= 1000; $p++) {
    $pcount = 0;
    for($a = 1; $a < $p/2; $a++) {
        for($b = 1; $b < $p/2; $b++) {
            $c = $p - $a - $b;

            if($a*$a + $b*$b == $c*$c) {
                $pcount++;
            }
        }
    }

    if($pcount > $mostCount) {
        $result = $p;
        $mostCount = $pcount;
    }
}
e($result);
e($mostCount);
