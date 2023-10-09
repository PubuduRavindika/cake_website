<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title> Cake Orders </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
       
        .table th,
        .table td {
            padding: 15px; 
        }
    </style>

</head>
<body style="margin: 50px;">
    <h1> Cake Orders</h1>
        <br>

        <table class="table">
            <thread>
                <tr>
                    <th> Order_Id </th>
                    
                    <th> Order_Date </th>
                    <th> Delivery_Date</th>
                    <th> Delivery_Time</th>
                   
				    <th> Category </th>
					<th> Flavor </th>
					<th> Weight </th>
                    <th> Shape </th>
                    <th> Image </th>
                    <th> Wish </th>
                    
                    

                </tr>
               
            </thread>

            <tbody>
                

<?php

$servername = "localhost";
$username = "admin";
$password = "123";
$database = "cake";

// Create connection
$connection = new mysqli("localhost", "admin", "123", "cake");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Read all rows from the database table
$sql = "SELECT * FROM `order`"; // Use backticks around the table name
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query: " . $connection->error);
}

// Read data of each row
while ($row = $result->fetch_assoc()) {
    echo "<tr> 
    <td>", $row["Order_Id"], "</td>
   
    <td>", $row["Order_Date"], "</td>
    <td>", $row["Delivery_Date"], "</td>
    <td>", $row["Delivery_Time"], "</td>
    
    <td>", $row["Category"], "</td>
    <td>", $row["Flavor"], "</td>
    <td>", $row["Weight"], "</td>
    <td>", $row["Shape"], "</td>
    <td>", $row["Image"], "</td>
    <td>", $row["Wish"], "</td>
    </tr>";
}
?>

            </tbody>

        </table>

        
    </tr>

                                                                                          
                                   

                        
    
</body>
</html>