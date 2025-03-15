<?php


define("Username", "admin");
 define("Password", "12345");

echo"Enter the Username:";
$interusername = readline();
echo"Enter the password:";
$interpassword = readline();

if ( $interusername === "Username" && $interpassword === "Password" ) {
    echo "Successfull login";}
    else{

        echo"Not successfull";
    }
?>