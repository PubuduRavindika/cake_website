<?php
session_start();
include("../connect.php");

if (!isset($_SESSION['customer_id'])) {
    header("location:../login.php");
}

$customer_id = $_SESSION['customer_id'];
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
                        <li><a href="../gallery.php">Gallery</a></li>
                        <li><a href="../dashboard.php">Dashboard</a></li>
                        <li><a href="../review.php">Reviews</a></li>
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
            <a href="custom_orders.php" class="icon-a"> <i class="fa fa-shopping-bag icons"></i>&nbsp;&nbsp; My Custom Orders </a>
            <a href="change_password.php" class="icon-a"> <i class="fa fa-users icons"></i>&nbsp;&nbsp; Change Password </a>
            <a href="../logout.php"icon-a> <i class="fa fa-tasks icons"></i>&nbsp;&nbsp; Log Out </a>
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
                            <th> Image </th>
                            <th> Wish </th>
                            <th> Price(Rs.) </th>
                            <th> Status </th>
                        </tr>
                    </thead>

                    <tbody>
            </div>
        </div>
        <?php
        $quary = "SELECT * FROM custom_orders where Customer_Id = '$customer_id' ORDER BY Custom_Order_Id DESC ";
        $run_quary = mysqli_query($con, $quary);

        while ($order_row = mysqli_fetch_assoc($run_quary)) {
            $order_id = $order_row['Custom_Order_Id'];
            $customer_id = $order_row['Customer_Id'];
            $order_date = $order_row['Order_Date'];
            $order_del_date = $order_row['Delivery_Date'];
            $order_del_time = $order_row['Delivery_Time'];
            $order_category = $order_row['Category'];
            $order_flavor = $order_row['Flavor'];
            $order_weight = $order_row['Weight'];
            $order_image = $order_row['Image'];
            $order_wish = $order_row['Wish'];
            $order_price = $order_row['price'];
            $order_status = $order_row['status'];

            echo "<tr>
            <td>$order_id</td>
            <td>$order_date</td>
            <td>$order_del_date</td>
            <td>$order_del_time </td>
            <td>$order_category</td>
            <td>$order_flavor</td>
            <td>$order_weight</td>
            <td><img src='../image/$order_image' width='50px' height='50px'></td>
            <td>$order_wish</td>
            <td>$order_price</td>
            <td>$order_status</td>
            </tr>";
        }

        ?>



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