<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
</head>
<body>
    
    <div id="sidenav" class="sidenav">
        <p class="logo"> Janith Cakes & Bakers</p>
        <a href="dashboard.php" class="icon-a"> <i class="fa fa-dashboard icons"></i>&nbsp;&nbsp; Dashboard </a>
        <a href="registerGrid.php" class="icon-a"> <i class="fa fa-users icons"></i>&nbsp;&nbsp; Customers </a>
        <a href="orderGrid.php" class="icon-a"> <i class="fa fa-shopping-bag icons"></i>&nbsp;&nbsp; Orders </a>
        <a href="#" class="icon-a"> <i class="fa fa-tasks icons"></i>&nbsp;&nbsp; Inventory </a>
        <a href="#" class="icon-a"> <i class="fa fa-credit-card icons"></i>&nbsp;&nbsp; Payments </a>
        <a href="#" class="icon-a"> <i class="fa fa-user icons"></i>&nbsp;&nbsp; Category </a>
        <a href="#" class="icon-a"> <i class="fa fa-user icons"></i>&nbsp;&nbsp; Accounts </a>
    </div>

<div id="main">
    <div class="head">
        <div class="col-div-6">
        <span style="font-size: 30px; cursor: pointer; color: white;" class="nav">&#9776;Dashboard</span>
    </div>
    

    <div class="col-div-6">
       <div class="profile"> 
            <img src="backgrounds/user.jpg" class="pro-img">
            <p>Main Admin</p>
        </div>
    </div>

    <div class="clearfix"></div>   

    </div>
    
    <div class="col-div-3">
         <div class="box">
                <p>67<br><span>Customers</span></p>
                <i class="fa fa-users box-icon"></i>
            </div>
        </div>
    
        <div class="col-div-3">
            <div class="box">
                <p>23<br><span>Orders</span></p>
                <i class="fa fa-shopping-bag box-icon"></i>
            </div>
        </div>
    
        <div class="col-div-3">
            <div class="box">
                <p>Rs.2300<br><span>Sales</span></p>
                <i class="fa fa-usd box-icon"></i>
            </div>
        </div>

        <div class="clearfix"></div> 
        <br/><br/>

        <!--<div class="col-div-8">
            <div class="box-8">
                <div class="content-box">

                </div>
            </div>

        </div>-->

        <div class="col-div-4">
            <div class="box-4">
                <div class="content-box">
                    <p>Total Sale <span> View All </span></p>

                    <div class="circle">
                        <div class="mask full">
                            <div class="fill"></div>
                        </div>
                        <div class="mask half">
                            <div class="fill"></div>
                        </div>
                        <div class="inside-circle"></div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="clearfix"></div>


    </div>
    

</div> 



</body>
</html>