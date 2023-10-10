<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand mx-auto" href="#">
        <img src="images/TrekTales.png" width="250" height="auto" class="d-inline-block align-top" alt="Your Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="account.php">My Account</a>
            </li>
            <!--  we don't need login button on login page   <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>       -->
        </ul>

         <!-- Search Form -->
         <form class="form-inline my-2 my-lg-0" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search for hotels or packages" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>