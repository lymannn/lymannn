<?php
session_start();

// Cek apakah pengguna sudah login atau belum
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect ke halaman login jika belum login
    exit();
}

// Ambil username dari session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Classic Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style>
        /* Custom CSS styles */
        .header {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }

        .container {
            margin-top: 50px;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="dashboard.php">Classic Hotel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="reservasi.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Reservasi
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="book_now.php">Book Now</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="cancel_booking.php">Cancel Booking</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h1>Welcome to Classic Hotel</h1>
            <p>We sincerely welcome your arrival to our website. We are committed to providing an exceptional stay experience and ensuring that you feel at home during your stay at our hotel.
                 From friendly service to high-quality facilities, we strive to meet your expectations and needs.</p>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="hotel-card">
                    <img src="/assets/room1.jpg" class="img-fluid" alt="Hotel 1">
                    <div class="card-body">
                        <h5 class="card-title">Standar Room</h5>
                        <p class="card-text">
                            Stayed for one night in Standard Room
                            Free breakfast daily
                            Free access to the fitness center
                            Daily cleaning service
                            Free Wi-Fi
                            24 hour concierge service.</p>
                        <a href="book_now.php" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="hotel-card">
                    <img src="/assets/room2.jpg" class="img-fluid" alt="Hotel 2">
                    <div class="card-body">
                        <h5 class="card-title">Deluxe Room</h5>
                        <p class="card-text">
                        Stayed for two nights in Deluxe Room
                        Free breakfast daily
                        Free access to fitness center and swimming pool
                        Daily cleaning service
                        Free Wi-Fi
                        24 hour concierge service
                        Better room views or additional amenities.</p>
                        <a href="book_now.php" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="hotel-card">
                    <img src="/assets/room3.jpg" class="img-fluid" alt="Hotel 3">
                    <div class="card-body">
                        <h5 class="card-title">Executive Room</h5>
                        <p class="card-text">
                            Stayed for three nights in Executive Room
                            Free breakfast daily
                            Free access to fitness center, swimming pool and sauna room
                            Daily cleaning service
                            Free Wi-Fi
                            24 hour concierge service
                            Access to executive lounge with complimentary snacks and drinks
                            Free laundry service.</p>
                        <a href="book_now.php" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section class="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About Classic Hotel</h2>
            <p>
            Welcome to Classic hotel, where luxury meets comfort and unparalleled service awaits you. Nestled in the heart of location, Classic hotel is a true haven for discerning travelers seeking an unforgettable experience.
            </p>
            <a href="about.php" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Rating Section -->
    <section class="container mt-5">
      <h2 class="text-center">Customer Reviews</h2>
      <div id="reviewCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-lg-6">
                <div class="card mb-4 shadow">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="card-title">John Doe</h5>
                      <div class="rating">
                        <span class="text-primary">&#9733;</span>
                        <span class="text-primary">&#9733;</span>
                        <span class="text-primary">&#9733;</span>
                        <span class="text-primary">&#9733;</span>
                        <span class="text-muted">&#9733;</span>
                      </div>
                    </div>
                    <p class="card-text">The room I stayed in was absolutely stunning. It was spacious, beautifully designed, and equipped with modern amenities. The comfortable bed provided a restful sleep, 
                    and the luxurious bathroom with its high-quality toiletries made me feel pampered.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card mb-4 shadow">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="card-title">Jane Smith</h5>
                      <div class="rating">
                        <span class="text-primary">&#9733;</span>
                        <span class="text-primary">&#9733;</span>
                        <span class="text-primary">&#9733;</span>
                        <span class="text-muted">&#9733;</span>
                        <span class="text-muted">&#9733;</span>
                      </div>
                    </div>
                    <p class="card-text">Throughout my stay, the staff went above and beyond to ensure my comfort and satisfaction. They were always available to assist with any requests or provide valuable recommendations for exploring the city. 
                    Their attention to detail and genuine hospitality truly stood out.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-6">
                <div class="card mb-4 shadow">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="card-title">Alex Johnson</h5>
                      <div class="rating">
                        <span class="text-primary">&#9733;</span>
                        <span class="text-primary">&#9733;</span>
                        <span class="text-primary">&#9733;</span>
                        <span class="text-muted">&#9733;</span>
                        <span class="text-muted">&#9733;</span>
                      </div>
                    </div>
                    <p class="card-text">One of the highlights of my stay was dining at the hotel's restaurant. The culinary experience was exceptional, with a diverse menu featuring delectable dishes. 
                    The chefs' expertise was evident in every bite, and the attentive service added to the overall dining pleasure.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card mb-4 shadow">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="card-title">Emily Davis</h5>
                      <div class="rating">
                        <span class="text-primary">&#9733;</span>
                        <span class="text-primary">&#9733;</span>
                        <span class="text-primary">&#9733;</span>
                        <span class="text-primary">&#9733;</span>
                        <span class="text-muted">&#9733;</span>
                      </div>
                    </div>
                    <p class="card-text">I must commend the hotel on its commitment to sustainability. Their eco-friendly practices, 
                    from energy conservation to waste management, showcase their dedication to preserving the environment.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#reviewCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#reviewCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Classic Hotel. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

