<?php
session_start();
include("../connect.php");
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
            <a href="dashboard_p.php" class="icon-a"> <i class="fa fa-tasks icons"></i>&nbsp;&nbsp; Inventory </a>
            <a href="dashboard_p.php" class="icon-a"> <i class="fa fa-credit-card icons"></i>&nbsp;&nbsp; Payments </a>
            <a href="dashboard_p.php" class="icon-a"> <i class="fa fa-user icons"></i>&nbsp;&nbsp; Category </a>
            <a href="dashboard_p.php" class="icon-a"> <i class="fa fa-user icons"></i>&nbsp;&nbsp; Accounts </a>
        </div>

        <div class="main">
            <div class="col-div-6">
                <span style="font-size: 30px; cursor: pointer; color: rgb(161, 67, 67);" class="nav">Custom Orders</span>
                <p style="color: rgb(161, 67, 67);">Main Admin</p>
            </div>

            <div class="sub-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th> Order_Id </th>
                            <th> Order_Date </th>
                            <th> Delivery_Date</th>
                            <th> Delivery_Time</th>
                            <th> Category </th>
                            <th> Flavor </th>
                            <th> Weight </th>
                            <th> Image </th>
                            <th> Wish </th>
                        </tr>
                    </thead>

                    <tbody>
            </div>
        </div>

        <?php
        $quary = "SELECT * FROM custom_orders ORDER BY Custom_Order_Id DESC";
        $run_quary = mysqli_query($con, $quary);

        while ($order_row = mysqli_fetch_assoc($run_quary)) {
            $order_id = $order_row['Custom_Order_Id'];
            $order_date = $order_row['Order_Date'];
            $order_del_date = $order_row['Delivery_Date'];
            $order_del_time = $order_row['Delivery_Time'];
            $order_category = $order_row['Category'];
            $order_flavor = $order_row['Flavor'];
            $order_weight = $order_row['Weight'];
            $order_image = $order_row['Image'];
            $order_wish = $order_row['Wish'];

            echo "<tr>
            <td>$order_id</td>
            <td>$order_date</td>
            <td>$order_del_date</td>
            <td>$order_del_time </td>
            <td>$order_category</td>
            <td>$order_flavor</td>
            <td>$order_weight</td>
            <td><img src='../../image/$order_image' width='50px' height='50px'></td>
            <td>$order_wish</td>
            </tr>";
        }

        ?>

</body>

</html>