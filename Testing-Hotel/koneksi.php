<?php
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
?>
