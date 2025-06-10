<?php

$temp = 96;
$unit = 'F'; // C for Celsius, F for Fahrenheit

$convertedTemp = '';
if ($unit == 'C') {
    $convertedTemp = ($temp * 9/5) + 32;
} elseif ($unit == 'F') {
    $convertedTemp = ($temp - 32) * 5/9;
} else {
    echo "Invalid temperature unit.\n";
    exit;
}

echo "The converted temperature is $convertedTemp degrees.\n";


