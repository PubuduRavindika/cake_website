<?php
include "connect.php";

// Get form data
$customer_name = $_POST['customer_name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$regDate = $_POST['regDate'];
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and execute SQL query
$sql = "INSERT INTO `customer` (Customer_Name, Address, Email, Phone_Number, Registration_Date, Username, Password)
        VALUES ('$customer_name', '$address', '$email', '$phone_number', '$regDate', '$username', '$password')";

if (mysqli_query($con, $sql)) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}


// Close connection
mysqli_close($con);
?>
