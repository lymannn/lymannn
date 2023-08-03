<!DOCTYPE html>
<html>
<head>
    <title>About Hotel</title>
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

    <!-- About Hotel -->
    <div class="container">
        <h1>About Us</h1>
        <p>Welcome to Classic hotel, where luxury meets comfort and unparalleled service awaits you. Nestled in the heart of location, Classic hotel is a true haven for discerning travelers seeking an unforgettable experience.
        Classic hotel boasts a wide range of meticulously designed rooms and suites, each offering a perfect blend of style, sophistication, and modern amenities. From our Standard Rooms to our Deluxe Suites, 
        every accommodation option has been thoughtfully crafted to provide a serene retreat after a day of exploring the city or attending business meetings.</p>
        <p>Step into our elegant lobby, adorned with tasteful decor and a warm ambiance, where our friendly and attentive staff will greet you with a genuine smile. Our commitment to exceptional service is unwavering, 
        and we strive to make your stay as seamless and comfortable as possible. Whether you require assistance with travel arrangements, local recommendations, or any other personalized services, 
        our dedicated concierge team is at your disposal 24/7.</p>
        <p>Indulge your palate in our distinguished restaurant, where our talented chefs prepare a tantalizing array of culinary delights. From delectable local specialties to international cuisines,
        each dish is crafted with the finest ingredients, ensuring a memorable dining experience. For a more casual setting, unwind at our stylish lounge,
        where you can savor handcrafted cocktails and unwind in a relaxed atmosphere.</p>
        <p>To rejuvenate your senses, our hotel offers an array of wellness facilities. Energize your body at our state-of-the-art fitness center, equipped with the latest exercise equipment, or take a refreshing dip in our sparkling swimming pool. 
        For ultimate relaxation, indulge in a soothing spa treatment or unwind in our tranquil sauna.</p>
        <p>For those traveling on business, Classic hotel provides a range of sophisticated meeting and event spaces, equipped with cutting-edge technology and supported by our professional events team. Whether you are hosting a conference, a gala dinner, 
        or a small business gathering, we have the perfect venue to suit your needs.</p>
        <p>We understand that every detail counts when it comes to creating a memorable stay. From the plush bedding and luxurious bath amenities to the seamless connectivity and complimentary Wi-Fi throughout the hotel, 
        we have taken care of every aspect to ensure your utmost comfort.</p>
        <p>At Classic hotel, we pride ourselves on our commitment to sustainability. We have implemented eco-friendly practices, including energy conservation, waste management, and the use of locally sourced ingredients, 
        to minimize our environmental footprint and contribute to a greener future.</p>
        <p>Experience the epitome of luxury and personalized service at Classic hotel. Whether you are visiting for business or leisure, we promise to exceed your expectations and create cherished memories that will linger long after you depart. 
        Welcome to a world of elegance, comfort, and exceptional hospitality.</p>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Classic Hotel. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
