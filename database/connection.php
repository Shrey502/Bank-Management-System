<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "maha-bank-management";


$conn = mysqli_connect($hostname, $username, $password, $database) or die(`Connection Error:` . mysqli_connect_error());

?>