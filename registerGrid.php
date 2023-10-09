<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title> Customer Details </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body style="margin: 50px;">
    <h1> Customer Details </h1>
    <!--<a class="btn btn-primary" href="" role="button">New Customer</a>-->
        <br>

        <table class="table">
            <thread>
                <tr>
                    <th> Customer_Id </th>
                    <th> Customer_Name </th>
                    <th> Address </th>
                    <th> Email </th>
                    <th> Phone_Number</th>
                   
				    <th> Registration_Date </th>
					<th> Username </th>
					<th> Password </th>
                    
                    
                    

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
$sql = "SELECT * FROM `customer`"; // Use backticks around the table name
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query: " . $connection->error);
}

// Read data of each row
while ($row = $result->fetch_assoc()) {
    echo "<tr> 
    
    <td>", $row["Customer_Id"], "</td>
    <td>", $row["Customer_Name"], "</td>
    <td>", $row["Address"], "</td>
    <td>", $row["Email"], "</td>
    
    <td>", $row["Phone_Number"], "</td>
    <td>", $row["Registration_Date"], "</td>
    <td>", $row["Username"], "</td>
    <td>", $row["Password"], "</td>
    
    <td>
        
        <a class='btn btn-primary btn-sm' href='update'>Update</a>
        <a class='btn btn-danger btn-sm' href='delete'>Delete</a>

    </td>

    </tr>";
}
?>

            </tbody>

        </table>

        
    </tr>

                                                                                          
                                   

                        
    
</body>
</html>