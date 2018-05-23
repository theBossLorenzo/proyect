<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword);
mysqli_select_db($conn,$dbName);

if (!$conn) {
    die('No se pudo conectar ' . mysqli_error());
}


