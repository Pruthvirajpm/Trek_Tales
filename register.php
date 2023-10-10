<!DOCTYPE html>
<html>
<head>
    <title>Register - Hotel Booking System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       

        .container {
           
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
    <script>
        function validateForm() {
            var fullName = document.getElementById("full_name").value;
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;
            var country = document.getElementById("country").value;
            
            // Basic name validation (only letters and spaces)
            var namePattern = /^[A-Za-z\s]+$/;
            if (!namePattern.test(fullName)) {
                alert("Please enter a valid name.");
                return false;
            }

            // Other field validations can be added here

            return true;
        }
    </script>
</head>
<body>
    <?php include "navbar.php"; ?>

    <div class="container mt-5">
        <h2>Register</h2>
        <form action="register_process.php" method="POST" onsubmit="return validateForm()">
        <input type="hidden" name="user_id" value="<?php echo uniqid('USER'); ?>">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="full_name">Full Name:</label>
                <input type="text" class="form-control" id="full_name" name="full_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" class="form-control" id="country" name="country" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

    <?php include "footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
