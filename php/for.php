<?php

$group_count = 3;

$level = array();

for ( $i = 0; $i < $group_count; $i++ ) {
    $j = $i + 1;
    $level[] = array("group" => "Group$j");
}



var_dump($level);
