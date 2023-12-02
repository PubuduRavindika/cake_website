<?php
include("../connect.php");

// Check if the order_id is set in the GET request
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];

    // Perform the update in the database
    $update_query = "UPDATE order_new SET status = 'Accepted' WHERE Order_Id = $order_id";
    $result = mysqli_query($con, $update_query);

    if ($result) {
        // Return the updated status for display
        echo json_encode(['status' => 'Accepted']);
    } else {
        // Return an error message if the update fails
        echo json_encode(['status' => 'Error updating status']);
    }
} else {
    // Return an error message if order_id is not set in the GET request
    echo json_encode(['status' => 'Invalid request']);
}

// Close the database connection
mysqli_close($con);
?>
