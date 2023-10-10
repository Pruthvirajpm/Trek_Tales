<?php
require_once "db_connection.php"; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uid = $_POST["user_id"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $fullName = $_POST["full_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $country = $_POST["country"];

    // Validate and sanitize user input

    // You should hash the password before storing it in the database

    $sql = "INSERT INTO users (user_id, username, password, full_name, email, phone, country) VALUES ('$uid','$username', '$password', '$fullName', '$email', '$phone', '$country')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the index page after successful registration
        header("Location: index.php");
        exit; // Make sure to exit to prevent further execution
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
