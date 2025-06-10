<?php

$num = -4;

$posOrNeg = '';

$evOrOdd = '';

if ($num > 0) {
    $posOrNeg = 'Positive';
} elseif ($num < 0) {
    $posOrNeg = 'Negative';
} else {
    $posOrNeg = 'Zero';
}

if ($num % 2 == 0) {
    $evOrOdd = 'Even';
} else {
    $evOrOdd = 'Odd';
}

echo "The number $num is $posOrNeg and $evOrOdd.\n";