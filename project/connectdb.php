<?php
$mysqli = mysqli_connect("localhost","crh0043","crh0043","crh0043");

if(mysqli_connect_errno()) {
    printf("Database connection has failed:%s\n",mysqli_connect_error());
    exit();
} else {
    printf("");
}
?>
