<?php
session_start();

$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if the file is an image
$allowedExtensions = array("png", "jpeg", "jpg");
if (!in_array($imageFileType, $allowedExtensions)) {
    echo "Invalid file format. Only PNG, JPEG, and JPG files are allowed.";
    exit;
}

// Check if the file was successfully uploaded
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    $_SESSION["uploadedImage"] = $targetFile;
} else {
    echo "Sorry, there was an error uploading your image.";
}

// Redirect back to the personal.html page
header("Location: personal.html");
exit();