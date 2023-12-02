<?php
session_start();
include("../connect.php");

if (!isset($_SESSION['customer_id'])) {
    header("location:../login.php");
}
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
                        <li><a href="../gallery.html">Gallery</a></li>
                        <li><a href="../dashboard.php">Dashboard</a></li>
                        <li><a href="../review.html">Reviews</a></li>
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
                <span style="font-size: 30px; cursor: pointer; color: rgb(161, 67, 67);" class="nav"></span>
            </div>


            <?php
            if (isset($_SESSION['customer_id'])) {
                $user_id = $_SESSION['customer_id'];

                $run_query_by_id = mysqli_query($con, "select * from customer where Customer_Id = '$user_id'");
                while ($row_user = mysqli_fetch_array($run_query_by_id)) {
                    $user_name = $row_user['Customer_Name'];
                    $user_email = $row_user['Email'];
                    $address = $row_user['Address'];
                    $phone = $row_user['Phone_Number'];
                    $reg_date = $row_user['Registration_Date'];
                }
            }
            ?>

            <div class="sub-container">
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <?php
                        echo "
                        <input type='text' class='form-control mb-1' value='$user_name' id='username' onchange='enableSaveButton()'>
                        ";
                        ?>

                    </div>
                    <div class="form-group">
                        <label class="form-label">E-mail</label>
                        <?php
                        echo "
                        <input type='text' class='form-control mb-1' value='$user_email' id='email' onchange='enableSaveButton()'>
                        ";
                        ?>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <?php
                        echo "
                        <input type='text' class='form-control mb-1' value='$address' id='address' onchange='enableSaveButton()'>
                        ";
                        ?>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Phone Number</label>
                        <?php 
                        echo "<input type='text' class='form-control mb-1' value='$phone' id='phone' onchange='enableSaveButton()'>"; 
                        ?>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Registration Date</label>
                        <?php
                        echo "
                        <input type='text' class='form-control mb-1' value='$reg_date' id='reg_date' onchange='enableSaveButton()'>
                        ";
                        ?>
                    </div>

                    <div class="text-right mt-3">
                        <button type="button" class="btn" id="saveChangesBtn" onclick="saveChanges()">Save changes</button>&nbsp;
                    </div>
                </div>
            </div>
        </div>



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
            function enableSaveButton() {
                document.getElementById('saveChangesBtn').disabled = false;
            }

            function saveChanges() {
                var updatedUsername = document.getElementById('username').value;
                var updatedEmail = document.getElementById('email').value;
                var updatedAddress = document.getElementById('address').value;
                var updatedPhone = document.getElementById('phone').value;

                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'update_customer.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        if (xhr.responseText.trim() === 'success') {
                            alert('Profile updated successfully');
                            document.getElementById('saveChangesBtn').disabled = true;
                        } else {
                            alert('Failed to update profile. Please try again.');
                        }
                    }
                };

                xhr.send('username=' + encodeURIComponent(updatedUsername) +
                    '&email=' + encodeURIComponent(updatedEmail) +
                    '&address=' + encodeURIComponent(updatedAddress) +
                    '&phone=' + encodeURIComponent(updatedPhone));
            }
        </script>



</body>

</html>