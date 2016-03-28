<?php
include_once '0067_triangle.php';

function loop($arr1, $arr2) {
    foreach ($arr2 as $key => $value) {
        if ( !array_key_exists($key - 1, $arr1) ) {
            $arr2[$key] += $arr1[$key];
        } else if ( !array_key_exists($key, $arr1) ) {
            $arr2[$key] += $arr1[$key - 1];
        } else {
            $arr2[$key] += $arr1[$key] > $arr1[$key - 1] ? $arr1[$key]: $arr1[$key - 1];
        }
    }
    return $arr2;
}

function main($src) {
    for ($i = 0; $i < count($src) - 1; $i++ ) {
        $src[$i + 1] = loop($src[$i], $src[$i+1]);
    }
    echo(max($src[count($src) - 1]));
}

main($src);

