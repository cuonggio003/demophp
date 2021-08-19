<?php

include "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 4);
$circleThree = new ComparableCircle('circleThree', 6);

$test = $circleOne->compareTo($circleTwo);
echo ('Comparable: <br>');
echo $test;