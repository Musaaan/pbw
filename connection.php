<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "rplacool";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn){
    die("database error!");
}
?>