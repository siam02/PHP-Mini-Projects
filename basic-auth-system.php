<?php

$username = 'admin';
$password = '1234';

$inputUsername = 'admin';
$inputPassword = '1234';

if ($username == $inputUsername && $password == $inputPassword) {
    echo "Login successful.\n";
} else {
    echo "Invalid username or password.\n";
}