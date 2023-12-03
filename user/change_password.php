<?php
session_start();
include("../connect.php");

if (!isset($_SESSION['customer_id'])) {
    header("location:../login.php");
}

$customer_id = $_SESSION['customer_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <div class="dash-container">
            <div class="navbar">
                <div class="dash-logo">
                    <a href="../index.php"><label class="dash-logo">Janith Cakes & Bakers</label></a>
                </div>
                <nav>
                    <ul id="menuItems">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../menu.php">Menu</a></li>
                        <li><a href="../gallery.php">Gallery</a></li>
                        <li><a href="../dashboard.php">Dashboard</a></li>
                        <li><a href="../review.php">Reviews</a></li>
                        <li><a href="../index.php">Contact us</a></li>
                        <li><a href="../logout.php">Log Out</a></li>
                    </ul>
                </nav>
                <img src="../backgrounds/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
    </div>

    <div class="container">
        <div id="sidenav" class="sidenav">
            <p class="logo"> Dashboard</p>
            <a href="dashboard.php" class="icon-a"> <i class="fa fa-dashboard icons"></i>&nbsp;&nbsp; Dashboard </a>
            <a href="my_orders.php" class="icon-a"> <i class="fa fa-shopping-bag icons"></i>&nbsp;&nbsp; My Orders </a>
            <a href="custom_orders.php" class="icon-a"> <i class="fa fa-shopping-bag icons"></i>&nbsp;&nbsp; My Custom Orders </a>
            <a href="change_password.php" class="icon-a"> <i class="fa fa-users icons"></i>&nbsp;&nbsp; Change Password </a>
            <a href="../logout.php" icon-a> <i class="fa fa-tasks icons"></i>&nbsp;&nbsp; Log Out </a>
        </div>

        <div class="main">
            <div class="col-div-6">
                <span style="font-size: 30px; cursor: pointer; color: rgb(161, 67, 67);" class="nav">Change Password</span>
            </div>

            <div class="sub-container">
                <form method="post" action="change_password.php">
                    <div class="form-group">
                        <label class="form-label">Current password</label>
                        <input type="password" name="current_password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">New password</label>
                        <input type="password" name="new_password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Repeat new password</label>
                        <input type="password" name="repeat_password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn">Change Password</button>
                </form>
            </div>
        </div>


        <?php
        $user_id = $_SESSION['customer_id'];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $current_password = mysqli_real_escape_string($con, $_POST['current_password']);
            $new_password = mysqli_real_escape_string($con, $_POST['new_password']);
            $repeat_password = mysqli_real_escape_string($con, $_POST['repeat_password']);

            // Fetch the current password from the database
            $fetch_password_query = "SELECT Password FROM customer WHERE Customer_Id = '$user_id'";
            $result = mysqli_query($con, $fetch_password_query);
            $row = mysqli_fetch_assoc($result);
            $stored_password = $row['Password'];

            // Verify the current password
            if ($current_password == $stored_password) {
                // Check if the new password and repeat password match
                if ($new_password == $repeat_password) {
                    // Hash the new password before storing it in the database
                    // $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                    // Update the user's password in the database
                    $update_password_query = "UPDATE customer SET Password = '$new_password' WHERE Customer_Id = '$user_id'";
                    mysqli_query($con, $update_password_query);
                    echo "<script>alert('Password changed successfully!')</script>";
                } else {
                    echo "<script>alert('New password and repeat password do not match!')</script>";
                }
            } else {
                echo "<script>alert('Incorrect current password!')</script>";
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

</body>

</html>