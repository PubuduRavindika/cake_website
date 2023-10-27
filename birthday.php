<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="birthday.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Birthday</title>
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

    <div class="full-img" id="fullImgBox">
        <img src="galleryUploads/img1.jpg" id="fullImg">
        <span onclick="closeFullImg()"> X </span>
    </div>

    <div class="img-gallery">
        <?php
        $get_pro = "select * from add_item";

        $run_pro = mysqli_query($con, $get_pro);
        while ($row_pro = mysqli_fetch_array($run_pro)) {
            $pro_id = $row_pro['Product_Id'];
            $pro_price = $row_pro['Price'];
            $pro_img = $row_pro['Image'];
            $pro_cat = $row_pro['product_cat'];

            if ($pro_cat == 1) {
                echo "
                <div class='gallery-item'>
                <img src='admin/$pro_img' onclick='openFullImg(this.src)'>
                <div class='product-info'>
                <p class='product-id'>Product ID: $pro_id</p>
                <p class='product-price'>Rs.$pro_price.00</p>
                <a href='order.php?pro_id=$pro_id' class='order-button'>Order</a>
                </div>
                </div>    
                ";
            }
        }
        ?>
        <!-- <div class="gallery-item">
            <img src="backgrounds/birthday/c1.jpg" onclick="openFullImg(this.src)">
            <div class="product-info">
                <p class="product-id">Product ID: 001</p>
                <p class="product-price">Rs.2099</p>
                <a href="order.html" class="order-button">Order</a>
            </div>
        </div>

        <div class="gallery-item">
            <img src="backgrounds/birthday/c2.jpg" onclick="openFullImg(this.src)">
            <div class="product-info">
                <p class="product-id">Product ID: 002</p>
                <p class="product-price">Rs.1200</p>
                <a href="order.html" class="order-button">Order</a>
        </div>
        </div>
            
        <div class="gallery-item">
            <img src="backgrounds/birthday/c3.jpeg" onclick="openFullImg(this.src)">
            <div class="product-info">
                <p class="product-id">Product ID: 003</p>
                <p class="product-price">Rs.1400</p>
                <a href="order.html" class="order-button">Order</a>
            </div>
        </div>

        <div class="gallery-item">
            <img src="backgrounds/birthday/c4.jpg" onclick="openFullImg(this.src)">
            <div class="product-info">
                <p class="product-id">Product ID: 004</p>
                <p class="product-price">Rs.1400</p>
                <a href="order.html" class="order-button">Order</a>
            </div>
        </div>
        
        <div class="gallery-item">
            <img src="backgrounds/birthday/c5.jpg" onclick="openFullImg(this.src)">
            <div class="product-info">
                <p class="product-id">Product ID: 005</p>
                <p class="product-price">Rs.1400</p>
                <a href="order.html" class="order-button">Order</a>
            </div>
        </div>

        <div class="gallery-item">
            <img src="backgrounds/birthday/c6.jpg" onclick="openFullImg(this.src)">
            <div class="product-info">
                <p class="product-id">Product ID: 006</p>
                <p class="product-price">Rs.1400</p>
                <button class="order-button">Order</button>
            </div>
        </div>

        <div class="gallery-item">
            <img src="backgrounds/birthday/c7.jpg" onclick="openFullImg(this.src)">
            <div class="product-info">
                <p class="product-id">Product ID: 007/p>
                <p class="product-price">Rs.1400</p>
                <button class="order-button">Order</button>
            </div>
        </div> -->

    </div>




    <section>

    </section>

    <!--<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>-->

</body>


</html>