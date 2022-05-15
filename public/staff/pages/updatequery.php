<?php

include './../../../database/connection.php';

$menu_name = $_POST['menu_name'];
$id = $_POST['id'];
$position = $_POST['position'] ;
$visible = $_POST['visible'] ;
var_dump($visible);

$update="UPDATE `pages` SET `ID`='{$id}',`Position`='{$position}',`Visible`='{$visible}',`Name`='{$menu_name}' WHERE ID='{$id}'";
$result = mysqli_query($conn, $update) or die(`Update query error`);
if ($result) {
header('Location: ./index.php');
}

?>