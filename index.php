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
    <link rel="stylesheet" href="navbar.css">
    <!--<link rel="stylesheet" href="review.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Home</title>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
          
        <label class="logo">Janith Cakes & Bakers</label>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <!-- <li><a href="order.html">Order a cake</a></li> -->
            <li><a href="user/dashboard.php">dashboard</a></li>
            <li><a href="review.html">Reviews</a></li>
            <li><a href="#">Contact us</a>
                <div class="dropdown_menu">
              
                    <ul>
                     <li><a href="#">Name: Sasanka Indeewari</a></li>
                     <li><a href="#">Gmail: sasankaindeewari@yahoo.com </a></li>
                     <li><a href="#">Phone Number: 0773462878 </a></li>
                    </ul>
                   
                  </div>
            
            </li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>

    <div class="center-content">
        <h1><u>Welcome to our Online Cake Ordering Wonderland!</u></h1>
        <hr>
        <p style="text-align: center;">
            <br>
            Explore a delectable array of artisanal cakes, thoughtfully crafted to sweeten your moments.
            <br> With just a few clicks, you can choose from an assortment of flavors, designs, and sizes, 
            creating a personalized masterpiece for your celebrations. 
            <br>Experience the convenience of online cake ordering like never before. 
            <br>Order, customize, and savor the magic, all from 
            the comfort of your home.
        </p>
    </div>
    
    

    <section>

    </section>
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>