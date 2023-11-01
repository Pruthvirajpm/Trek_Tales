<!DOCTYPE html>
<html>
<head>
    <title>About Us - Trek Tales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        .feature-icon {
            font-size: 24px;
            color: #007bff;
            margin-right: 10px;
        }

        .feature {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .feature-image {
            width: 60px;
            height: 60px;
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <?php include "navbar.php"; ?>

    <div class="container mt-5">
        <h2>About Us</h2>
        <p>Welcome to Trek Tales, your ultimate destination for hassle-free and delightful hotel bookings! At Trek Tales, we are dedicated to providing you with a seamless experience when it comes to planning and booking your dream vacation stays.</p>

        <!-- Adding interactive features with icons -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="feature">
                    <i class="feature-icon fas fa-hotel"></i>
                    <h4>Wide Selection</h4>
                    <p>Choose from a diverse range of hotels to match your preferences and budget.</p>
                </div>
                <div class="feature">
                    <i class="feature-icon fas fa-calendar-check"></i>
                    <h4>Real-time Availability</h4>
                    <p>Get instant confirmations and check room availability in real-time.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature">
                    <i class="feature-icon fas fa-user-friends"></i>
                    <h4>Easy Booking</h4>
                    <p>Our user-friendly interface makes booking your dream vacation a breeze.</p>
                </div>
                <div class="feature">
                    <i class="feature-icon fas fa-headset"></i>
                    <h4>Exceptional Support</h4>
                    <p>Our dedicated support team is available 24/7 to assist with any queries.</p>
                </div>
            </div>
        </div>

        <p class="mt-4">Thank you for choosing Trek Tales as your travel companion. We're excited to help you embark on unforgettable journeys, one booking at a time.</p>
    </div>

    <?php include "footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
