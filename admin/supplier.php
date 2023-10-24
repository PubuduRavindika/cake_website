<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $supplier_name = $_POST['supplier_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    
    // SQL query to insert data into the database
    $sql = "INSERT INTO `supplier` (Supplier_Name, Phone_Number, Email, Address)
    VALUES ('$supplier_name', '$phone_number', '$email', '$address')";

    if ($con->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $con->error;
    }

    // Close the database connection
    $con->close();
}
?>
