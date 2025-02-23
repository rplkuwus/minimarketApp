<?php
include "../../config/db.php";
//print_r($_POST);

if (isset($_POST['id_barang'], $_POST['nama_barang'], $_POST['kategori'], $_POST['harga'], $_POST['stok'], $_POST['diskon'])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $diskon = $_POST['diskon'];

        $stmt = $conn->prepare("UPDATE barang SET nama_barang=?, kategori=?, harga=?, stok=?, diskon=? WHERE id_barang=?");
        $stmt->bind_param("ssdiii", $nama_barang, $kategori, $harga, $stok, $diskon, $id_barang);

        if ($stmt->execute()) {
            echo "success";
        } else {
            echo "error";
        }
}
?>
