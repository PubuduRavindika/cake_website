<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $price = $_POST['price'];

    // Process and validate the uploaded image
    $imagePath = ''; // Store the path to the uploaded image

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/'; // Create an 'uploads' directory to store images

        // Generate a unique filename to avoid overwriting existing files
        $imageFileName = uniqid() . '_' . $_FILES['image']['name'];
        $imagePath = $uploadDir . $imageFileName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
            // Successfully uploaded the image
        } else {
            echo "Error uploading the image.";
            exit();
        }
    } else {
        echo "Image upload failed.";
        exit();
    }

    $product_cat = $_POST['product_cat'];

    // Insert data into the database
    if (!empty($price) && !empty($imagePath) && !empty($product_cat)) {
        require_once('connect.php'); // Include the database connection file

        $query = "INSERT INTO add_item (product_cat, price, image) VALUES ('$product_cat', ?, ?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param('ss', $price, $imagePath);

        if ($stmt->execute()) {
            // Successfully added the item
            $stmt->close();
            $con->close();

            // Redirect back to the birthday page after a short delay
            echo '<script>
                    setTimeout(function() {
                        window.location.href = "add_image_01.php";
                    }, 2000); // Delay for 2 seconds before redirecting
                  </script>';
            exit();
        } else {
            echo "Error adding item to the database: " . $con->error;
        }

        $stmt->close();
        $con->close();
    } else {
        echo "Both price and image are required fields.";
    }
}
