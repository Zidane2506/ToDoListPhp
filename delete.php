<?php

include "config.php";
$id = $_GET['ID'];
mysqli_query($con, "DELETE FROM `table todo` WHERE `ID` = '$id'");

header("location:index.php");

?>