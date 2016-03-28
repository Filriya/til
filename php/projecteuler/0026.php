<?php
#A unit fraction contains 1 in the numerator. The decimal representation of the unit fractions with denominators 2 to 10 are given:
#
#1/2 =   0.5
#1/3 =   0.(3)
#1/4 =   0.25
#1/5 =   0.2
#1/6 =   0.1(6)
#1/7 =   0.(142857)
#1/8 =   0.125
#1/9 =   0.(1)
#1/10    =   0.1
#Where 0.1(6) means 0.166666..., and has a 1-digit recurring cycle. It can be seen that 1/7 has a 6-digit recurring cycle.
#
#Find the value of d < 1000 for which 1/d contains the longest recurring cycle in its decimal fraction part.
#
include_once '_mod.php';

function division($a, $b, $digits = 3000) {
    $str = "";
    $res = gmp_div_qr($a, $b);
    $str = $str.gmp_strval($res[0]).".";
    $a = gmp_intval($res[1]);

    while($digits >= 0) {
        $a = $a*10;
        $res = gmp_div_qr($a, $b);
        $str = $str.gmp_strval($res[0]);
        $a = gmp_intval($res[1]);
        $digits--;
    }
    $str = rtrim($str, '0');
    return $str;
}

$result = 0;
$max = 0;
foreach (range(1, 1000) as $x) {
    $divi = division(1, $x);
    $divi = ltrim($divi, "0");
    $divi = ltrim($divi, ".");
    $divi = ltrim($divi, "0");
    for($i = 1, $j = strlen($divi); $i < $j; $i++ ) {
        $a = substr($divi, 0, $i);
        $b = substr($divi, $i, $i);
        $c = substr($divi, $i*2, $i);
        if( $a == $b) {
            e($x.":".$a.": ".$b);
            if($max < strlen($a)) {
                $result = $x;
                $max = strlen($a); 
            }
            break;
        }
    }
}
echo $result;




