<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rating = $_POST["Rating"];
    $comment = $_POST["Comment"];

   
    $sql = "INSERT INTO `review`  (Rating, Comment) VALUES ('$rating', '$comment')";

    if ($con->query($sql) === TRUE) {
        echo "Review submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Close the database connection
$con->close();
?>
