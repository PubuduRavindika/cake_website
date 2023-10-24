<?php
include "connect.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = $_POST["order_id"];
    $category = $_POST["category"];
    $weight = $_POST["weight"];
    $price = $_POST["price"];

    
    $query = "INSERT INTO `sales` (Order_Id, Category, Weight, Price) 
              VALUES ('$order_id', '$category','$weight','$category')";


    if (mysqli_query($con, $query)) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($con);
    }

mysqli_close($con);
}
?>