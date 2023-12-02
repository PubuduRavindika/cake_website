<?php
session_start();
include("connect.php");

if (!isset($_SESSION['customer_id'])) {
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <title> Order a Cake </title>
  <link rel="stylesheet" href="order.css">
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
      <li><a href="gallery.php">Gallery</a></li>
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

  <section class="container">
    <header>Order a Cake</header>
    <form method="POST" class="form" action="submit_order.php" enctype="multipart/form-data">


      <div class="row">
        <div class="input-box">
          <label>Order Date</label>
          <input type="date" id="current_date" name="current_date" required />
        </div>

        <div class="input-box">
          <label>Delivery Date</label>
          <input type="Date" name="delivery_date" required />
        </div>

        <div class="input-box">
          <label>Delivery Time</label>
          <input type="time" name="delivery_time" required />
        </div>
      </div>


      <div>

        <div class="input-box">
          <label>Customer Name </label>
          <input type="text" name="customer_name" required />
        </div>

        <div class="input-box">
          <label> Address </label>
          <input type="text" name="address" required />
        </div>


        <div class="input-box">
          <label> Phone Number </label>
          <input type="text" name="phone_number" required />
        </div>



      </div>




      <div class="column">

        <div class="select-box">
          <select name="category" required>
            <option hidden> Category </option>
            <option>Birthday</option>
            <option>Wedding</option>
            <option>Anniversary</option>
            <option>Engagement</option>
            <option>Christmas</option>

            <option>Other</option>

          </select>
        </div>

        <div class="select-box">
          <select name="flavor" required>
            <option hidden> Flavor </option>
            <option>Butter</option>
            <option>Chocalate</option>
            <option>Eggless</option>
            <option>Fruit</option>



          </select>
        </div>

        <div class="select-box">
          <select name="weight" required>
            <option hidden> Weight </option>
            <option>0.5kg</option>
            <option>1kg</option>
            <option>2kg</option>
            <option>3kg</option>


          </select>
        </div>

        <div class="select-box">
          <select name="shape" required>
            <option hidden> Shape </option>
            <option>Circle</option>
            <option>Heart</option>
            <option>Square</option>



          </select>
        </div>

      </div>

      <div class="input-box">
        <label> Product Id </label>
        <input type="number" name="product_id">
      </div>


      <div class="input-box">
        <label>Wish</label>
        <input type="text" name="wish" />
      </div>



      <button type="submit"> Submit </button>

    </form>

</body>

</html>