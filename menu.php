<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html>

<head>
  <title> Menu </title>
  <link rel="stylesheet" type="text/css" href="menu.css">
  <link rel="stylesheet" href="navbar.css">

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
            <li><a href="dashboard.php">dashboard</a></li>
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


  <section class="container">
    <form action="#" class="form">

      <div class="column">
        <a href="birthday.php"><button type="button">Birthday</button></a>
        <a href="wedding.php"><button type="button">Wedding </button></a>
        <a href="engagement.php"><button type="button">Engagement</button></a>
      </div>


      <div class="column">
        <a href="anniversary.php"><button type="button">Anniversary</button></a>
        <a href="christmas.php"><button type="button">Christmas</button></a>

      </div>


      <div class="clear"></div>
    </form>
  </section>
</body>

</html>