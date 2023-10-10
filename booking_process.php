<?php
// Include your database connection file
include "db_connection.php";

// Retrieve form data
$full_name = $_POST["full_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$booking_id = $_POST["booking_id"];
$check_in_date = $_POST["check_in"];
$check_out_date = $_POST["check_out"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];

// Retrieve parameters from the URL
$bookingType = $_GET["type"];
$bookingId = $_GET["id"];

// Insert booking details into the hotel_bookings table
$sql = "INSERT INTO hotel_bookings (booking_id, customer_id, feature_id, check_in_date, check_out_date, price, quantity)
        VALUES ('$booking_id', '$full_name', '$bookingId', '$check_in_date', '$check_out_date', '$price', '$quantity')";

if ($conn->query($sql) === TRUE) {
    // Booking successfully inserted
    $message = "Booking successful!";
} else {
    // Booking insertion failed
    $message = "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

// Redirect back to the index page with a success or error message
header("Location: index.php?message=" . urlencode($message));
exit();
?>
