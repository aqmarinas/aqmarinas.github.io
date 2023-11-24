<?php
// Konfigurasi database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'porto';

// Menghubungkan ke database
$koneksi = mysqli_connect($host, $username, $password, $database);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memeriksa apakah form telah dikirim
if (isset($_POST['submit'])) {
    // Mengambil nilai input dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Menyimpan data ke database
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($koneksi, $sql)) {
        
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }
}
echo "<script>window.location.href='index.html';</script>";

// Menutup koneksi database
mysqli_close($koneksi);
?>
