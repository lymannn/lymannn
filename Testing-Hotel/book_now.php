<?php
session_start();

// Cek apakah pengguna sudah login atau belum
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect ke halaman login jika belum login
    exit();
}

require "koneksi.php";

// Cek apakah form booking telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari formulir
    $bookingId = $_POST['bookingId'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkInDate = $_POST['checkInDate'];
    $checkOutDate = $_POST['checkOutDate'];
    $roomType = $_POST['roomType'];
    $guestCount = $_POST['guestCount'];

    // Lakukan validasi atau operasi lain yang diperlukan
    // ...

    $host = "localhost";
    $user= "root";
    $pass = "";
    $database = "bookings";

    // Membuat koneksi
    $conn = mysqli_connect($host, $user, $pass, $database);
    // Memeriksa koneksi
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
}

    // Query INSERT data booking ke tabel yang sesuai
    $sql = "INSERT INTO booking_id (booking_id, name, email, phone, check_in_date, check_out_date, room_type, guest_count)
            VALUES ('$bookingId', '$name', '$email', '$phone', '$checkInDate', '$checkOutDate', '$roomType', '$guestCount')";

    if ($conn->query($sql) === TRUE) {
        $message = 'Booking successful. Your Booking ID is: ' . $bookingId;
    } else {
        $message = 'Error: ' . $conn->error;
    }

    $conn->close();

    // Tampilkan pesan hasil booking
    echo '<script>alert("' . $message . '"); window.location.href = "dashboard.php";</script>';
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Book Now</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style>
        /* Custom CSS styles */
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Book Now</h2>

        <form id="bookNowForm" method="POST">
            <div class="mb-3">
                <label for="bookingId" class="form-label">Booking ID:</label>
                <input type="text" class="form-control" id="bookingId" name="bookingId" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="checkInDate" class="form-label">Check-in Date:</label>
                <input type="date" class="form-control" id="checkInDate" name="checkInDate" required>
            </div>
            <div class="mb-3">
                <label for="checkOutDate" class="form-label">Check-out Date:</label>
                <input type="date" class="form-control" id="checkOutDate" name="checkOutDate" required>
            </div>
            <div class="mb-3">
                <label for="roomType" class="form-label">Room Type:</label>
                <select class="form-select" id="roomType" name="roomType" required>
                    <option value="Standard">Standard</option>
                    <option value="Deluxe">Deluxe</option>
                    <option value="Suite">Executive</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="guestCount" class="form-label">Guest Count:</label>
                <input type="number" class="form-control" id="guestCount" name="guestCount" required>
            </div>
            <button type="submit" class="btn btn-primary">Book Now</button>
        </form>
    </div>

    <script>
        document.getElementById('bookNowForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            // Get form values
            var bookingId = document.getElementById('bookingId').value;
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var checkInDate = document.getElementById('checkInDate').value;
            var checkOutDate = document.getElementById('checkOutDate').value;
            var roomType = document.getElementById('roomType').value;
            var guestCount = document.getElementById('guestCount').value;

            // Perform booking logic here
            // ...

            // Show success message and redirect to dashboard
            var message = 'Booking successful. Your Booking ID is: ' + bookingId;
            alert(message);
            window.location.href = 'dashboard.php';
        });
    </script>
</body>
</html>
