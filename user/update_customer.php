<?php
session_start();
include("../connect.php");

if (!isset($_SESSION['customer_id'])) {
    header("location:../login.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['customer_id'];
    $updatedUsername = mysqli_real_escape_string($con, $_POST['username']);
    $updatedEmail = mysqli_real_escape_string($con, $_POST['email']);
    $updatedAddress = mysqli_real_escape_string($con, $_POST['address']);
    $updatedPhone = mysqli_real_escape_string($con, $_POST['phone']);

    $update_query = "UPDATE customer SET Customer_Name='$updatedUsername', Email='$updatedEmail', Address='$updatedAddress', Phone_Number='$updatedPhone' WHERE Customer_Id='$user_id'";
    $result = mysqli_query($con, $update_query);

    if ($result) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    header("location:../login.php");
}
?>