<?php
include "connect.php";

// Get form data
$customer_name = $_POST['customer_name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$regDate = $_POST['regDate'];
$password = $_POST['password'];
// $role_as = $_POST['role_as'];

// Prepare and execute SQL query
$sql = "INSERT INTO `customer` (Customer_Name, Address, Email, Phone_Number, Registration_Date, Password)
        VALUES ('$customer_name', '$address', '$email', '$phone_number', '$regDate', '$password')";

if (mysqli_query($con, $sql)) {
    echo "<script>alert('Logged in successfully!')</script>";
    echo "<script>window.open('menu.php','_self')</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}


// Close connection
mysqli_close($con);
?>
