<?php
include "../../config/db.php";

$result = $conn->query("
    SELECT t.id_transaksi, b.nama_barang, t.jumlah, t.total_harga, t.tanggal_transaksi 
    FROM transaksi t 
    JOIN barang b ON t.id_barang = b.id_barang 
    ORDER BY t.id_transaksi DESC
");

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
