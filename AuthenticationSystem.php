<?php
define("USERNAME", "admin");
define("PASSWORD", "12345");

echo "Enter username: ";
$inputUsername = readline();

echo "Enter password: ";
$inputPassword = readline();

if ($inputUsername === USERNAME && $inputPassword === PASSWORD) {
echo "Login successful!\n";
}

else {
echo "Invalid username or password.\n";
}