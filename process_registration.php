<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["firstname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // You should perform validation and database insertion here (not shown in this example).
    
    // Redirect to login page after successful registration.
    header("Location: home.php?name=" . urlencode($name));
    exit();
}
