<!DOCTYPE html>
<html>

<head>
    <title>Admin Login - Trek Tales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="text-center">
                    <img src="images/TrekTales_login.png" alt="Trek Tales Logo" class="img-fluid">
                </div>
                <h1 class="text-center">Admin Login</h1>

                <!-- Display error message if login is unsuccessful -->
                <?php
                session_start();
                require 'users.php'; // Include the user database

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    // Check if the username exists in the user database
                    if (array_key_exists($username, $users)) {
                        // In a real-world scenario, you should hash and verify passwords securely.
                        // Here, we're using a simple comparison, which is not secure for production.
                        if ($password === $users[$username]['password']) {
                            // Authentication successful
                            $_SESSION['admin'] = true;
                            header('Location: admin.php');
                            exit();
                        }
                    }

                    $error = 'Invalid credentials. Please try again.';
                }
                if (isset($error)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>

                <!-- Login form -->
                <form method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
