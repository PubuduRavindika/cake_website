<?php
// view_bill.php

// Include your database connection file
include("../connect.php");

if (isset($_GET['start_date']) && isset($_GET['end_date'])) {
    $start_date = $_GET['start_date'];
    $end_date = $_GET['end_date'];

    // Fetch data from order_new table with LIMIT
    $order_query = "SELECT * FROM order_new WHERE Order_Date BETWEEN '$start_date' AND '$end_date' AND status = 'Accepted' ORDER BY Order_Id DESC LIMIT 6";
    $order_result = mysqli_query($con, $order_query);

    // Fetch data from custom_orders table with LIMIT
    $custom_query = "SELECT * FROM custom_orders WHERE Order_Date BETWEEN '$start_date' AND '$end_date' AND status = 'Accepted' ORDER BY Custom_Order_Id DESC LIMIT 6";
    $custom_result = mysqli_query($con, $custom_query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .invoice {
            width: 100%;
            max-width: 21cm;
            margin: 0 auto;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        }

        .company-header {
            /* background-color: #4caf50; */
            /* color: #fff; */
            padding: 20px;
            text-align: center;
        }

        .order-details {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            border-bottom: 1px solid #ccc;
        }

        .order-details-left,
        .order-details-right {
            width: 48%;
        }

        .product-table {
            width: 100%;
            border-collapse: collapse;
        }

        .product-table th,
        .product-table td {
            border: 1px solid #ddd;
            padding: 20px;
            text-align: left;
        }

        .signature-section {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .signature-container {
            width: 48%;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .print-button {
            padding: 10px;
            background-color: rgb(161, 67, 67);
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .table {
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="invoice">
        <div class="company-header">
            <h1>Janith Cake & Bakers<br> Sales Report</h1>
        </div>

        <div class="order-details">
            <div class="order-details-left">
                <p>Date:</p>

            </div>
            <!-- <div class="order-details-right">
                <p>Our Company Address: 422 Kalutara south, Kalutara</p>
                <p>Contact Number: +94 77 793 4527</p>
                <p>Email: janith@gmail.com</p>
            </div> -->
        </div>

        <div class="table">
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Order Type</th>
                        <th>Order Date</th>
                        <th>Weight(Kg)</th>
                        <th>Category</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $totalPrice = 0; // Initialize total price

                    // Loop through order results
                    while ($order_row = mysqli_fetch_assoc($order_result)) {
                        echo "<tr>";
                        echo "<td>" . $order_row['Order_Id'] . "</td>";
                        echo "<td>Regular Order</td>"; // Assuming this is a regular order
                        echo "<td>" . $order_row['Order_Date'] . "</td>";
                        echo "<td>" . $order_row['Weight'] . "Kg</td>";
                        echo "<td>" . $order_row['Category'] . "</td>";
                        echo "<td>Rs." . $order_row['price'] . ".00</td>";
                        echo "</tr>";

                        // Add the item's price to the total
                        $totalPrice += $order_row['price'];
                    }

                    // Loop through custom order results
                    while ($custom_row = mysqli_fetch_assoc($custom_result)) {
                        echo "<tr>";
                        echo "<td>" . $custom_row['Custom_Order_Id'] . "</td>";
                        echo "<td>Custom Order</td>"; // Assuming this is a custom order
                        echo "<td>" . $custom_row['Order_Date'] . "</td>";
                        echo "<td>" . $custom_row['Weight'] . "Kg</td>";
                        echo "<td>" . $custom_row['Category'] . "</td>";
                        echo "<td>Rs." . $custom_row['price'] . ".00</td>";
                        echo "</tr>";

                        // Add the item's price to the total
                        $totalPrice += $custom_row['price'];
                    }

                    // Display total price row
                    echo "<tr>";
                    echo "<td colspan='5'><strong>Total Price:</strong></td>";
                    echo "<td><strong>Rs." . $totalPrice . ".00</strong></td>";
                    echo "</tr>";
                    ?>
                </tbody>
            </table>
        </div>



        <div class="signature-section">
            <!-- <div class="signature-container">
                <p>Customer Signature:</p>
            </div> -->
            <div class="signature-container">
                <p>Signature:</p>
                <!-- Add space or line for physical signature -->
            </div>
        </div>
    </div>

    <div class="button-container">
        <button class="print-button" onclick="printBill()">Print Bill</button>
    </div>

    <script>
        function printBill() {
            var printContents = document.querySelector('.invoice').innerHTML;
            var originalContents = document.body.innerHTML;

            // Replace the entire body content with the content of the invoice div
            document.body.innerHTML = printContents;

            // Print the content
            window.print();

            // Restore the original body content
            document.body.innerHTML = originalContents;
        }
    </script>
</body>