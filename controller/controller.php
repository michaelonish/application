<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        // Handle the form submission
        handleForm();
    }
}

// Function to handle form submission
function handleForm()
{
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Validate the form data (you can add your validation logic here)
    if (empty($name) || empty($email)) {
        echo 'Name and email fields are required.';
        return;
    }

    // Store the form data in session
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;

    // Redirect to the summary page
    header('Location: summary.php');
    exit();
}

// Function to get the stored form data
function getFormData()
{
    $formData = [];

    if (isset($_SESSION['name'])) {
        $formData['name'] = $_SESSION['name'];
    }

    if (isset($_SESSION['email'])) {
        $formData['email'] = $_SESSION['email'];
    }

    return $formData;
}

// Function to clear the stored form data
function clearFormData()
{
    unset($_SESSION['name']);
    unset($_SESSION['email']);
}
