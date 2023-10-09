<?php
include "connect.php";

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customerId = $_POST["customer_id"];
    $orderId = $_POST["order_id"];
    $paymentDate = $_POST["payment_date"];
    $amount = $_POST["amount"];

    // Insert data into the payment_cus table
    $sql = "INSERT INTO `payment_cus` (Customer_Id, Order_Id, Payment_Date, Amount) 
            VALUES ('$customerId', '$orderId', '$paymentDate', '$amount')";

    if ($con->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Close the database connection
$con->close();
?>
