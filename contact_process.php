<?php
require_once "db_connection.php"; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $msgid = $_POST["message_id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = intval($_POST["phone"]);
    $title = $_POST["title"];

    $message = $_POST["message"];

Validate and sanitize user input

    $sql = "INSERT INTO contact_messages (message_id, name, email, phone, title, message) VALUES ('$msgid','$name', '$email', '$phone','$title','$message')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the index page after successful submission
        header("Location: index.php");
        exit; // Make sure to exit to prevent further execution
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
