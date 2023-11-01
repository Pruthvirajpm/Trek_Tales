<?php
session_start();
require 'users.php'; // Include the user database

if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit();
}

// Simulated database of packages (replace with your database connection)
$packages = [
    1 => [
        'name' => 'City Explorer Package',
        'description' => 'Discover the city\'s attractions with our curated package.',
    ],
    2 => [
        'name' => 'Mountain Adventure Package',
        'description' => 'Embark on an exciting mountain adventure with our package.',
    ],
    // Add more packages here
];

// Add a new package
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_package'])) {
    $newPackage = [
        'name' => $_POST['new_package_name'],
        'description' => $_POST['new_package_description'],
    ];

    // Add the new package to the $packages array (replace with database insertion)
    $packages[] = $newPackage;
}

// Delete a package
if (isset($_GET['delete_package'])) {
    $packageId = $_GET['delete_package'];
    unset($packages[$packageId]);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Manage Packages - Trek Tales Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <!-- Display a list of existing packages -->
    <div class="container mt-5">
        <h1>Manage Packages</h1>

        <h2>Existing Packages</h2>
        <ul>
            <?php foreach ($packages as $id => $package): ?>
                <li>
                    <?php echo $package['name']; ?> - <?php echo $package['description']; ?>
                    <a href="?delete_package=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- Form to add a new package -->
        <h2>Add New Package</h2>
        <form method="post">
            <div class="form-group">
                <label for="new_package_name">Package Name</label>
                <input type="text" class="form-control" id="new_package_name" name="new_package_name" required>
            </div>
            <div class="form-group">
                <label for="new_package_description">Description</label>
                <textarea class="form-control" id="new_package_description" name="new_package_description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="add_package">Add Package</button>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
