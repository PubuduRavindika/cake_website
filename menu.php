<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <div class="menu-container">
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
                        <li><a href="contact.php">Contact us</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </nav>
                <img src="backgrounds/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
    </div>

    <div class="sub-container">
        <div class="left-container"></div>
        <div class="right-container">
            <form action="#" class="form">
                <div class="column">
                    <a href="birthday.php"><button type="button">Birthday</button></a>
                    <a href="wedding.php"><button type="button">Wedding </button></a>
                    <a href="engagement.php"><button type="button">Engagement</button></a>
                    <a href="anniversary.php"><button type="button">Anniversary</button></a>
                    <a href="christmas.php"><button type="button">Christmas</button></a>
                </div>

            </form>

            <div class="line"></div>

            <form action="#" class="form">
                <div class="custom_column">
                    <a href="custom_order.php"><button type="button">Custom Order</button></a>
                </div>
            </form>
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