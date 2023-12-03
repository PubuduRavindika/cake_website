<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <li><a href="gallery.html">Gallery</a></li>
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


    <!-- ---------------featured categories----------------- -->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1013488.7421248133!2d78.66867057812497!3d7.132891000000021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae233b3cfdc0907%3A0x487e3f9584cef4f4!2sJanith%20Cakes%20and%20Grocery!5e0!3m2!1sen!2slk!4v1701595304128!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.2601978258454!2d79.8941683140948!3d6.738080222502556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2453836c75e31%3A0xabc8eab54326f914!2sOrion%20Technology%20Rebuilders!5e0!3m2!1sen!2slk!4v1661784464676!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>Janith Cakes & Bakers</h5>
                        <p style="color: black;">422 Kalutara south, Kalutara</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>+94 77 793 4527</h5>
                        <p style="color: black;">24 Hour Service</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>janith@gmail.com</h5>
                        <p style="color: black;">Email us your query</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="contact.php" method="post">
                    <p>You need to login first!</p>
                    <input type="text" name="name" placeholder="Enter Your Name" required>
                    <input type="email" name="email" placeholder="Enter Email Address">
                    <textarea rows="8" name="message" placeholder="Message"></textarea>
                    <div class='rating'>
                        <input type="hidden" name="rating" id="rating" value="0">
                        <i class='fa fa-star-o' data-index="1"></i>
                        <i class='fa fa-star-o' data-index="2"></i>
                        <i class='fa fa-star-o' data-index="3"></i>
                        <i class='fa fa-star-o' data-index="4"></i>
                        <i class='fa fa-star-o' data-index="5"></i>
                    </div>
                    <button type="submit" class="visit-btn clr-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_SESSION['customer_id'])) {
            $user_id = $_SESSION['customer_id'];
            $name = mysqli_real_escape_string($con, $_POST['name']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $message = mysqli_real_escape_string($con, $_POST['message']);
            $rating = mysqli_real_escape_string($con, $_POST['rating']);

            // Insert data into the feedback table
            $insert_query = "INSERT INTO feedback (user_id, name, email, message, rating) VALUES ('$user_id', '$name', '$email', '$message', '$rating')";
            mysqli_query($con, $insert_query);

            // You can add a success message or redirect the user to a thank-you page
            // echo "<script>alert('Feedback submitted successfully!')</script>";
        } else {
            // User is not logged in, redirect to account.php
            echo "<script>alert('You need to login first!')</script>";
        }
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


    <script>
        const stars = document.querySelectorAll('.rating i');
        const ratingInput = document.getElementById('rating');
        const form = document.querySelector('form');

        stars.forEach((star, index) => {
            star.addEventListener('mouseover', () => {
                highlightStars(index);
            });

            star.addEventListener('mouseout', () => {
                resetStars();
                highlightStars(ratingInput.value - 1); // Highlight stars up to the selected value
            });

            star.addEventListener('click', (event) => {
                // Prevent the default form submission
                event.preventDefault();

                // Set the value of the hidden input
                ratingInput.value = index + 1;

                // Highlight stars up to the clicked star
                highlightStars(index);
            });
        });

        function highlightStars(index) {
            stars.forEach((star, i) => {
                if (i <= index) {
                    star.classList.remove('fa-star-o');
                    star.classList.add('fa-star');
                } else {
                    star.classList.remove('fa-star');
                    star.classList.add('fa-star-o');
                }
            });
        }

        function resetStars() {
            stars.forEach(star => {
                star.classList.remove('fa-star');
                star.classList.add('fa-star-o');
            });
        }
    </script>

</body>

</html>