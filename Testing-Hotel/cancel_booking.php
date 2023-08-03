<?php
session_start();

// Cek apakah pengguna sudah login atau belum
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect ke halaman login jika belum login
    exit();
}

// Cek apakah form pembatalan booking telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari formulir
    $bookingId = $_POST['bookingId'];
    $reason = $_POST['reason'];

    // Lakukan logika pembatalan booking
    // ...

    // Tampilkan pesan pembatalan booking
    $message = 'Booking with ID ' . $bookingId . ' has been cancelled successfully.';
    echo '<script>alert("' . $message . '"); window.location.href = "dashboard.php";</script>';
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cancel Booking</title>
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
        <h2>Cancel Booking</h2>

        <form id="cancelForm" method="POST">
            <div class="mb-3">
                <label for="bookingId" class="form-label">Booking ID:</label>
                <input type="text" class="form-control" id="bookingId" name="bookingId" required>
            </div>
            <div class="mb-3">
                <label for="reason" class="form-label">Reason for cancellation:</label>
                <textarea class="form-control" id="reason" name="reason" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-danger">Cancel Booking</button>
        </form>
    </div>

    <script>
        document.getElementById('cancelForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            // Get form values
            var bookingId = document.getElementById('bookingId').value;
            var reason = document.getElementById('reason').value;

            // Perform cancellation logic here
            // ...

            // Show success message and redirect to dashboard
            var message = 'Booking with ID ' + bookingId + ' has been cancelled successfully.';
            alert(message);
            window.location.href = 'dashboard.php';
        });
    </script>
</body>
</html>
