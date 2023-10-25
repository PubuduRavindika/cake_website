<?php
// Include the database connection file
include "connect.php";
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data using $_POST
    $customer_name = isset($_POST["customer_name"]) ? $_POST["customer_name"] : '';
    $address = isset($_POST["address"]) ? $_POST["address"] : '';
    $phone_number = isset($_POST["phone_number"]) ? $_POST["phone_number"] : '';
    $order_date = isset($_POST["order_date"]) ? $_POST["order_date"] : '';
    $delivery_date = isset($_POST["delivery_date"]) ? $_POST["delivery_date"] : '';
    $delivery_time = isset($_POST["delivery_time"]) ? $_POST["delivery_time"] : '';
    $category = isset($_POST["category"]) ? $_POST["category"] : '';
    $flavor = isset($_POST["flavor"]) ? $_POST["flavor"] : '';
    $weight = isset($_POST["weight"]) ? $_POST["weight"] : '';
    $shape = isset($_POST["shape"]) ? $_POST["shape"] : '';
    $product_id = isset($_POST["product_id"]) ? $_POST["product_id"] : '';
    $wish = isset($_POST["wish"]) ? $_POST["wish"] : '';

    // Process the uploaded image if provided
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        $image = $_FILES["image"];
        $imageFileName = $image["name"];
        $imageTmpName = $image["tmp_name"];
        $imageUploadPath = "image/" . $imageFileName;
        move_uploaded_file($imageTmpName, $imageUploadPath);
    } else {
        // No image was uploaded, set the imageFileName to an empty string
        $imageFileName = '';
    }

    // Save the order details to the database
    $query = "INSERT INTO `order` (Customer_Name, Address, Phone_Number, Order_Date, Delivery_Date, Delivery_Time, Category, Flavor, Weight, Shape, Product_Id, Image, Wish) 
              VALUES ('$customer_name', '$address', '$phone_number','$order_date', '$delivery_date', '$delivery_time', '$category', '$flavor', '$weight', '$shape', '$product_id','$imageFileName', '$wish')";

    // Execute the query and check for errors
    if (mysqli_query($con, $query)) {
        // Display a thank you message
        echo "<h2>Thank you for your order!</h2>";
        echo "<p>We have received your cake order and will deliver it on $delivery_date at $delivery_time.</p>";
    } else {
        // Display an error message if the order couldn't be saved
        echo "Error: " . mysqli_error($con);
    }
} else {
    echo "Form not submitted.";
}

// Close the database connection
mysqli_close($con);
?>
