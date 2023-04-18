<?php

$servername = "ecommerce.ccqvdwpue8ea.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "passwrong";
$database = "ecommerce_db";
$con = mysqli_connect($servername ,$username ,$password ,$database);

if(!$con){
    die("Error deleting record:".mysqli_error($con));
} else {
    // echo "Connection Successful";
}
?>