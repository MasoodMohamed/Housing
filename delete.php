<?php
require 'header.php';
require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM `house` WHERE id = '$id'";
    if(mysqli_query($connection, $sql)){
        header('location:details.php');
    }
}
?>
