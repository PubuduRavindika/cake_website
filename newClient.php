<?php
$name = "";
$address = "";
$email = "";
$phone = "";
$date = "";


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST["name"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> New Client </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
         <h2> New Client </h2>
         <form method="post"></form>
            
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Name</label>
               <div class="col-sm-6"> 
                   <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
               </div>

            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Address</label>
               <div class="col-sm-6"> 
                   <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
               </div>  
               
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Email</label>
               <div class="col-sm-6"> 
                   <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
               </div>

            

            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Phone_Number</label>
               <div class="col-sm-6"> 
                   <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
               </div>

            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Registration_Date</label>
               <div class="col-sm-6"> 
                   <input type="date" class="form-control" name="date" value="<?php echo $date; ?>">
               </div>   

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/cake/registerGrid.php" role="button">Cancel</a>
                </div>

            </div>   

            </div>   

    </div>
</body>
</html>