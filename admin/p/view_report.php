<?php
// view_accepted_orders.php

// Include your database connection file
include("../connect.php");

// Fetch accepted orders from the database

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            font-family: Arial;
        }
        .sort{
           margin: 150px auto;
           width: 500px;
           height: auto;
           border-radius: 10px;
           padding: 30px;
           box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.4); 
           display: flex;
           flex-direction: column;
        }
        .sort button{
            padding: 10px;
            background-color: rgb(161, 67, 67);
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .sort h1{
            margin: 30px auto;
        }

        .sort input{
            margin-bottom: 30px;
            font-size: 16px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="sort">
        <h1>Generate Sales Report</h1>
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required>

        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required>

        <button onclick="sortData()">Sort Data</button>
    </div>

    <script>
        function sortData() {
            // Get the values from the date input fields
            var startDate = document.getElementById('start_date').value;
            var endDate = document.getElementById('end_date').value;

            // Get today's date
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; // January is 0!
            var yyyy = today.getFullYear();

            if (dd < 10) {
                dd = '0' + dd;
            }

            if (mm < 10) {
                mm = '0' + mm;
            }

            var todayString = yyyy + '-' + mm + '-' + dd;

            // Check if the selected start date is after today
            if (startDate > todayString) {
                alert("Start date cannot be after today.");
                return;
            }

            // Check if the selected end date is after today
            if (endDate > todayString) {
                alert("End date cannot be after today.");
                return;
            }

            // Reload the page with the updated date parameters
            window.location.href = 'report.php?start_date=' + startDate + '&end_date=' + endDate;
        }
    </script>

</body>

</html>