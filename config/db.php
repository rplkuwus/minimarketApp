<?php
$host = "localhost";
$dbname = "u506386901_minimarket";
$username = "u506386901_minimarket";
$password = "M1n1m4rk3t";

// Buat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die(json_encode(["error" => "Koneksi Gagal: " . $conn->connect_error]));
}
?>
