<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "db_connection.php"; // Include the database connection script

function generateUniqueID() {
    $prefix = "CUST";
    $randomPart = substr(md5(uniqid(mt_rand(), true)), 0, 6);
    $timestamp = time();

    echo "Prefix: " . $prefix . "<br>";
    echo "Random Part: " . $randomPart . "<br>";
    echo "Timestamp: " . $timestamp . "<br>";

    $uniqueID = $prefix . $randomPart . $timestamp;
    echo "Generated ID: " . $uniqueID . "<br>";

    return $uniqueID;
}


$customerID = generateUniqueID();
$customerName = $_POST['customerName'];
$email = $_POST['email'];

$sql = "INSERT INTO Customers (CustomerID, CustomerName, Email) VALUES ('$customerID', '$customerName', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
