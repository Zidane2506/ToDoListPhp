<?php


$list = $_POST['list'];
include "config.php";
mysqli_query($con, "INSERT INTO `table todo`(`List`) VALUES ('$list')");
header("location:index.php");
?>