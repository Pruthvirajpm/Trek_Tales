<!DOCTYPE html>
<html>
<head>
    <title>My Account - BookingBreeze</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include "navbar.php"; ?>

    <div class="container mt-5">
        <h2>My Account</h2>
        <p>Welcome to your account page. Here are your booked hotels:</p>

        <table class="table">
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Hotel Name</th>
                    <th>Check-in Date</th>
                    <th>Check-out Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Start the session
                session_start();

                // Include your database connection file
                include "db_connection.php";

                // Retrieve customer's booked hotels from the database
                if(isset($_SESSION['user_id'])) {
                    $customer_id = $_SESSION['user_id']; // Use the appropriate session variable
                    $sql = "SELECT * FROM hotel_bookings WHERE customer_id = '$customer_id'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["booking_id"] . "</td>";
                            // Fetch hotel name based on room_id
                            // Replace with actual database query
                            $hotel_name = "Luxury Resort & Spa"; // Example
                            echo "<td>" . $hotel_name . "</td>";
                            echo "<td>" . $row["check_in_date"] . "</td>";
                            echo "<td>" . $row["check_out_date"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No bookings found.</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Please log in to view your bookings.</td></tr>";
                }

                // Close the database connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <?php include "footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
