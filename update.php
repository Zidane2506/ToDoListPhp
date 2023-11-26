<?php
include "config.php";
$ID = $_POST['id'];
$list = $_POST['list'];

mysqli_query($con, "UPDATE `table todo` SET `List`='$list' WHERE `table todo`. `ID` = '$ID'");
header("location:index.php")

?>