<?php
// view_bill.php

// Include your database connection file
include("../connect.php");

if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];

    // Fetch order details from the database
    $query = "SELECT * FROM custom_orders WHERE Custom_Order_Id = $order_id";
    $result = mysqli_query($con, $query);
    $order_details = mysqli_fetch_assoc($result);
    $user_id = $order_details['Customer_Id'];


    // Fetch product details from the database
    $query = "SELECT * FROM customer WHERE Customer_Id = " . $order_details['Customer_Id'];
    $result = mysqli_query($con, $query);
    $customer_details = mysqli_fetch_assoc($result);

    // // Display order and product details
    // echo "<h2>Order Details</h2>";
    // echo "<p>Order ID: " . $order_details['Order_Id'] . "</p>";
    // echo "<p>Customer Name: " . $order_details['Customer_Name'] . "</p>";
    // // Add more order details as needed

    // echo "<h2>Product Details</h2>";
    // echo "<p>Price: " . $customer_details['Price'] . "</p>";
    // // Add more product details as needed

    // // Add a button to print the bill
    // echo "<button onclick='printBill()'>Print Bill</button>";

    // // JavaScript to handle the print functionality
    // echo "<script>
    //         function printBill() {
    //             window.print();
    //         }
    //       </script>";
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

        .table{
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="invoice">
        <div class="company-header">
            <h1>Janith Cake & Bakers</h1>
        </div>

        <div class="order-details">
            <div class="order-details-left">
                <p>Order ID: <span id="order-id"><?php echo $order_details['Custom_Order_Id']; ?></span></p>
                <p>Customer Name: <span id="customer-name"><?php echo $customer_details['Customer_Name']; ?></span></p>
                <p>Delivery Address: <span id="delivery-address"><?php echo $order_details['Address']; ?></span></p>
                <p>Telephone Number: <span id="telephone-number"><?php echo $order_details['Phone_Number']; ?></span></p>
                <p>Email: <span id="email"><?php echo $customer_details['Email']; ?></span></p>
            </div>
            <div class="order-details-right">
                <p>Our Company Address: 422 Kalutara south, Kalutara</p>
                <p>Contact Number: +94 77 793 4527</p>
                <p>Email: janith@gmail.com</p>
            </div>
        </div>

        <div class="table">
        <table class="product-table">
            <thead>
                <tr>
                    <th>Weight</th>
                    <th>Flavor</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php
                        $weight = $order_details['Weight'];
                        echo "$weight Kg"; ?>
                    </td>
                    <td><?php echo $order_details['Flavor']; ?></td>
                    <td>
                        <?php
                        $price = $order_details['price'];
                        echo "Rs.$price.00"; ?>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        </div>

        

        <div class="signature-section">
            <div class="signature-container">
                <p>Customer Signature:</p>
                <!-- Add space or line for physical signature -->
            </div>
            <div class="signature-container">
                <p>Authorized Signature:</p>
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

</html>