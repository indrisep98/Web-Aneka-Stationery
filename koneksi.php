<?php
$servername = "localhost";
$username = "u5034019";
$password = "UpXiSfg%o9";
$database="u5034019_db_aneka";

// Create connection
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>