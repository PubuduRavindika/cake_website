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
                <span style="font-size: 30px; cursor: pointer; color: rgb(161, 67, 67);" class="nav">Customers</span>
                <p style="color: rgb(161, 67, 67);">Main Admin</p>
            </div>

            <div class="sub-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th> Customer Id </th>
                            <th> Customer Name </th>
                            <th> Address</th>
                            <th> Email</th>
                            <th> Phone Number </th>
                            <th> Registration Date </th>
                        </tr>
                    </thead>

                    <tbody>
            </div>
        </div>

        <?php
        $quary = "SELECT * FROM customer ORDER BY Customer_Id DESC";
        $run_quary = mysqli_query($con, $quary);

        while ($order_row = mysqli_fetch_assoc($run_quary)) {
            $customer_id = $order_row['Customer_Id'];
            $customer_name = $order_row['Customer_Name'];
            $address = $order_row['Address'];
            $email = $order_row['Email'];
            $phone_number = $order_row['Phone_Number'];
            $registration_date = $order_row['Registration_Date'];

            echo "<tr>
            <td>$customer_id</td>
            <td>$customer_name</td>
            <td>$address</td>
            <td>$email </td>
            <td>$phone_number</td>
            <td>$registration_date</td>
            </tr>";
        }

        ?>

</body>

</html>