
<<?php
// Start session
session_start();

// Include database connection
require_once "db_connection.php";

// Initialize variables
$username = $_POST["username"];
$password = $_POST["password"];
$login_error = "";

// Validate user input
if (empty($username) || empty($password)) {
    $login_error = "Both username and password are required.";
} else {
    // Validate user credentials
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Set a session variable to indicate the user is logged in
        $user = $result->fetch_assoc();
        $_SESSION["user_id"] = $user["user_id"];

        // Redirect to the user's account page
        header("Location: account.php");
        exit(); // Important to exit after redirect
    } else {
        $login_error = "Invalid username or password.";

        // JavaScript pop-up alert
        echo "<script>
                alert('$login_error');
                window.location.href = 'login.php';
              </script>";
    }
}

// Close the database connection
$stmt->close();
$conn->close();
?>

