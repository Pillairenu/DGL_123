<?php
require_once('../Database.php');// Connect to your database (create this file)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $unitNumber = $_POST["unit-number"];
    $street = $_POST["street"];
    $propertyType = $_POST["property-type"];
    $listingType = $_POST["listing-type"];
    $features = $_POST["features"];
    $additionalInfo = $_POST["additional-info"];

    // Check if an image file was uploaded
    if (isset($_FILES["image"])) {
        $image = $_FILES["image"]["name"];
        $target_dir = "uploads/"; // Directory where you want to store the uploaded images
        $target_file = $target_dir . basename($image);

        // Move the uploaded image to the target directory
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    } 
    
    else
     {
        $image = null; // No image uploaded
    }

    // Insert data into the database
    $sql = "INSERT INTO properties (unit_number, street, property_type, listing_type, features, additional_info, image)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$unitNumber, $street, $propertyType, $listingType, $features, $additionalInfo, $image]);

    // Redirect to a success page or handle errors
    header("Location: /DGL_123/milestone_3/rooms"); // Redirect to a success page
    exit();
}