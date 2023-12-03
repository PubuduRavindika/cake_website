<?php
include("../connect.php");

// Check if the order_id and price are set in the GET request
if (isset($_GET['order_id']) && isset($_GET['price'])) {
    $order_id = $_GET['order_id'];
    $new_price = $_GET['price'];

    // Perform the updates in the database
    $update_query = "UPDATE custom_orders SET status = 'Accepted', price = '$new_price' WHERE Custom_Order_Id = $order_id";
    $result = mysqli_query($con, $update_query);

    if ($result) {
        // Return the updated status and price for display
        echo json_encode(['status' => 'Accepted', 'price' => $new_price]);
    } else {
        // Return an error message if the update fails
        echo json_encode(['status' => 'Error updating status']);
    }
} else {
    // Return an error message if order_id or price is not set in the GET request
    echo json_encode(['status' => 'Invalid request']);
}

// Close the database connection
mysqli_close($con);
?>