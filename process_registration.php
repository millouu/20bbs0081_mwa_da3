<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["firstname"];

    // Redirect to login page after successful registration.
    header("Location: home.php?name=" . urlencode($name));
    exit();
}
