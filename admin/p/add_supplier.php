<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Supplier Information</title>
    <link rel="stylesheet" href="supplier.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>



    <section class="container">
        <header> Supplier Information </header>
        <form action="supplier.php" class="form" method="POST">

            <div class="input-box">
                <label>Name</label>
                <input type="text" name="supplier_name" placeholder="Enter your name" required />
            </div>


            <div class="input-box">
                <label>Phone Number</label>
                <input type="text" name="phone_number" placeholder="Enter your phone number" required />
            </div>

            <div class="input-box">
                <label>Email</label>
                <input type="text" name="email" placeholder="Enter your email" required />
            </div>

            <div class="input-box">
                <label>Address</label>
                <input type="text" name="address" placeholder="Enter your address" />
            </div>

            <div class="input-box">
                <label>Ingredients</label>
                <input type="text" name="ingredients" placeholder="Enter your ingredients" />
            </div>




            <button> Submit </button>
            <a href="manage_sup.php" class="cancel">Cancel</a>

        </form>
    </section>





</body>

</html>