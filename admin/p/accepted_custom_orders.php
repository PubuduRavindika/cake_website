<?php
// view_accepted_orders.php

// Include your database connection file
include("../connect.php");

// Fetch accepted orders from the database
$query = "SELECT * FROM custom_orders WHERE status = 'Accepted'";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="orders.css">
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
                <span style="font-size: 30px; cursor: pointer; color: rgb(161, 67, 67);" class="nav">Accepted Custom Orders</span>
                <a style="color: rgb(161, 67, 67); text-decoration: none;" href="logout.php">Logout</a>
            </div>

            <div class="sub-container">
                <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Payment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            
                <?php 
                
                
                while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?php echo $row['Custom_Order_Id']; ?></td>
                        <td><?php 
                        $price = $row['price'];
                        echo "Rs.$price.00"; 
                        ?></td>
                        <!-- Add more columns as needed -->
                        <td>
                            <a class="view-button" href="custom_order_bill.php?order_id=<?php echo $row['Custom_Order_Id']; ?>" target="_blank">View Bill</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>    
            </div>
        </div>

    

</body>

</html>