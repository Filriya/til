<?php

include_once "_mod.php";

#
#The number, 1406357289, is a 0 to 9 pandigital number because it is made up of each of the digits 0 to 9 in some order, but it also has a rather interesting sub-string divisibility property.
#
#Let d1 be the 1st digit, d2 be the 2nd digit, and so on. In this way, we note the following:
#
#d2d3d4=406 is divisible by 2
#d3d4d5=063 is divisible by 3
#d4d5d6=635 is divisible by 5
#d5d6d7=357 is divisible by 7
#d6d7d8=572 is divisible by 11
#d7d8d9=728 is divisible by 13
#d8d9d10=289 is divisible by 17
#Find the sum of all 0 to 9 pandigital numbers with this property.


#d6 = 5 or 0
#
#
#11の倍数 3digit abc の時 a+c=b かつ a,b,c > 1
#d6 = 5確定
$result = [];
for ( $i = 500; $i < 599; $i++) {
    $count = count(array_unique(str_split(strval($i))));
    if($i % 11 == 0 && strlen(strval($i)) == $count) {
        $result[] = $i;
    }
}

#[d6, d7, d8] = 506, 517, 528, 539, 561, 572, 583, 594
#
#13の倍数
#10a + b = 13a - 3a + b
#a= d7d8
#b= d9
#3a-b % 13 = 0
#[d6, d7, d8, d9] = [5, 7, 2, 8], [5, 8, 3, 2];

$result2 = [];
foreach ($result as $key => $val) {
    $a = substr($val, 1, 2);
    for($i = 0; $i <= 9; $i++) {
        if ((intval($a) * 3 - $i) % 13 == 0) {
            str_replace(strval($i), "", $val, $count);
            if($count == 0 ) {
                $result2[] = $val.$i;
            }

        }
    }
} 


#17の倍数
# 100a + b = 102a - 2a + b 
# b - 2a が17の倍数
# d9d10 - 2*d8
$result3 = [];
foreach ($result2 as $key => $val) {
    $d8 = substr($val, 2, 1);
    $d9 = substr($val, 3, 1);
    for($i = 0; $i <= 9; $i++) {
        if ((intval($d9.$i) - 2 * intval($d8)) % 17 == 0) {
            str_replace(strval($i), "", $val, $count);
            if($count == 0 ) {
                $result3[] = $val.$i;
            }

        }
    }
} 

#7の倍数
$result4 = [];
foreach ($result3 as $key => $val) {

    $d6 = substr($val, 0, 1);
    $d7 = substr($val, 1, 1);
    for($d5 = 0; $d5 <= 9; $d5++) {
        if ((2 * intval($d5) + intval($d6.$d7)) % 7 == 0) {
            str_replace(strval($d5), "", $val, $count);
            if($count == 0 ) {
                $result4[] = $d5.$val;
            }

        }
    }
}

#2の倍数
$result5 = [];
foreach ($result4 as $key => $val) {
    for($d4 = 0; $d4 <= 9; $d4++) {
        if ($d4 % 2 == 0) {
            str_replace(strval($d4), "", $val, $count);
            if($count == 0 ) {
                $result5[] = $d4.$val;
            }

        }
    }
}

#3の倍数
$result6 = [];
foreach ($result5 as $key => $val) {
    $d4 = substr($val, 0, 1);
    $d5 = substr($val, 1, 1);
    for($d3 = 0; $d3 <= 9; $d3++) {
        if (($d3 + $d4 + $d5) % 3 == 0 ) {
            str_replace(strval($d3), "", $val, $count);
            if($count == 0 ) {
                $result6[] = $d3.$val;
            }

        }
    }
}

$result = 0;
foreach ($result6 as $val) {
  $arr = str_split(strval($val));
  $remain = range(0, 9);

  foreach ($arr as $x) {
    if(array_key_exists($x, $remain)) {
      unset($remain[$x]);
    }
  }
  $remain = array_values($remain);
  $result += intval($remain[0].$remain[1].$val);
  $result += intval($remain[1].$remain[0].$val);
}
e($result);
