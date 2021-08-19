<?php

$numbers= [1, 5, 2, 3, 4, 1, 5, 3, 2, 3];
function soDem($numbers, $value) {
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($value == $numbers[$i]){
            $count++;
        }
    }return $count;

}
$admin = soDem($numbers, 3);
echo 'so lan xuat hien'. $admin;
