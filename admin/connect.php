<?php
$con = mysqli_connect("localhost", "admin", "123", "cakenewa");
// $con = mysqli_connect("localhost", "root", "", "cake");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
