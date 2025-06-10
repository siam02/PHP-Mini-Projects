<?php

$unit = 230;
$bill = 0;

if ($unit <= 50) {
    $bill = $unit * 3.50;
} elseif ($unit <= 100) {
    $bill = 50 * 3.50 + ($units - 50) * 4.00;
} elseif ($unit <= 200) {
    $bill = 0 * 3.50 + 50*  4.00 + ($units - 100) * 5.20;
} else {
    $bill = 50* 3.50 + 50 * 4.00 + 100 * 5.20 + ($units - 200) * 6.50;
}

echo "The electricity bill for $unit units is $bill.\n";