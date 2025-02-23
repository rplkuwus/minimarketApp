<?php
//print_r($_POST);

include "../../config/db.php";

if (isset($_POST['nama_barang'], $_POST['kategori'], $_POST['harga'], $_POST['stok'], $_POST['diskon'])) {
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $diskon = $_POST['diskon'];

    $stmt = $conn->prepare("INSERT INTO barang (nama_barang, kategori, harga, stok, diskon) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdii", $nama_barang, $kategori, $harga, $stok, $diskon);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
