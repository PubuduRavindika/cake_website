<?php
session_start();
include("../connect.php");
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
            <a href="dashboard_p.php" class="icon-a"> <i class="fa fa-tasks icons"></i>&nbsp;&nbsp; Inventory </a>
            <a href="view_accepted_orders.php" class="icon-a"> <i class="fa fa-credit-card icons"></i>&nbsp;&nbsp; Payments </a>
            <a href="dashboard_p.php" class="icon-a"> <i class="fa fa-user icons"></i>&nbsp;&nbsp; Category </a>
            <a href="feedback.php" class="icon-a"> <i class="fa fa-user icons"></i>&nbsp;&nbsp; Feedbacks </a>
        </div>

        <div class="main">
            <div class="col-div-6">
                <span style="font-size: 30px; cursor: pointer; color: rgb(161, 67, 67);" class="nav">Dashboard</span>
                <p style="color: rgb(161, 67, 67);">Main Admin</p>
            </div>

            <div class="sub-container">
                <div class="box">
                    <p>67<br><span>Customers</span></p>
                    <i class="fa fa-users box-icon"></i>
                </div>
                <div class="box">
                    <p>23<br><span>Orders</span></p>
                    <i class="fa fa-shopping-bag box-icon"></i>
                </div>
                <div class="box">
                    <p>Rs.2300<br><span>Sales</span></p>
                    <i class="fa fa-usd box-icon"></i>
                </div>
                <a href="../add_image_01.php" class="box-add">
                    <p><span>Add New Item</span></p>
                    <i class="fa fa-plus box-icon"></i>
                </a>
            </div>
        </div>

</body>

</html>