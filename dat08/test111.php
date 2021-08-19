<?php

$pattern = '/[0-9]/';
$string = 'Học lập trình web online tại toidicode.com'; 
if (preg_match($pattern, $string)) {
    echo 'chuỗi chứa toàn chữ';
} else {
    echo 'chuỗi chua so';
}