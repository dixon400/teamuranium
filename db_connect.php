<?php
$dbServername="localhost";
$dbUsername = "root";
$dbPassword=" ";
$dbName="uranium_db";
$connection = mysqli_connect('localhost', 'root', '' , 'uranium_db');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'uranium_db');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>