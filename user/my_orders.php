<?php
session_start();
include("../connect.php");

if (!isset($_SESSION['customer_id'])) {
    header("location:../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <div class="dash-container">
            <div class="navbar">
                <div class="dash-logo">
                    <a href="../index.php"><label class="dash-logo">Janith Cakes & Bakers</label></a>
                </div>
                <nav>
                    <ul id="menuItems">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../menu.php">Menu</a></li>
                        <li><a href="../gallery.html">Gallery</a></li>
                        <li><a href="../dashboard.php">Dashboard</a></li>
                        <li><a href="../review.html">Reviews</a></li>
                        <li><a href="../index.php">Contact us</a></li>
                        <li><a href="../logout.php">Log Out</a></li>
                    </ul>
                </nav>
                <img src="../backgrounds/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
    </div>

    <div class="container">
        <div id="sidenav" class="sidenav">
            <p class="logo"> Dashboard</p>
            <a href="dashboard.php" class="icon-a"> <i class="fa fa-dashboard icons"></i>&nbsp;&nbsp; Dashboard </a>
            <a href="my_orders.php" class="icon-a"> <i class="fa fa-shopping-bag icons"></i>&nbsp;&nbsp; My Orders </a>
            <a href="dashboard.php" class="icon-a"> <i class="fa fa-shopping-bag icons"></i>&nbsp;&nbsp; My Custom Orders </a>
            <a href="dashboard.php" class="icon-a"> <i class="fa fa-users icons"></i>&nbsp;&nbsp; Change Password </a>
            <a href="../logout.php"icon-a"> <i class="fa fa-tasks icons"></i>&nbsp;&nbsp; Log Out </a>
        </div>

        <div class="main">
            <div class="col-div-6">
                <span style="font-size: 30px; cursor: pointer; color: rgb(161, 67, 67);" class="nav">Orders</span>
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
                            <th> Product Id </th>
                            <th> Image </th>
                            <th> Wish </th>
                        </tr>
                    </thead>

                    <tbody>
            </div>
        </div>



        <!-- ------js for toggle menu------ -->

        <script>
            var menuItems = document.getElementById("menuItems");

            menuItems.style.maxHeight = "0px";

            function menutoggle() {
                if (menuItems.style.maxHeight == "0px") {
                    menuItems.style.maxHeight = "200px";
                } else {
                    menuItems.style.maxHeight = "0px";
                }
            }
        </script>

</body>

</html>