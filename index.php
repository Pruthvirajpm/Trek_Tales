<!DOCTYPE html>
<html>

<head>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Trek Tales - Your Ultimate Hotel and Vacation Booking Experience</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <style>
            .hotel-card {
                margin-bottom: 20px;
            }

        </style>
    </head>

<body>
    <?php include "navbar.php"; ?>

    <!--<a class="navbar-brand" href="#">Trek Tales</a>-->

    <div class="container mt-5">
        <!-- Image Slider -->
        <div id="imageSlider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
                <li data-target="#imageSlider" data-slide-to="1"></li>
                <li data-target="#imageSlider" data-slide-to="2"></li>
                <!-- Add more indicators as needed -->
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slider1.jpg" class="d-block w-100" alt="Slider 1">
                </div>
                <div class="carousel-item">
                    <img src="images/slider2.jpg" class="d-block w-100" alt="Slider 2">
                </div>
                <div class="carousel-item">
                    <img src="images/slider3.jpg" class="d-block w-100" alt="Slider 3">
                </div>
                <!-- Add more carousel items as needed -->
            </div>
            <a class="carousel-control-prev" href="#imageSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#imageSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



        <div class="container mt-5">
            <h1>Welcome to Trek Tales</h1>
            <p>Your Ultimate Hotel and Vacation Booking Experience</p>

            
            
           <!-- Search Form  It's not completed yet but in future will make it work
        <form class="form-inline mt-3" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search for hotels or packages" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
        -->
        <?php
        
        // Check if a search query is submitted
        if (isset($_GET['search'])) {
            $searchQuery = $_GET['search'];
            // Display the search query
            echo "<h2>Search Results for '$searchQuery'</h2>";

            // Your data structure containing hotel and package information
            $hotelPackageData = [
                [
                    'name' => "Sam's Luxury Resort & Spa",
                    'type' => 'hotel',
                ],
                [
                    'name' => 'Cozy Mountain Lodge',
                    'type' => 'hotel',
                ],
                [
                    'name' => 'Seaside Getaway Inn',
                    'type' => 'hotel',
                ],
                [
                    'name' => 'City Explorer Package',
                    'type' => 'package',
                ],
                [
                    'name' => 'Mountain Adventure Package',
                    'type' => 'package',
                ],
                [
                    'name' => 'Relaxation Retreat Package',
                    'type' => 'package',
                ],
            ];

            // Search through the data structure for matches
            foreach ($hotelPackageData as $item) {
                if (stripos($item['name'], $searchQuery) !== false) {
                    // Display matching content
                    echo "<p>{$item['name']} ({$item['type']})</p>";
                }
            }
        }
        ?>


            <h2>Featured Hotels</h2>
            <div class="row">
                <!-- Hotel 1 -->
                <div class="col-md-4">
                    <div class="card hotel-card">
                        <img src="images/hotel1.jpg" class="card-img-top" alt="Hotel 1">
                        <div class="card-body">
                            <h5 class="card-title">Sam's Luxury Resort & Spa</h5>
                            <p class="card-text">Experience luxury and relaxation in our beautiful resort.</p>
                            <a href="booking.php?type=hotel&id=1" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- Hotel 2 -->
                <div class="col-md-4">
                    <div class="card hotel-card">
                        <img src="images/hotel2.jpg" class="card-img-top" alt="Hotel 2">
                        <div class="card-body">
                            <h5 class="card-title">Cozy Mountain Lodge</h5>
                            <p class="card-text">Escape to the mountains and enjoy cozy lodging.</p>
                            <a href="booking.php?type=hotel&id=2" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- Hotel 3 -->
                <div class="col-md-4">
                    <div class="card hotel-card">
                        <img src="images/hotel3.1.jpg" class="card-img-top" alt="Hotel 3">
                        <div class="card-body">
                            <h5 class="card-title">Seaside Getaway Inn</h5>
                            <p class="card-text">Relax by the ocean and enjoy breathtaking views.</p>
                            <a href="booking.php?type=hotel&id=3" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <h2>Featured Packages</h2>
            <div class="row">
                <!-- Package 1 -->
                <div class="col-md-4">
                    <div class="card hotel-card">
                        <img src="images/package1.jpg" class="card-img-top" alt="Package 1">
                        <div class="card-body">
                            <h5 class="card-title">City Explorer Package</h5>
                            <p class="card-text">Discover the city's attractions with our curated package.</p>
                            <a href="booking.php?type=package&id=4" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- Package 2 -->
                <div class="col-md-4">
                    <div class="card hotel-card">
                        <img src="images/package2.jpg" class="card-img-top" alt="Package 2">
                        <div class="card-body">
                            <h5 class="card-title">Mountain Adventure Package</h5>
                            <p class="card-text">Embark on an exciting mountain adventure with our package.</p>
                            <a href="booking.php?type=package&id=5" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- Package 3 -->
                <div class="col-md-4">
                    <div class="card hotel-card">
                        <img src="images/package3.jpg" class="card-img-top" alt="Package 3">
                        <div class="card-body">
                            <h5 class="card-title">Relaxation Retreat Package</h5>
                            <p class="card-text">Unwind and rejuvenate with our relaxation retreat package.</p>
                            <a href="booking.php?type=package&id=6" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>