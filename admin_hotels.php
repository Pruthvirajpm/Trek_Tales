<?php
session_start();
require 'users.php';

if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit();
}

// Connect to the MySQL database
$host = 'localhost';
$username = 'pm';
$password = '123456';
$database = 'trek_tales';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to retrieve the list of hotels
function getHotels($conn) {
    $hotels = [];
    $query = "SELECT * FROM hotels";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $hotels[] = $row;
        }
    }

    return $hotels;
}

$hotels = getHotels($conn); // Retrieve the list of hotels

$message = '';

// Add a new hotel
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_hotel'])) {
    $newHotelName = $conn->real_escape_string($_POST['new_hotel_name']);
    $newHotelDescription = $conn->real_escape_string($_POST['new_hotel_description']);

    // Handle the uploaded image
    $targetDir = "images/"; // Directory where the images will be stored
    $targetFile = $targetDir . '/' . basename($_FILES["hotel_image"]["name"]);

    if (move_uploaded_file($_FILES["hotel_image"]["tmp_name"], $targetFile)) {
        // Insert the new hotel into the database with the image file name
        $query = "INSERT INTO hotels (name, description, image) VALUES ('$newHotelName', '$newHotelDescription', '" . $_FILES["hotel_image"]["name"] . "')";
        if ($conn->query($query) === TRUE) {
            $message = 'Hotel Added';
            // Refresh the list of hotels
            $hotels = getHotels($conn);
        } else {
            $message = 'Error adding hotel: ' . $conn->error;
        }
    } else {
        $message = 'Error uploading image.';
    }
}

// Delete a hotel
if (isset($_GET['delete_hotel'])) {
    $hotelId = $_GET['delete_hotel'];

    // First, retrieve the image file name for the hotel being deleted
    $imageQuery = "SELECT image FROM hotels WHERE id = $hotelId";
    $result = $conn->query($imageQuery);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imageFileName = $row['image'];
        // Delete the image file from the server
        if (file_exists("images/$imageFileName")) {
            unlink("images/$imageFileName");
        }
    }

    // Then, delete the hotel from the database
    $query = "DELETE FROM hotels WHERE id = $hotelId";
    if ($conn->query($query) === TRUE) {
        $message = 'Hotel Deleted';
        // Refresh the list of hotels
        $hotels = getHotels($conn);
    } else {
        $message = 'Error deleting hotel: ' . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Hotels - Trek Tales Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Manage Hotels</h1>

        <h2>Existing Hotels</h2>
        <?php if (!empty($hotels)): ?>
            <ul>
                <?php foreach ($hotels as $hotel): ?>
                    <li>
                        <?php echo $hotel['name']; ?> - <?php echo $hotel['description']; ?>
                        <a href="?delete_hotel=<?php echo $hotel['id']; ?>" class="btn btn-danger">Delete</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No hotels found.</p>
        <?php endif; ?>

        <!-- Display the "Hotel Added" or "Hotel Deleted" message if set -->
        <?php if (!empty($message)): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>

        <h2>Add New Hotel</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="new_hotel_name">Hotel Name</label>
                <input type="text" class="form-control" id="new_hotel_name" name="new_hotel_name" required>
            </div>
            <div class="form-group">
                <label for="new_hotel_description">Description</label>
                <textarea class="form-control" id="new_hotel_description" name="new_hotel_description" required></textarea>
            </div>
            <div class="form-group">
                <label for="hotel_image">Hotel Image</label>
                <input type="file" class="form-control-file" id="hotel_image" name="hotel_image" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary" name="add_hotel">Add Hotel</button>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
