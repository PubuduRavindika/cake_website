<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="review.css">
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
                <img src="../backgrounds/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
    </div>
    <?php
        $get_pro = "select * from feedback";

        $run_pro = mysqli_query($con, $get_pro);
        while ($row_pro = mysqli_fetch_array($run_pro)) {
            $feed_id = $row_pro['feedback_id'];
            $user_name = $row_pro['name'];
            $email = $row_pro['email'];
            $message = $row_pro['message'];

                echo "
                <div class='rev-container'>
                <div class='rev'>
                    <p class='name-head'>$user_name</p>
                    <p class='name-email'>$email</p>
                    <p class='name'>$message</p>
                </div>
                </div>
                ";
        }
        ?>


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