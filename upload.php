<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump($_FILES); // This will print information about the uploaded file
    
    $uploadDir = 'galleryUploads/';
    $uploadedFile = $uploadDir . basename($_FILES['image']['name']);
    $uploadSuccess = move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFile);

    if ($uploadSuccess) {
        echo json_encode(['message' => 'Image uploaded successfully']);
    } else {
        echo json_encode(['message' => 'Image upload failed']);
    }
}



?>
