<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $supplierId = $_POST['supplier_id'];
    $materialName = $_POST['material_name'];
    $stockQuantity = $_POST['stock_quantity'];

    
    // SQL query to insert data into the database
    $sql = "INSERT INTO `purchased_inventory` (Supplier_Id, Material_Name, Stock_Quantity)
    VALUES ('$supplierId', '$materialName', '$stockQuantity')";

    if ($con->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $con->error;
    }

    // Close the database connection
    $con->close();
}
?>
