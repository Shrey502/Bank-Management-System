<?php
    include './../../../database/connection.php';

    $menu_name = $_POST['menu_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';

    $sql = "INSERT INTO `pages`(`ID`, `Position`, `Visible`, `Name`) VALUES (null,'{$position}','{$visible}','{$menu_name}')";

    $query = mysqli_query($conn , $sql) || die(`Mysqli Query error`);

    if ($query) {
        header("Location: ./index.php");
    }
?>
