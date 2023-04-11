<?php
    include 'connection.php';
    $id = $_GET['id'];
    $q = " DELETE FROM `complaincentre` WHERE id = $id ";
    $query=mysqli_query ($con, $q);
    header('location:display.php');
?>