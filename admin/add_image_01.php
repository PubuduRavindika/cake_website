<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Add Image to Category </title>
    <link rel="stylesheet" href="payCus.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>



    <section class="container">
        <header> Add New Product</header>
        <form action="add_image.php" method="post" class="form" enctype="multipart/form-data">

            <div class="input-box">
                <label> Price </label>
                <input type="text" name="price" required />
            </div>

            <div class="input-box">
                <label> Category </label>
                <select name="product_cat">
                    <option disabled selected>Select a Category</option>
                    <?php
                    $get_cats = "select * from categories";

                    $run_cats =  mysqli_query($con, $get_cats);

                    while ($row_cats = mysqli_fetch_array($run_cats)) {
                        $cat_id = $row_cats['cat_id'];

                        $cat_title = $row_cats['cat_title'];

                        echo "<option value='$cat_id'>$cat_title</option>";
                    }
                    ?>
                </select>
            </div>


            <div class="input-box">
                <label>Image</label>
                <input type="file" accept="image/*" name="image" id="imageInput" />
                <label for="imageInput" class="file-label"></label>
            </div>



            <button> Add </button>

        </form>
    </section>





</body>

</html>