<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $materialId = $_POST['material_id'];
    $materialName = $_POST['material_name'];
    $reducedQuantity = $_POST['reduced_quantity'];

    
    // SQL query to insert data into the database
    $sql = "INSERT INTO `used_inventory` (Material_Id, Material_Name, Reduced_Quantity)
    VALUES ('$materialId', '$materialName', '$reducedQuantity')";

    if ($con->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $con->error;
    }

    // Close the database connection
    $con->close();
}
?>
