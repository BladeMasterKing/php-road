<?php

$timestamp_a = mktime(0, 0, 0, 3, 31, 2023);
$timestamp_b = mktime(0, 0, 0, 1, 31, 2024);
if($timestamp_a > $timestamp_b){
    echo "A大于B \n";
} elseif ($timestamp_a < $timestamp_b){
    echo "A小于B \n";
} else {
    echo "相等 \n";
}

