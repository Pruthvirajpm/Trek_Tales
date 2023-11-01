<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard - Trek Tales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php include "navbar.php"; ?>

    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Admin Dashboard</h1>
            <p class="lead">Welcome, Administrator!</p>
        </div>

        <!-- Admin features go here -->
        <div class="mt-5">
            <h2>Manage Content</h2>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="admin_hotels.php">Manage Hotels</a>
                </li>
                <li class="list-group-item">
                    <a href="admin_packages.php">Manage Packages</a>
                </li>
            </ul>
        </div>
    </div>

    <?php include "footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
