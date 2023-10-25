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
      <li><a class="active" href="index.html">Home</a></li>
      <li><a href="menu.html">Menu</a></li>
      <li><a href="gallery.html">Gallery</a></li>
      <li><a href="order.html">Order a cake</a></li>
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
    <form class="form" method="POST" action="order.php" enctype="multipart/form-data">
      <div class="row">

        <div class="input-box">
          <label>Order Date</label>
          <input type="date" name="order_date" required />
        </div>

        <div class="input-box">
          <label>Delivery Date</label>
          <input type="date" name="delivery_date" required />
        </div>

        <!-- <div class="input-box">
          <label>Delivery Time</label>
          <input type="time" name="delivery_time" required />
        </div> -->

      </div>

      <div class="row">
        <div class="input-box">
          <label>Customer Name</label>
          <input type="text" name="customer_name" required />
        </div>
      </div>

      <div class="row">
        <div class="input-box">
          <label>Address</label>
          <input type="text" name="address" required />
        </div>
      </div>

      <div class="row">
        <div class="input-box">
          <label>Phone Number</label>
          <input type="text" name="phone_number" required />
        </div>
      </div>




      <div class="column">

        <div class="select-box">
          <select name="category" required>
            <option hidden> Category </option>
            <!-- <option>Birthday</option>
            <option>Wedding</option>
            <option>Anniversary</option>
            <option>Engagement</option>
            <option>Christmas</option>

            <option>Other</option> -->

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
          <!-- <select name="weight" required>
            <option hidden> Weight </option>
            <option>0.5kg</option>
            <option>1kg</option>
            <option>2kg</option>
            <option>3kg</option>


          </select> -->
          <input type="number" min="0" placeholder="Weight (Kg)">
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


      <!-- <div class="input-box">
        <label>Image</label>
        <input type="file" name="image" accept="image/*" id="imageInput" />
        <label for="imageInput" class="file-label"></label>
      </div> -->


      <div class="input-box">
        <label>Wish</label>
        <input type="text" name="wish" />
      </div>



      <button type="submit"> Submit </button>

    </form>

</body>

<?php

$get_pro = "select * from add_item";

$run_pro = mysqli_query($con, $get_pro);
while ($row_pro = mysqli_fetch_array($run_pro)) {
  $pro_id = $row_pro['Product_Id'];
  $pro_img = $row_pro['Image'];
  $pro_cat = $row_pro['product_cat'];

}



if (isset($_POST['order.php'])) {
  $order_date = $_POST['order_date'];
  $delivery_date = $_POST['delivery_date'];
  $customer_name = $_POST['customer_name'];
  $address = $_POST['address'];
  $phone_number = $_POST['phone_number'];

  //getting the image from the field

  $product_img_01 = $_FILES['product_img_01']['name'];
  $product_img_01_tmp = $_FILES['product_img_01']['tmp_name'];

  move_uploaded_file($product_img_01_tmp, "product_imgs/$product_img_01");

  $product_img_02 = $_FILES['product_img_02']['name'];
  $product_img_02_tmp = $_FILES['product_img_02']['tmp_name'];

  move_uploaded_file($product_img_02_tmp, "product_imgs/$product_img_02");

  $product_img_03 = $_FILES['product_img_03']['name'];
  $product_img_03_tmp = $_FILES['product_img_03']['tmp_name'];

  move_uploaded_file($product_img_03_tmp, "product_imgs/$product_img_03");

  $product_img_04 = $_FILES['product_img_04']['name'];
  $product_img_04_tmp = $_FILES['product_img_04']['tmp_name'];

  move_uploaded_file($product_img_04_tmp, "product_imgs/$product_img_04");

  $product_img_05 = $_FILES['product_img_05']['name'];
  $product_img_05_tmp = $_FILES['product_img_05']['tmp_name'];

  move_uploaded_file($product_img_05_tmp, "product_imgs/$product_img_05");

  $insert_product = "insert into products (product_cat,product_brand,product_title,product_price,product_desc,product_keywords,product_img_01,product_img_02,product_img_03,product_img_04,product_img_05) values('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_keywords','$product_img_01','$product_img_02','$product_img_03','$product_img_04','$product_img_05')";

  $insert_pro = mysqli_query($con, $insert_product);

  if ($insert_pro) {
    echo "<script>alert('Product has been insert successfully')</script>";
  }
}
?>

</html>