<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Login </title>
    <link rel="stylesheet" href="login.css">
    
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    
   <section>
   <div class="login-box">
     <form id="loginForm" method="post" enctype="multipart/form-data">
        <h2>Login</h2>
        <div class="input-box">
            <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
            <input type="text" name="email" required>
            <label> Username</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
            <input type="password" name="password" required>
            <label> Password</label>
        </div>

        <div class="remember-forgot">
            <label>
                <input type="checkbox"> Remember me </label>
                <a href="forgotp.html">Forgot Password?</a>
        </div>
        <button type="submit" name="login"> Login </button>
        <div class="register-link">
            <p>Don't have an account? <a href="register.html"> Register</a></p>
        </div>

     </form>
   </div>
    <?php
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $run_login = mysqli_query($con, "select * from customer where Password='$password' AND Email='$email'");

            $check_login = mysqli_num_rows($run_login);
            $row_login = mysqli_fetch_array($run_login);

            if ($check_login == 0) {
                echo "<script>alert('Password or email is incorrect, Please try again!')</script>";
                exit();
            }

            if ($check_login > 0) {
                $_SESSION['email'] = $email;
                $_SESSION['customer_id'] = $row_login['Customer_Id'];
                echo "<script>alert('Logged in successfully!')</script>";
                echo "<script>window.open('menu.php','_self')</script>";
            }
        }
    ?>
   
</section> 
    
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
