<?php 

$servername = "localhost";
$dbUsername = "root";
$dbPassword ="1234";
$dbName = "login_system_2";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}