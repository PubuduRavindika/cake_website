<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gallery.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><label class="logo">Janith Cakes & Bakers</label></a>
                </div>
                <nav>
                    <ul id="menuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="user/dashboard.php">Dashboard</a></li>
                        <li><a href="review.php">Reviews</a></li>
                        <li><a href="index.php">Contact us</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </nav>
                <img src="backgrounds/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
    </div>
    <div class="sub-container">
        <?php
            $quary = "SELECT * FROM custom_orders ORDER BY Custom_Order_Id DESC ";
            $run_quary = mysqli_query($con, $quary);
    
            while ($order_row = mysqli_fetch_assoc($run_quary)) {
                $order_id = $order_row['Custom_Order_Id'];
                $order_image = $order_row['Image'];

                echo"
                <img src='image/$order_image'>
                ";
            }
        ?>
        
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