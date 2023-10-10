<!DOCTYPE html>
<html>
<head>
    <title>Booking - BookingBreeze</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include "navbar.php"; ?>

    <div class="container mt-5">
        <h2>Complete Your Booking</h2>

        <?php
        // Include your database connection file
        include "db_connection.php";

        // Retrieve parameters from the URL
        $bookingType = $_GET["type"];
        $bookingId = $_GET["id"];

        if ($bookingType === "hotel") {
            // Fetch hotel details based on $bookingId
            // ... Fetch and display hotel details ...
        } elseif ($bookingType === "package") {
            // Fetch package details based on $bookingId
            // ... Fetch and display package details ...
        }
        ?>

        <h3><?php echo $bookingType === "hotel" ? "Hotel" : "Package"; ?> Details</h3>
        <!-- Display the booking details here -->

        <!-- Booking form -->
        <form action="confirm_booking_process.php?type=<?php echo $bookingType; ?>&id=<?php echo $bookingId; ?>" method="POST">
            <!-- Form fields for customer info -->
            <div class="form-group">
                <label for="full_name">Full Name:</label>
                <input type="text" class="form-control" id="full_name" name="full_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone">
            </div>
            <!-- ... other form fields ... -->

            <button type="submit" class="btn btn-primary">Confirm Booking</button>
        </form>
    </div>

    <?php include "footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
