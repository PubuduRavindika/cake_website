<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
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
                        <li><a href="contact.php">Contact us</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </nav>
                <img src="backgrounds/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
    </div>

    <div class="center-content">
        <h1>Welcome to our Online Cake Ordering Wonderland!</h1>

        <div class="line"></div>

        <p class="content">
            <br>
            Explore a delectable array of artisanal cakes, thoughtfully crafted to sweeten your moments.
            <br><br> With just a few clicks, you can choose from an assortment of flavors, designs, and sizes, 
            creating a personalized masterpiece for your celebrations. 
            <br><br>Experience the convenience of online cake ordering like never before. 
            <br<br>Order, customize, and savor the magic, all from 
            the comfort of your home.
        </p>
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