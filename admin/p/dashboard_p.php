<?php
session_start();
include("../connect.php");


$query = "SELECT COUNT(*) as customer_count FROM customer";
$result = mysqli_query($con, $query);

// Check if the query was successful
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $customerCount = $row['customer_count'];
} else {
    // Handle the error if the query fails
    $customerCount = "Error fetching customer count";
}

$queryCustomOrders = "SELECT COUNT(*) as custom_orders_count FROM custom_orders WHERE status = 'Accepted'";
$resultCustomOrders = mysqli_query($con, $queryCustomOrders);

if ($resultCustomOrders) {
    $row = mysqli_fetch_assoc($resultCustomOrders);
    $customOrderCount = $row['custom_orders_count'];
} else {
    // Handle the error if the query fails
    $customOrderCount = "Error fetching customer count";
}

$queryOrderNew = "SELECT COUNT(*) as order_new_count FROM order_new WHERE status = 'Accepted'";
$resultOrderNew = mysqli_query($con, $queryOrderNew);


if ($resultOrderNew) {
    $row = mysqli_fetch_assoc($resultOrderNew);
    $OrderCount = $row['order_new_count'];
} else {
    // Handle the error if the query fails
    $OrderCount = "Error fetching customer count";
}

$total_orders = $OrderCount + $customOrderCount;





$order_query = "SELECT * FROM order_new WHERE status = 'Accepted'";
    $order_result = mysqli_query($con, $order_query);

    // Fetch data from custom_orders table with LIMIT
    $custom_query = "SELECT * FROM custom_orders WHERE status = 'Accepted'";
    $custom_result = mysqli_query($con, $custom_query);

    while ($order_row = mysqli_fetch_assoc($order_result)) {

        $totalOrderPrice += $order_row['price'];
    }

    while ($custom_order_row = mysqli_fetch_assoc($custom_result)) {

        $totalCustomOrderPrice += $custom_order_row['price'];
    }

    $total_price = $totalOrderPrice + $totalCustomOrderPrice;




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard_p.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div id="sidenav" class="sidenav">
            <p class="logo"> Janith Cakes & Bakers</p>
            <a href="dashboard_p.php" class="icon-a"> <i class="fa fa-dashboard icons"></i>&nbsp;&nbsp; Dashboard </a>
            <a href="orders.php" class="icon-a"> <i class="fa fa-shopping-bag icons"></i>&nbsp;&nbsp; Orders </a>
            <a href="custom_orders.php" class="icon-a"> <i class="fa fa-shopping-bag icons"></i>&nbsp;&nbsp; Custom Orders </a>
            <a href="customers.php" class="icon-a"> <i class="fa fa-users icons"></i>&nbsp;&nbsp; Customers </a>
            <a href="products.php" class="icon-a"> <i class="fa fa-tasks icons"></i>&nbsp;&nbsp; Products </a>
            <a href="view_accepted_orders.php" class="icon-a"> <i class="fa fa-credit-card icons"></i>&nbsp;&nbsp; Payments </a>
            <a href="feedback.php" class="icon-a"> <i class="fa fa-user icons"></i>&nbsp;&nbsp; Feedbacks </a>
        </div>

        <div class="main">
            <div class="col-div-6">
                <span style="font-size: 30px; cursor: pointer; color: rgb(161, 67, 67);" class="nav">Dashboard</span>
                <a style="color: rgb(161, 67, 67); text-decoration: none;" href="logout.php">Logout</a>
            </div>

            <div class="sub-container">
                <div class="box">
                    <p><?php echo $customerCount;?><br><span>Customers</span></p>
                    <i class="fa fa-users box-icon"></i>
                </div>
                <div class="box">
                    <p><?php echo $total_orders;?><br><span>Orders</span></p>
                    <i class="fa fa-shopping-bag box-icon"></i>
                </div>
                <a href="view_report.php" class="box-add">
                    <p><?php echo "Rs.$total_price.00";?><br><span>Sales</span></p>
                    <i class="fa fa-usd box-icon"></i>
                </a>
                <a href="../add_image_01.php" class="box-add">
                    <p><span>Add New Item</span></p>
                    <i class="fa fa-plus box-icon"></i>
                </a>
            </div>
        </div>

</body>

</html>