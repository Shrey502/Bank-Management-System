<?php
include './../../../database/connection.php';

$id = $_POST['id'];

$sql = "DELETE FROM `subject` WHERE ID = {$id}";
$result = mysqli_query($conn, $sql) or die(`Delete query error`);

if ($result) {
    header("LOCATION: ./index.php");
}else{
    echo `Something went wrong!`;
}

?>