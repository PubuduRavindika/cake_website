<?php
session_start();
include("../connect.php");
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
    <section>
        <div class="login-box">
            <form id="loginForm" method="post" enctype="multipart/form-data">
                <h2>Admin Login</h2>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label> Email </label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label> Password</label>
                </div>

                <div class="remember-forgot">
                    <label>
                </div>
                <button type="submit" name="login"> Login </button>
                

            </form>
        </div>
        <?php
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $run_login = mysqli_query($con, "select * from admin where Password='$password' AND Email='$email'");

            $check_login = mysqli_num_rows($run_login);
            $row_login = mysqli_fetch_array($run_login);

            if ($check_login == 0) {
                echo "<script>alert('Password or email is incorrect, Please try again!')</script>";
                exit();
            }

            if ($check_login > 0) {
                $_SESSION['email'] = $email;
                $_SESSION['admin_id'] = $row_login['Admin_Id'];
                echo "<script>alert('Logged in successfully!')</script>";
                echo "<script>window.open('dashboard_p.php','_self')</script>";
            }
        }
        ?>

    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>