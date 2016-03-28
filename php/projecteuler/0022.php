<?php
include_once "0022_names.php";

function getAlphabeticalValue($str) {
    $all = array_flip(range('A', 'Z'));
    $result = 0;
    foreach(str_split($str) as $value){
        $result += $all[$value] + 1;
    }
    return $result;
}
function main($src) {
    usort($src, "strnatcmp");
    $result = 0;
    foreach ($src as $key => $value) {
       $num = getAlphabeticalValue($value);    
       $result += ($key + 1)*$num;
    }
    echo $result;
}

main($src);
