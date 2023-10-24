<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $supplier_id = $_POST["supplier_id"];
    $payment_date = $_POST["payment_date"];
    $amount = $_POST["amount"];

    // Perform any necessary data validation before inserting into the database
    
    $query = "INSERT INTO `payment_sup` (Supplier_Id, Payment_Date, Amount) VALUES ('$supplier_id', '$payment_date', '$amount')";

    if (mysqli_query($con, $query)) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}
?>
