<?php
include "connect.php";


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST["customer_name"];
    $review_date = $_POST["review_date"];
    $comments = $_POST["comments"];
    $ratings = $_POST["ratings"];

    // Insert data into the table
    $sql = "INSERT INTO `feedback` (Customer_Name, Review_Date , Comments , Ratings) 
            VALUES ('$customer_name', '$review_date', '$comments', '$ratings')";

    if ($con->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}


$con->close();
?>
