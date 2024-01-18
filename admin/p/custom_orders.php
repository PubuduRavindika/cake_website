<?php
session_start();
include("../connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="orders.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div id="sidenav" class="sidenav">
            <p class="logo"> Janith Cakes & Bakers</p>
            <a href="dashboard_p.php" class="icon-a"> <i class="fa fa-dashboard icons"></i>&nbsp;&nbsp; Dashboard </a>
            <a href="orders.php" class="icon-a"> <i class="fa fa-shopping-bag icons"></i>&nbsp;&nbsp; Orders </a>
            <a href="custom_orders.php" class="icon-a"> <i class="fa fa-shopping-bag icons"></i>&nbsp;&nbsp; Custom Orders </a>
            <a href="customers.php" class="icon-a"> <i class="fa fa-users icons"></i>&nbsp;&nbsp; Customers </a>
            <a href="products.php" class="icon-a"> <i class="fa fa-tasks icons"></i>&nbsp;&nbsp; Products </a>
            <a href="view_accepted_orders.php" class="icon-a"> <i class="fa fa-credit-card icons"></i>&nbsp;&nbsp; Payments </a>
            <a href="feedback.php" class="icon-a"> <i class="fa fa-user icons"></i>&nbsp;&nbsp; Feedbacks </a>
            <a href="manage_sup.php" class="icon-a"> <i class="fa fa-user icons"></i>&nbsp;&nbsp; Manage Suppliers </a>
        </div>

        <div class="main">
            <div class="col-div-6">
                <span style="font-size: 30px; cursor: pointer; color: rgb(161, 67, 67);" class="nav">Custom Orders</span>
                <a style="color: rgb(161, 67, 67); text-decoration: none;" href="logout.php">Logout</a>
            </div>

            <div class="sub-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th> Order Id </th>
                            <th> Customer Id </th>
                            <th> Order Date </th>
                            <th> Delivery Date</th>
                            <th> Delivery Time</th>
                            <th> Category </th>
                            <th> Flavor </th>
                            <th> Weight </th>
                            <th> Image </th>
                            <th> Wish </th>
                            <th> Status </th>
                            <th> Price(Rs.) </th>
                            <th> Action</th>

                    </thead>

                    <tbody>
            </div>
        </div>

        <?php
        $quary = "SELECT * FROM custom_orders ORDER BY Custom_Order_Id DESC";
        $run_quary = mysqli_query($con, $quary);

        while ($order_row = mysqli_fetch_assoc($run_quary)) {
            $order_id = $order_row['Custom_Order_Id'];
            $customer_id = $order_row['Customer_Id'];
            $order_date = $order_row['Order_Date'];
            $order_del_date = $order_row['Delivery_Date'];
            $order_del_time = $order_row['Delivery_Time'];
            $order_category = $order_row['Category'];
            $order_flavor = $order_row['Flavor'];
            $order_weight = $order_row['Weight'];
            $order_image = $order_row['Image'];
            $order_wish = $order_row['Wish'];
            $order_price = $order_row['price'];
            $order_status = $order_row['status'];

            echo "<tr data-order='$order_id'>
            <td>$order_id</td>
            <td>$customer_id</td>
            <td>$order_date</td>
            <td>$order_del_date</td>
            <td>$order_del_time </td>
            <td>$order_category</td>
            <td>$order_flavor</td>
            <td>$order_weight</td>
            <td><img src='../../image/$order_image' width='50px' height='50px'></td>
            <td>$order_wish</td>
            <td>$order_status</td>
            <td><input type='text' name='price' class='price' placeholder='$order_price' required></td>
            <td>
                
                <button onclick='acceptOrder($order_id, \"$order_price\")'>Accept</button>
            </td>
            </tr>";
        }

        ?>

        <script>
            function acceptOrder(order_id, originalPrice) {
                // Get the input field
                var priceInput = document.querySelector("tr[data-order='" + order_id + "'] input.price");

                // Check if the price is filled
                if (!priceInput.value) {
                    alert("Please fill in the price before accepting the order.");
                    return;
                }

                // Perform AJAX request to update the order status and price
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            // Parse the JSON response
                            var response = JSON.parse(xhr.responseText);

                            // Update the status in the table
                            var statusCell = document.querySelector("td[data-order='" + order_id + "'] td:last-child");
                            statusCell.innerHTML = response.status;

                            // Update the price in the input field
                            priceInput.value = response.price;

                            // Disable the input field and button after updating
                            priceInput.disabled = true;
                            var button = statusCell.nextElementSibling.querySelector("button");
                            button.disabled = true;
                        } else {
                            alert("Error updating status and price.");
                        }
                    }
                };

                // Get the new price from the input field
                var newPrice = priceInput.value;

                // Open the AJAX request
                xhr.open("GET", "custom_update_order_status.php?order_id=" + order_id + "&price=" + newPrice, true);
                xhr.send();
            }
        </script>

</body>

</html>