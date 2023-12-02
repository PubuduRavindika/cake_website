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
    <form class="form" method="POST" action="order.php?pro_id=<?php echo $_GET['pro_id'] ?>" enctype="multipart/form-data">
      <div class="row">

        <div class="input-box">
          <label>Order Date</label>
          <input type="text" id="current_date" name="current_date" required />
        </div>

        <div class="input-box">
          <label>Delivery Date</label>
          <input type="date" id="delivery_date" name="delivery_date" required />
        </div>

        <div class="input-box">
          <label>Delivery Time</label>
          <input type="time" id="delivery_time" name="delivery_time" required />
        </div>

      </div>

      <div class="row">
        <div class="input-box">
          <?php
          if (isset($_SESSION['customer_id'])) {
            $customer_id = $_SESSION['customer_id'];

            $run_query_by_id = mysqli_query($con, "select * from customer where Customer_Id = '$customer_id'");
            while ($row_cat = mysqli_fetch_array($run_query_by_id)) {
              $customer_name = $row_cat['Customer_Name'];
            }
            echo "
              <label>Customer Name</label>
              <div class = 'customer'>$customer_name</div>
              ";
          }
          ?>
        </div>
      </div>

      <div class="row">
        <div class="input-box">

          <?php
          if (isset($_SESSION['customer_id'])) {
            $customer_id = $_SESSION['customer_id'];

            $run_query_by_id = mysqli_query($con, "select * from customer where Customer_Id = '$customer_id'");
            while ($row_cat = mysqli_fetch_array($run_query_by_id)) {
              $customer_address = $row_cat['Address'];
            }
            echo "
              <label>Customer Address</label>
              <div class = 'customer'>$customer_address</div>
              ";
          }
          ?>
        </div>
      </div>

      <div class="row">
        <div class="input-box">
          <?php
          if (isset($_SESSION['customer_id'])) {
            $customer_id = $_SESSION['customer_id'];

            $run_query_by_id = mysqli_query($con, "select * from customer where Customer_Id = '$customer_id'");
            while ($row_cat = mysqli_fetch_array($run_query_by_id)) {
              $customer_number = $row_cat['Phone_Number'];
            }
            echo "
              <label>Phone Number</label>
              <div class = 'customer'>$customer_number</div>
              ";
          }
          ?>
        </div>
      </div>

      <div class="input-box">
        <?php
        if (isset($_GET['pro_id'])) {
          $product_id = $_GET['pro_id'];

          $run_query_by_pro_id = mysqli_query($con, "select * from add_item where Product_Id = '$product_id'");

          while ($row_pro = mysqli_fetch_array($run_query_by_pro_id)) {

            $pro_id = $row_pro['Product_Id'];
            $pro_img = $row_pro['Image'];
            $pro_cat = $row_pro['product_cat'];
            $pro_price = $row_pro['Price'];

            echo "
              <label> Product Id </label>
              <div class = 'pro_id'>$pro_id</div>
              ";
          }
        }
        ?>
      </div>





      <div class="column">

        <div class="select-box">
          <?php

          $pro_id;
          $pro_img;
          $pro_cat;
          $cat_id;
          $cat_title;

          if (isset($_GET['pro_id'])) {
            $product_id = $_GET['pro_id'];

            $run_query_by_pro_id = mysqli_query($con, "select * from add_item where Product_Id = '$product_id'");

            while ($row_pro = mysqli_fetch_array($run_query_by_pro_id)) {

              $pro_id = $row_pro['Product_Id'];
              $pro_img = $row_pro['Image'];
              $pro_cat = $row_pro['product_cat'];

              $run_query_by_pro_cat = mysqli_query($con, "select * from categories where cat_id = '$pro_cat'");
              while ($row_cat = mysqli_fetch_array($run_query_by_pro_cat)) {
                $cat_id = $row_cat['cat_id'];
                $cat_title = $row_cat['cat_title'];
              }
              echo "
              <div class = 'pro_cat'>$cat_title</div>
              ";
            }
          }
          ?>
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
          <input type="number" name="weight" id="weight" min="1" step="0.1" placeholder="Weight (Kg)" oninput="updatePrice()" required>
        </div>

      </div>

      <div class="input-box">
        <label>Wish</label>
        <input type="text" name="wish" />
      </div>

      <div class="input-box">
        <label>Total Price</label>
        <div id="totalPrice">Rs.<?php echo $pro_price; ?>.00/-</div>
      </div>



      <button type="submit"> Submit </button>

    </form>

    <script>
      // Get the current date in the format "YYYY-MM-DD"
      const today = new Date();
      today.setDate(today.getDate() + 2);
      const year = today.getFullYear();
      const month = String(today.getMonth() + 1).padStart(2, '0'); // Month is zero-based
      const day = String(today.getDate()).padStart(2, '0');

      // Set the current date as the minimum date for the input field
      const minDate = `${year}-${month}-${day}`;
      document.getElementById('delivery_date').min = minDate;
    </script>

    <script>
      // Get the current date
      const currentDate = new Date();
      const dateString = currentDate.toISOString().split('T')[0]; // Format as "YYYY-MM-DD"

      // Display the current date in the input field
      document.getElementById('current_date').value = dateString;
    </script>

    <script>
      function updatePrice() {
        const weight = document.getElementById('weight').value;
        const pricePerKg = <?php echo $pro_price; ?>;
        const totalPrice = weight * pricePerKg;
        document.getElementById('totalPrice').innerText = `Rs.${totalPrice.toFixed(2)}/-`;
      }
    </script>


</body>

<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $order_date = $_POST['current_date'];
  $delivery_date = $_POST['delivery_date'];
  $delivery_time = $_POST['delivery_time'];
  $flavor = $_POST['flavor'];
  $weight = $_POST['weight'];
  $wish = $_POST['wish'];



  // $insert_product = "INSERT INTO `order_new`(`Order_Id`, `Customer_Id`, `Address`, `Phone_Number`, `Order_Date`, `Delivery_Date`, `Delivery_Time`, `Category`, `Flavor`, `Weight`, `Product_Id`, `Image`, `price`, `Wish`) VALUES ('','$customer_id','$customer_address','$customer_number','$order_date','$delivery_date','$delivery_time','$cat_title','$flavor','$weight','$pro_id','$pro_img','$pro_price','$wish')";

  $pro_price_per_kg = 0;

  if (isset($_GET['pro_id'])) {
    $product_id = $_GET['pro_id'];

    $run_query_by_pro_id = mysqli_query($con, "select * from add_item where Product_Id = '$product_id'");

    while ($row_pro = mysqli_fetch_array($run_query_by_pro_id)) {
      $pro_price_per_kg = $row_pro['Price'];
    }
  }

  // Calculate the total price
  $pro_price = $weight * $pro_price_per_kg;

  // Insert into the database
  $insert_product = "INSERT INTO `order_new`(`Order_Id`, `Customer_Id`, `Address`, `Phone_Number`, `Order_Date`, `Delivery_Date`, `Delivery_Time`, `Category`, `Flavor`, `Weight`, `Product_Id`, `Image`, `price`, `Wish`) VALUES ('','$customer_id','$customer_address','$customer_number','$order_date','$delivery_date','$delivery_time','$cat_title','$flavor','$weight','$pro_id','$pro_img','$pro_price','$wish')";

  // $insert_pro = mysqli_query($con, $insert_product);

  if (mysqli_query($con, $insert_product)) {
    echo "<script>alert('Order sent successfully')</script>";
    echo "<script>window.open('menu.php','_self')</script>";
  } else {
    echo "Error: " . $insert_product . "<br>" . mysqli_error($con);
  }
}
?>

</html>