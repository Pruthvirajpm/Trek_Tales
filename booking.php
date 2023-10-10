<!DOCTYPE html>
<html>

<head>
    <title>Booking - BookingBreeze</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php include "navbar.php"; ?>

    <div class="container mt-5">
        <?php
        // Include your database connection file
        include "db_connection.php";

        // Retrieve parameters from the URL
        $bookingType = $_GET["type"];
        $bookingId = $_GET["id"];

        if ($bookingType === "hotel") {
            // Fetch hotel details based on $bookingId
            // Replace with actual database query
            $hotelDetails = [
                "name" => "Luxury Resort & Spa",
                "description" => "Experience luxury and relaxation in our beautiful resort.",
                // ... other details ...
            ];
        } elseif ($bookingType === "package") {
            // Fetch package details based on $bookingId
            // Replace with actual database query
            $packageDetails = [
                "name" => "City Explorer Package",
                "description" => "Discover the city's attractions with our curated package.",
                // ... other details ...
            ];
        }
        ?>

        <h2><?php echo $bookingType === "hotel" ? "Hotel" : "Package"; ?> Booking</h2>
        <h3><?php echo $bookingType === "hotel" ? $hotelDetails["name"] : $packageDetails["name"]; ?></h3>
        <p><?php echo $bookingType === "hotel" ? $hotelDetails["description"] : $packageDetails["description"]; ?></p>

        <!-- Booking form -->
        <form action="booking_process.php?type=<?php echo $bookingType; ?>&id=<?php echo $bookingId; ?>" method="POST">
            <!-- Hidden input field for booking_id -->
            <input type="hidden" name="booking_id" value="<?php echo uniqid('BOOK'); ?>">

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

            <!-- Date picker for check-in date -->
            <div class="form-group">
                <label for="check_in">Check-in Date:</label>
                <input type="date" class="form-control" id="check_in" name="check_in" required>
            </div>

            <!-- Date picker for check-out date -->
            <div class="form-group">
                <label for="check_out">Check-out Date:</label>
                <input type="date" class="form-control" id="check_out" name="check_out" required>
            </div>
            <!-- Input field for price -->
            <div class="form-group">
                <label for="price">Price:</label>
                <select class="form-control" id="price" name="price" required>
                    <option value="200">$200</option>
                    <option value="300">$300</option>
                    <option value="400">$400</option>
                </select>
            </div>

            <!-- Input field for quantity -->
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <select class="form-control" id="quantity" name="quantity" required>
                    <?php for ($i = 1; $i <= 10; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Confirm Booking</button>
        </form>
    </div>

    <?php include "footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>